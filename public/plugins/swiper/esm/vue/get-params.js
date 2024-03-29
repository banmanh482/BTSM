// eslint-disable-next-line
import Swiper from '../../core';
import { isObject, extend } from './utils';
import { paramsList } from './params-list';

function getParams(obj) {
  if (obj === void 0) {
    obj = {};
  }

  var params = {
    on: {}
  };
  var passedParams = {};
  extend(params, Swiper.defaults);
  extend(params, Swiper.extendedDefaults);
  params._emitClasses = true;
  params.init = false;
  var rest = {};
  var allowedParams = paramsList.map(function (key) {
    return key.replace(/_/, '');
  }); // Prevent empty Object.keys(obj) array on ios.

  var plainObj = Object.assign({}, obj);
  Object.keys(plainObj).forEach(function (key) {
    if (typeof obj[key] === 'undefined') return;

    if (allowedParams.indexOf(key) >= 0) {
      if (isObject(obj[key])) {
        params[key] = {};
        passedParams[key] = {};
        extend(params[key], obj[key]);
        extend(passedParams[key], obj[key]);
      } else {
        params[key] = obj[key];
        passedParams[key] = obj[key];
      }
    } else if (key.search(/on[A-Z]/) === 0 && typeof obj[key] === 'function') {
      params.on["" + key[2].toLowerCase() + key.substr(3)] = obj[key];
    } else {
      rest[key] = obj[key];
    }
  });
  ['navigation', 'pagination', 'scrollbar'].forEach(function (key) {
    if (params[key] === true) params[key] = {};
  });
  return {
    params: params,
    passedParams: passedParams,
    rest: rest
  };
}

export { getParams };