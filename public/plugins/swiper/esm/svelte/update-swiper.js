import { isObject, extend } from './utils';

function updateSwiper(swiper, passedParams, changedParams) {
  var updateParams = changedParams.filter(function (key) {
    return key !== 'children' && key !== 'direction';
  });
  var currentParams = swiper.params,
      pagination = swiper.pagination,
      navigation = swiper.navigation,
      scrollbar = swiper.scrollbar,
      thumbs = swiper.thumbs;
  var needThumbsInit;
  var needControllerInit;
  var needPaginationInit;
  var needScrollbarInit;
  var needNavigationInit;

  if (changedParams.includes('thumbs') && passedParams.thumbs && passedParams.thumbs.swiper && currentParams.thumbs && !currentParams.thumbs.swiper) {
    needThumbsInit = true;
  }

  if (changedParams.includes('controller') && passedParams.controller && passedParams.controller.control && currentParams.controller && !currentParams.controller.control) {
    needControllerInit = true;
  }

  if (changedParams.includes('pagination') && passedParams.pagination && passedParams.pagination.el && (currentParams.pagination || currentParams.pagination === false) && pagination && !pagination.el) {
    needPaginationInit = true;
  }

  if (changedParams.includes('scrollbar') && passedParams.scrollbar && passedParams.scrollbar.el && (currentParams.scrollbar || currentParams.scrollbar === false) && scrollbar && !scrollbar.el) {
    needScrollbarInit = true;
  }

  if (changedParams.includes('navigation') && passedParams.navigation && passedParams.navigation.prevEl && passedParams.navigation.nextEl && (currentParams.navigation || currentParams.navigation === false) && navigation && !navigation.prevEl && !navigation.nextEl) {
    needNavigationInit = true;
  }

  if (changedParams.includes('virtual')) {
    if (passedParams.virtual && passedParams.virtual.slides && swiper.virtual) {
      swiper.virtual.slides = passedParams.virtual.slides;
      swiper.virtual.update();
    }
  }

  updateParams.forEach(function (key) {
    if (isObject(currentParams[key]) && isObject(passedParams[key])) {
      extend(currentParams[key], passedParams[key]);
    } else {
      currentParams[key] = passedParams[key];
    }
  });

  if (needThumbsInit) {
    var initialized = thumbs.init();

    if (initialized) {
      thumbs.update(true);
    }
  }

  if (needControllerInit) {
    swiper.controller.control = currentParams.controller.control;
  }

  if (needPaginationInit) {
    pagination.init();
    pagination.render();
    pagination.update();
  }

  if (needScrollbarInit) {
    scrollbar.init();
    scrollbar.updateSize();
    scrollbar.setTranslate();
  }

  if (needNavigationInit) {
    navigation.init();
    navigation.update();
  }

  if (changedParams.includes('allowSlideNext')) {
    swiper.allowSlideNext = passedParams.allowSlideNext;
  }

  if (changedParams.includes('allowSlidePrev')) {
    swiper.allowSlidePrev = passedParams.allowSlidePrev;
  }

  if (changedParams.includes('direction')) {
    swiper.changeDirection(passedParams.direction, false);
  }

  swiper.update();
}

export { updateSwiper };