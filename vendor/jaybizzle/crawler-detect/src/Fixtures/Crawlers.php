<?php

/*
 * This file is part of Crawler Detect - the web crawler detection library.
 *
 * (c) Mark Beech <m@rkbee.ch>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Jaybizzle\CrawlerDetect\Fixtures;

class Crawlers extends AbstractProvider
{
    /**
     * Array of regular expressions to match against the user agent.
     *
     * @var array
     */
    protected $data = array(
        ' YLT',
        '^b0t$',
        '^bluefish ',
        '^Calypso v\/',
        '^Corax',
        '^COMODO DCV',
        '^DangDang',
        '^DavClnt',
        '^DHSH',
        '^Expanse',
        '^FDM ',
        '^git\/',
        '^Goose\/',
        '^Grabber',
        '^HTTPClient\/',
        '^HTTPing',
        '^Java\/',
        '^Jeode\/',
        '^Jetty\/',
        '^Mail\/',
        '^Mget',
        '^Microsoft URL Control',
        '^Mikrotik\/',
        '^Netlab360',
        '^NG\/[0-9\.]',
        '^NING\/',
        '^Nuclei',
        '^PHP\/',
        '^RMA\/',
        '^Ruby|Ruby\/[0-9]',
        '^Swurl ',
        '^TLS tester ',
        '^ureq',
        '^VSE\/[0-9]',
        '^WordPress\.com',
        '^XRL\/[0-9]',
        '^ZmEu',
        '008\/',
        '13TABS',
        '192\.comAgent',
        '2GDPR\/',
        '2ip\.ru',
        '404enemy',
        '7Siters',
        '80legs',
        'a\.pr-cy\.ru',
        'a3logics\.in',
        'A6-Indexer',
        'Abonti',
        'Aboundex',
        'aboutthedomain',
        'Accoona-AI-Agent',
        'acebookexternalhit\/',
        'acoon',
        'acrylicapps\.com\/pulp',
        'Acunetix',
        'AdAuth\/',
        'adbeat',
        'AddThis',
        'ADmantX',
        'AdminLabs',
        'adressendeutschland',
        'adreview\/',
        'adscanner',
        'Adstxtaggregator',
        'adstxt-worker',
        'adstxt\.com',
        'AffiliateLabz\/',
        'agentslug',
        'AHC',
        'aihit',
        'aiohttp\/',
        'Airmail',
        'akka-http\/',
        'akula\/',
        'alertra',
        'alexa site audit',
        'Alibaba\.Security\.Heimdall',
        'Alligator',
        'allloadin',
        'AllSubmitter',
        'alyze\.info',
        'amagit',
        '^Amazon Simple Notification Service Agent$',
        'Anarchie',
        'AndroidDownloadManager',
        'Anemone',
        'AngleSharp',
        'annotate_google',
        'Anthill',
        'Ant\.com',
        'Anturis Agent',
        'AnyEvent-HTTP\/',
        'Apache Droid',
        'Apache OpenOffice',
        'Apache-HttpAsyncClient',
        'Apache-HttpClient',
        'ApacheBench',
        'Apexoo',
        'apimon\.de',
        'APIs-Google',
        'AportWorm\/',
        'AppBeat\/',
        'AppEngine-Google',
        'AppleSyndication',
        'Aprc\/[0-9]',
        'Arachmo',
        'arachnode',
        'Arachnophilia',
        'aria2',
        'Arukereso',
        'asafaweb',
        'Asana\/',
        'AskQuickly',
        'Ask Jeeves',
        'ASPSeek',
        'Asterias',
        'Astute',
        'asynchttp',
        'Attach',
        'attohttpc',
        'autocite',
        'AutomaticWPTester',
        'Autonomy',
        'axios\/',
        'AWS Security Scanner',
        'B-l-i-t-z-B-O-T',
        'Backlink-Ceck',
        'backlink-check',
        'BacklinkHttpStatus',
        'BackStreet',
        'BackupLand',
        'BackWeb',
        'Bad-Neighborhood',
        'Badass',
        'baidu\.com',
        'Bandit',
        'basicstate',
        'BatchFTP',
        'Battleztar Bazinga',
        'baypup\/',
        'BazQux',
        'BBBike',
        'BCKLINKS',
        'BDFetch',
        'BegunAdvertising',
        'Bewica-security-scan',
        'Bidtellect',
        'BigBozz',
        'Bigfoot',
        'biglotron',
        'BingLocalSearch',
        'BingPreview',
        'binlar',
        'biNu image cacher',
        'Bitacle',
        'Bitrix link preview',
        'biz_Directory',
        'BKCTwitterUnshortener\/',
        'Black Hole',
        'Blackboard Safeassign',
        'BlackWidow',
        'BlockNote\.Net',
        'BlogBridge',
        'Bloglines',
        'Bloglovin',
        'BlogPulseLive',
        'BlogSearch',
        'Blogtrottr',
        'BlowFish',
        'boitho\.com-dc',
        'Boost\.Beast',
        'BPImageWalker',
        'Braintree-Webhooks',
        'Branch Metrics API',
        'Branch-Passthrough',
        'Brandprotect',
        'BrandVerity',
        'Brandwatch',
        'Brodie\/',
        'Browsershots',
        'BUbiNG',
        'Buck\/',
        'Buddy',
        'BuiltWith',
        'Bullseye',
        'BunnySlippers',
        'Burf Search',
        'Butterfly\/',
        'BuzzSumo',
        'CAAM\/[0-9]',
        'CakePHP',
        'Calculon',
        'Canary%20Mail',
        'CaretNail',
        'catexplorador',
        'CC Metadata Scaper',
        'Cegbfeieh',
        'censys',
        'centuryb.o.t9[at]gmail.com',
        'Cerberian Drtrs',
        'CERT\.at-Statistics-Survey',
        'cf-facebook',
        'cg-eye',
        'changedetection',
        'ChangesMeter',
        'Charlotte',
        'CheckHost',
        'checkprivacy',
        'CherryPicker',
        'ChinaClaw',
        'Chirp\/',
        'chkme\.com',
        'Chlooe',
        'Chromaxa',
        'CirrusExplorer',
        'CISPA Web Analyser',
        'CISPA Vulnerability Notification',
        'Citoid',
        'CJNetworkQuality',
        'Clarsentia',
        'clips\.ua\.ac\.be',
        'Cloud mapping',
        'CloudEndure',
        'CloudFlare-AlwaysOnline',
        'Cloudflare-Healthchecks',
        'Cloudinary',
        'cmcm\.com',
        'coccoc',
        'cognitiveseo',
        'colly -',
        'CommaFeed',
        'Commons-HttpClient',
        'commonscan',
        'contactbigdatafr',
        'contentkingapp',
        'Contextual Code Sites Explorer',
        'convera',
        'CookieReports',
        'copyright sheriff',
        'CopyRightCheck',
        'Copyscape',
        'cortex\/',
        'Cosmos4j\.feedback',
        'Covario-IDS',
        'Craw\/',
        'Crescent',
        'Crowsnest',
        'Criteo',
        'CSHttp',
        'CSSCheck',
        'Cula\/',
        'curb',
        'Curious George',
        'curl',
        'cuwhois\/',
        'cybo\.com',
        'DAP\/NetHTTP',
        'DareBoost',
        'DatabaseDriverMysqli',
        'DataCha0s',
        'Datafeedwatch',
        'Datanyze',
        'DataparkSearch',
        'dataprovider',
        'DataXu',
        'Daum(oa)?[ \/][0-9]',
        'dBpoweramp',
        'ddline',
        'deeris',
        'delve\.ai',
        'Demon',
        'DeuSu',
        'developers\.google\.com\/\+\/web\/snippet\/',
        'Devil',
        'Digg',
        'Digincore',
        'DigitalPebble',
        'Dirbuster',
        'Discourse Forum Onebox',
        'Disqus\/',
        'Dispatch\/',
        'DittoSpyder',
        'dlvr',
        'DMBrowser',
        'DNSPod-reporting',
        'docoloc',
        'Dolphin http client',
        'DomainAppender',
        'DomainLabz',
        'Domains Project\/',
        'Donuts Content Explorer',
        'dotMailer content retrieval',
        'dotSemantic',
        'downforeveryoneorjustme',
        'Download Wonder',
        'downnotifier',
        'DowntimeDetector',
        'Drip',
        'drupact',
        'Drupal \(\+http:\/\/drupal\.org\/\)',
        'DTS Agent',
        'dubaiindex',
        'DuplexWeb-Google',
        'DynatraceSynthetic',
        'EARTHCOM',
        'Easy-Thumb',
        'EasyDL',
        'Ebingbong',
        'ec2linkfinder',
        'eCairn-Grabber',
        'eCatch',
        'ECCP',
        'eContext\/',
        'Ecxi',
        'EirGrabber',
        'ElectricMonk',
        'elefent',
        'EMail Exractor',
        'EMail Wolf',
        'EmailWolf',
        'Embarcadero',
        'Embed PHP Library',
        'Embedly',
        'endo\/',
        'europarchive\.org',
        'evc-batch',
        'EventMachine HttpClient',
        'Everwall Link Expander',
        'Evidon',
        'Evrinid',
        'ExactSearch',
        'ExaleadCloudview',
        'Excel\/',
        'exif',
        'ExoRank',
        'Exploratodo',
        'Express WebPictures',
        'Extreme Picture Finder',
        'EyeNetIE',
        'ezooms',
        'facebookexternalhit',
        'facebookexternalua',
        'facebookplatform',
        'fairshare',
        'Faraday v',
        'fasthttp',
        'Faveeo',
        'Favicon downloader',
        'faviconkit',
        'faviconarchive',
        'FavOrg',
        'Feed Wrangler',
        'Feedable\/',
        'Feedbin',
        'FeedBooster',
        'FeedBucket',
        'FeedBunch\/',
        'FeedBurner',
        'feeder',
        'Feedly',
        'Feedshow\/',
        'FeedshowOnline',
        'Feedspot',
        'FeedViewer\/',
        'Feedwind\/',
        'FeedZcollector',
        'feeltiptop',
        'Fetch API',
        'Fetch\/[0-9]',
        'Fever\/[0-9]',
        'FHscan',
        'Fiery%20Feeds',
        'Filestack',
        'Fimap',
        'findlink',
        'findthatfile',
        'FlashGet',
        'FlipboardBrowserProxy',
        'FlipboardProxy',
        'FlipboardRSS',
        'Flock\/',
        'Florienzh\/',
        'fluffy',
        'Flunky',
        'flynxapp',
        'forensiq',
        'FoundSeoTool',
        'http:\/\/www.neomo.de\/', //'Francis [Bot]'
        'free thumbnails',
        'Freeuploader',
        'FreshRSS',
        'Funnelback',
        'Fuzz Faster U Fool',
        'G-i-g-a-b-o-t',
        'g00g1e\.net',
        'ganarvisitas',
        'gdnplus\.com',
        'geek-tools',
        'Genieo',
        'GentleSource',
        'GetCode',
        'Getintent',
        'GetLinkInfo',
        'getprismatic',
        'GetRight',
        'getroot',
        'GetURLInfo\/',
        'GetWeb',
        'Geziyor',
        'Ghost Inspector',
        'GigablastOpenSource',
        'GIS-LABS',
        'github-camo',
        'GitHub-Hookshot',
        'github\.com',
        'Goldfire Server',
        'Go [\d\.]* package http',
        'Go http package',
        'Go-Ahead-Got-It',
        'Go-http-client',
        'go-mtasts\/',
        'Go!Zilla',
        'gobyus',
        'Gofeed',
        'gofetch',
        'GomezAgent',
        'gooblog',
        'Goodzer\/',
        'Google AppsViewer',
        'Google Desktop',
        'Google favicon',
        'Google Keyword Suggestion',
        'Google Keyword Tool',
        'Google Page Speed Insights',
        'Google-Podcast',
        'Google PP Default',
        'Google Search Console',
        'Google Web Preview',
        'Google-Ads-Creatives-Assistant',
        'Google-Ads-Overview',
        'Google-Adwords',
        'Google-Apps-Script',
        'Google-Calendar-Importer',
        'Google-HotelAdsVerifier',
        'Google-HTTP-Java-Client',
        'Google-SMTP-STS',
        'Google-Publisher-Plugin',
        'Google-Read-Aloud',
        'Google-SearchByImage',
        'Google-Site-Verification',
        'Google-speakr',
        'Google-Structured-Data-Testing-Tool',
        'Google-Youtube-Links',
        'google-xrawler',
        'GoogleDocs',
        'GoogleHC\/',
        'GoogleProducer',
        'GoogleSites',
        'Google-Transparency-Report',
        'Gookey',
        'GoSpotCheck',
        'gosquared-thumbnailer',
        'Gotit',
        'GoZilla',
        'grabify',
        'GrabNet',
        'Grafula',
        'Grammarly',
        'GrapeFX',
        'GreatNews',
        'Gregarius',
        'GRequests',
        'grokkit',
        'grouphigh',
        'grub-client',
        'gSOAP\/',
        'GT::WWW',
        'GTmetrix',
        'GuzzleHttp',
        'gvfs\/',
        'HAA(A)?RTLAND http client',
        'Haansoft',
        'hackney\/',
        'Hadi Agent',
        'HappyApps-WebCheck',
        'Hardenize',
        'Hatena',
        'Havij',
        'HaxerMen',
        'HeadlessChrome',
        'HEADMasterSEO',
        'HeartRails_Capture',
        'help@dataminr\.com',
        'heritrix',
        'Hexometer',
        'historious',
        'hkedcity',
        'hledejLevne\.cz',
        'Hloader',
        'HMView',
        'Holmes',
        'HonesoSearchEngine',
        'HootSuite Image proxy',
        'Hootsuite-WebFeed',
        'hosterstats',
        'HostTracker',
        'ht:\/\/check',
        'htdig',
        'HTMLparser',
        'htmlyse',
        'HTTP Banner Detection',
        'HTTP_Compression_Test',
        'http_request2',
        'http_requester',
        'http-get',
        'HTTP-Header-Abfrage',
        'http-kit',
        'http-request\/',
        'HTTP-Tiny',
        'HTTP::Lite',
        'http\.rb\/',
        'http_get',
        'HttpComponents',
        'httphr',
        'HTTPMon',
        'HTTPie',
        'httpRequest',
        'httpscheck',
        'httpssites_power',
        'httpunit',
        'HttpUrlConnection',
        'httrack',
        'huaweisymantec',
        'HubSpot ',
        'HubSpot-Link-Resolver',
        'Humanlinks',
        'i2kconnect\/',
        'Iblog',
        'ichiro',
        'Id-search',
        'IdeelaborPlagiaat',
        'IDG Twitter Links Resolver',
        'IDwhois\/',
        'Iframely',
        'igdeSpyder',
        'iGooglePortal',
        'IlTrovatore',
        'Image Fetch',
        'Image Sucker',
        'ImageEngine\/',
        'ImageVisu\/',
        'Imagga',
        'imagineeasy',
        'imgsizer',
        'InAGist',
        'inbound\.li parser',
        'InDesign%20CC',
        'Indy Library',
        'InetURL',
        'infegy',
        'infohelfer',
        'InfoTekies',
        'InfoWizards Reciprocal Link',
        'inpwrd\.com',
        'instabid',
        'Instapaper',
        'Integrity',
        'integromedb',
        'Intelliseek',
        'InterGET',
        'internet_archive',
        'Internet Ninja',
        'InternetSeer',
        'internetVista monitor',
        'internetwache',
        'intraVnews',
        'IODC',
        'IOI',
        'iplabel',
        'ips-agent',
        'IPS\/[0-9]',
        'IPWorks HTTP\/S Component',
        'iqdb\/',
        'Iria',
        'Irokez',
        'isitup\.org',
        'iskanie',
        'isUp\.li',
        'iThemes Sync\/',
        'IZaBEE',
        'iZSearch',
        'JAHHO',
        'janforman',
        'Jaunt\/',
        'Java.*outbrain',
        'javelin\.io',
        'Jbrofuzz',
        'Jersey\/',
        'JetCar',
        'Jigsaw',
        'Jobboerse',
        'JobFeed discovery',
        'Jobg8 URL Monitor',
        'jobo',
        'Jobrapido',
        'Jobsearch1\.5',
        'JoinVision Generic',
        'JolokiaPwn',
        'Joomla',
        'Jorgee',
        'JS-Kit',
        'JungleKeyThumbnail',
        'JustView',
        'Kaspersky Lab CFR link resolver',
        'Kelny\/',
        'Kerrigan\/',
        'KeyCDN',
        'Keyword Density',
        'Keywords Research',
        'khttp\/',
        'KickFire',
        'KimonoLabs\/',
        'Kml-Google',
        'knows\.is',
        'KOCMOHABT',
        'kouio',
        'kubectl',
        'kube-probe',
        'kulturarw3',
        'KumKie',
        'L\.webis',
        'Larbin',
        'Lavf\/',
        'leakix\.net',
        'LeechFTP',
        'LeechGet',
        'letsencrypt',
        'Lftp',
        'LibVLC',
        'LibWeb',
        'Libwhisker',
        'libwww',
        'Licorne',
        'Liferea\/',
        'Lightspeedsystems',
        'Lighthouse',
        'Likse',
        'limber\.io',
        'Link Valet',
        'link_thumbnailer',
        'LinkAnalyser',
        'LinkAlarm\/',
        'linkCheck',
        'linkdex',
        'LinkExaminer',
        'linkfluence',
        'linkpeek',
        'LinkScan',
        'LinksManager',
        'LinkPreview',
        'LinkTiger',
        'LinkWalker',
        'Lipperhey',
        'Litemage_walker',
        'livedoor ScreenShot',
        'LoadImpactRload',
        'localsearch-web',
        'LongURL API',
        'longurl-r-package',
        'looid\.com',
        'looksystems\.net',
        'ltx71',
        'lua-resty-http',
        'Lush Http Client',
        'lwp-request',
        'lwp-trivial',
        'LWP::Simple',
        'lycos',
        'LYT\.SR',
        'mabontland',
        'MacOutlook\/',
        'Mag-Net',
        'MagpieRSS',
        'Mail\.Ru',
        'Mail::STS',
        'MailChimp',
        'Majestic12',
        'makecontact\/',
        'Mandrill',
        'MapperCmd',
        'marketinggrader',
        'MarkMonitor',
        'MarkWatch',
        'Mass Downloader',
        'masscan\/',
        'Mata Hari',
        'mattermost',
        'Mediametric',
        'Mediapartners-Google',
        'mediawords',
        'MegaIndex\.ru',
        'MeltwaterNews',
        'Melvil Rawi',
        'MemGator',
        'Metaspinner',
        'MetaURI',
        'MFC_Tear_Sample',
        'Microsearch',
        'Microsoft\.Data\.Mashup',
        'Microsoft Office',
        'Microsoft Outlook',
        'Microsoft Windows Network Diagnostics',
        'Microsoft-WebDAV-MiniRedir',
        'Microsoft Data Access',
        'MIDown tool',
        'MIIxpc',
        'Mindjet',
        'Miniature\.io',
        'Miniflux',
        'mio_httpc',
        'Miro-HttpClient',
        'Mister PiX',
        'mixdata dot com',
        'mixed-content-scan',
        'mixnode',
        'Mnogosearch',
        'mogimogi',
        'Mojeek',
        'Mojolicious \(Perl\)',
        'Monit\/',
        'monitis',
        'Monitority\/',
        'montastic',
        'MonTools',
        'Moreover',
        'Morfeus Fucking Scanner',
        'Morning Paper',
        'MovableType',
        'mowser',
        'Mr\.4x3 Powered',
        'Mrcgiguy',
        'MS Web Services Client Protocol',
        'MSFrontPage',
        'mShots',
        'MuckRack\/',
        'muhstik-scan',
        'MVAClient',
        'MxToolbox\/',
        'myseosnapshot',
        'nagios',
        'Najdi\.si',
        'Name Intelligence',
        'NameFo\.com',
        'Nameprotect',
        'nationalarchives',
        'Navroad',
        'NearSite',
        'Needle',
        'Nessus',
        'nettle',
        'Net Vampire',
        'NetAnts',
        'NETCRAFT',
        'NetLyzer',
        'NetMechanic',
        'NetNewsWire',
        'Netpursual',
        'netresearch',
        'NetShelter ContentScan',
        'Netsparker',
        'NetTrack',
        'Netvibes',
        'NetZIP',
        'Neustar WPM',
        'NeutrinoAPI',
        'NewRelicPinger',
        'NewsBlur .*Finder',
        'NewsGator',
        'newsme',
        'newspaper\/',
        'NetSystemsResearch',
        'Nexgate Ruby Client',
        'nghttp2',
        'NG-Search',
        'Nibbler',
        'NICErsPRO',
        'NihilScio',
        'Nikto',
        'nineconnections',
        'NLNZ_IAHarvester',
        'Nmap Scripting Engine',
        'node-superagent',
        'node-urllib',
        'node\.io',
        'Nodemeter',
        'NodePing',
        'nominet\.org\.uk',
        'nominet\.uk',
        'Norton-Safeweb',
        'Notifixious',
        'notifyninja',
        'NotionEmbedder',
        'nuhk',
        'nutch',
        'Nuzzel',
        'nWormFeedFinder',
        'nyawc\/',
        'Nymesis',
        'NYU',
        'Observatory\/',
        'Ocelli\/',
        'Octopus',
        'oegp',
        'Offline Explorer',
        'Offline Navigator',
        'OgScrper',
        'okhttp',
        'omgili',
        'OMSC',
        'Online Domain Tools',
        'OpenCalaisSemanticProxy',
        'Openfind',
        'OpenLinkProfiler',
        'Openstat\/',
        'OpenVAS',
        'OPPO A33',
        'Optimizer',
        'Open Source RSS',
        'Orbiter',
        'OrgProbe\/',
        'orion-semantics',
        'Outlook-Express',
        'Outlook-iOS',
        'ow\.ly',
        'Owler',
        'Owlin',
        'ownCloud News',
        'OxfordCloudService',
        'Page Valet',
        'page_verifier',
        'page scorer',
        'page2rss',
        'PageFreezer',
        'PageGrabber',
        'PagePeeker',
        'PageScorer',
        'PageThing',
        'Pagespeed\/',
        'Panopta',
        'panscient',
        'Papa Foto',
        'parsijoo',
        'Pavuk',
        'PayPal IPN',
        'pcBrowser',
        'Pcore-HTTP',
        'PDF24 URL To PDF',
        'Pearltrees',
        'PECL::HTTP',
        'peerindex',
        'Peew',
        'PeoplePal',
        'Perlu -',
        'PhantomJS Screenshoter',
        'PhantomJS\/',
        'Photon\/',
        'phpservermon',
        'php-requests',
        'Pi-Monster',
        'Picscout',
        'Picsearch',
        'PictureFinder',
        'Pimonster',
        'ping\.blo\.gs',
        'Pingability',
        'PingAdmin\.Ru',
        'Pingdom',
        'Pingoscope',
        'PingSpot',
        'pinterest\.com',
        'Pixray',
        'Pizilla',
        'Plagger\/',
        'Pleroma ',
        'Ploetz \+ Zeller',
        'Plukkie',
        'plumanalytics',
        'PocketImageCache',
        'PocketParser',
        'Pockey',
        'PodcastAddict\/',
        'POE-Component-Client-HTTP',
        'Polymail\/',
        'Pompos',
        'Porkbun',
        'Port Monitor',
        'postano',
        'postfix-mta-sts-resolver',
        'PostmanRuntime',
        'postplanner\.com',
        'PostPost',
        'postrank',
        'PowerPoint\/',
        'Prebid',
        'Prerender',
        'Priceonomics Analysis Engine',
        'PrintFriendly',
        'PritTorrent',
        'Prlog',
        'probethenet',
        'Project ?25499',
        'Project-Resonance',
        'prospectb2b',
        'Protopage',
        'ProWebWalker',
        'proximic',
        'PRTG Network Monitor',
        'pshtt, https scanning',
        'PTST ',
        'PTST\/[0-9]+',
        'Pump',
        'python-httpx',
        'Python-httplib2',
        'python-requests',
        'Python-urllib',
        'Qirina Hurdler',
        'QQDownload',
        'QrafterPro',
        'Qseero',
        'Qualidator',
        'QueryN Metasearch',
        'queuedriver',
        'quic-go-HTTP\/',
        'QuiteRSS',
        'Quora Link Preview',
        'Qwantify',
        'Radian6',
        'RadioPublicImageResizer',
        'Railgun\/',
        'RankActive',
        'RankFlex',
        'RankSonicSiteAuditor',
        'Re-re Studio',
        'ReactorNetty',
        'Readability',
        'RealDownload',
        'RealPlayer%20Downloader',
        'RebelMouse',
        'Recorder',
        'RecurPost\/',
        'redback\/',
        'ReederForMac',
        'Reeder\/',
        'ReGet',
        'RepoMonkey',
        'request\.js',
        'reqwest\/',
        'ResponseCodeTest',
        'RestSharp',
        'Riddler',
        'Rival IQ',
        'Robosourcer',
        'Robozilla',
        'ROI Hunter',
        'RPT-HTTPClient',
        'RSSOwl',
        'RSSMix\/',
        'RyowlEngine',
        'safe-agent-scanner',
        'SalesIntelligent',
        'Saleslift',
        'Sendsay\.Ru',
        'SauceNAO',
        'SBIder',
        'sc-downloader',
        'scalaj-http',
        'Scamadviser-Frontend',
        'scan\.lol',
        'ScanAlert',
        'Scoop',
        'scooter',
        'ScoutJet',
        'ScopeContentAG-HTTP-Client',
        'ScoutURLMonitor',
        'ScrapeBox Page Scanner',
        'Scrapy',
        'Screaming',
        'ScreenShotService',
        'Scrubby',
        'Scrutiny\/',
        'search\.thunderstone',
        'Search37',
        'searchenginepromotionhelp',
        'Searchestate',
        'SearchExpress',
        'SearchSight',
        'SearchWP',
        'Seeker',
        'semanticdiscovery',
        'semanticjuice',
        'Semiocast HTTP client',
        'Semrush',
        'sentry\/',
        'SEO Browser',
        'Seo Servis',
        'seo-nastroj\.cz',
        'seo4ajax',
        'Seobility',
        'SEOCentro',
        'SeoCheck',
        'SEOkicks',
        'SEOlizer',
        'Seomoz',
        'SEOprofiler',
        'SEOsearch',
        'seoscanners',
        'seositecheckup',
        'SEOstats',
        'servernfo',
        'sexsearcher',
        'Seznam',
        'Shelob',
        'Shodan',
        'Shoppimon',
        'ShopWiki',
        'shortURL lengthener',
        'ShortLinkTranslate',
        'shrinktheweb',
        'Sideqik',
        'Siege',
        'SimplePie',
        'SimplyFast',
        'Siphon',
        'SISTRIX',
        'Site-Shot\/',
        'Site Sucker',
        'Site24x7',
        'SiteBar',
        'Sitebeam',
        'Sitebulb\/',
        'SiteCondor',
        'SiteExplorer',
        'SiteGuardian',
        'Siteimprove',
        'SiteIndexed',
        'Sitemap(s)? Generator',
        'SitemapGenerator',
        'SiteMonitor',
        'Siteshooter B0t',
        'SiteSnagger',
        'SiteSucker',
        'SiteTruth',
        'Sitevigil',
        'sitexy\.com',
        'SkypeUriPreview',
        'Slack\/',
        'slider\.com',
        'sli-systems\.com',
        'slurp',
        'SlySearch',
        'SmartDownload',
        'SMRF URL Expander',
        'SMUrlExpander',
        'Snake',
        'Snappy',
        'SnapSearch',
        'Snarfer\/',
        'SniffRSS',
        'sniptracker',
        'Snoopy',
        'SnowHaze Search',
        'sogou web',
        'SortSite',
        'Sottopop',
        'sovereign\.ai',
        'SpaceBison',
        'SpamExperts',
        'Spammen',
        'Spanner',
        'spaziodati',
        'SPDYCheck',
        'Specificfeeds',
        'speedy',
        'SPEng',
        'Spinn3r',
        'spray-can',
        'Sprinklr ',
        'spyonweb',
        'sqlmap',
        'Sqlworm',
        'Sqworm',
        'SSL Labs',
        'ssl-tools',
        'StackRambler',
        'Statastico\/',
        'Statically-',
        'StatusCake',
        'Steeler',
        'Stratagems Kumo',
        'Stripe\/',
        'Stroke\.cz',
        'StudioFACA',
        'StumbleUpon',
        'suchen',
        'Sucuri',
        'summify',
        'SuperHTTP',
        'Surphace Scout',
        'Suzuran',
        'swcd ',
        'Symfony BrowserKit',
        'Symfony2 BrowserKit',
        'Syndirella\/',
        'SynHttpClient-Built',
        'Sysomos',
        'sysscan',
        'Szukacz',
        'T0PHackTeam',
        'tAkeOut',
        'Tarantula\/',
        'Taringa UGC',
        'TarmotGezgin',
        'tchelebi\.io',
        'techiaith\.cymru',
        'Teleport',
        'Telesoft',
        'Telesphoreo',
        'Telesphorep',
        'Tenon\.io',
        'teoma',
        'terrainformatica',
        'Test Certificate Info',
        'testuri',
        'Tetrahedron',
        'TextRazor Downloader',
        'The Drop Reaper',
        'The Expert HTML Source Viewer',
        'The Knowledge AI',
        'The Intraformant',
        'theinternetrules',
        'TheNomad',
        'Thinklab',
        'Thumbshots',
        'ThumbSniper',
        'Thumbor',
        'timewe\.net',
        'TinEye',
        'Tiny Tiny RSS',
        'TLSProbe\/',
        'Toata',
        'topster',
        'touche\.com',
        'Traackr\.com',
        'tracemyfile',
        'Trackuity',
        'TrapitAgent',
        'Trendiction',
        'Trendsmap',
        'trendspottr',
        'truwoGPS',
        'TryJsoup',
        'TulipChain',
        'Turingos',
        'Turnitin',
        'tweetedtimes',
        'Tweetminster',
        'Tweezler\/',
        'twibble',
        'Twice',
        'Twikle',
        'Twingly',
        'Twisted PageGetter',
        'Typhoeus',
        'ubermetrics-technologies',
        'uclassify',
        'UdmSearch',
        'unchaos',
        'unirest-java',
        'ultimate_sitemap_parser',
        'UniversalFeedParser',
        'Unshorten\.It',
        'unshortenit',
        'Untiny',
        'UnwindFetchor',
        'updated',
        'updown\.io daemon',
        'Upflow',
        'Uptimia',
        'URL\/Emacs',
        'Urlcheckr',
        'URL Verifier',
        'URLitor',
        'urlresolver',
        'Urlstat',
        'URLTester',
        'UrlTrends Ranking Updater',
        'URLy Warning',
        'URLy\.Warning',
        'Vacuum',
        'Vagabondo',
        'VB Project',
        'vBSEO',
        'VCI',
        'via ggpht\.com GoogleImageProxy',
        'Virusdie',
        'visionutils',
        'vkShare',
        'VoidEYE',
        'Voil',
        'voltron',
        'voyager\/',
        'VSAgent\/',
        'VSB-TUO\/',
        'Vulnbusters Meter',
        'VYU2',
        'w3af\.org',
        'W3C_Unicorn',
        'W3C-checklink',
        'W3C-mobileOK',
        'WAC-OFU',
        'Wallpapers\/[0-9]+',
        'WallpapersHD',
        'WakeletLinkExpander',
        'wangling',
        'Wappalyzer',
        'WatchMouse',
        'WbSrch\/',
        'WDT\.io',
        'web-capture\.net',
        'Web-sniffer',
        'Web Auto',
        'Web Collage',
        'Web Enhancer',
        'Web Fetch',
        'Web Fuck',
        'Web Pix',
        'Web Sauger',
        'Web spyder',
        'Web Sucker',
        'Webalta',
        'Webauskunft',
        'WebAuto',
        'WebCapture',
        'WebClient\/',
        'webcollage',
        'WebCookies',
        'WebCopier',
        'WebCorp',
        'WebDataStats',
        'WebDoc',
        'WebEnhancer',
        'WebFetch',
        'WebFuck',
        'WebGazer',
        'WebGo IS',
        'WebImageCollector',
        'WebImages',
        'WebIndex',
        'webkit2png',
        'WebLeacher',
        'webmastercoffee',
        'webmon ',
        'WebPix',
        'WebReaper',
        'WebSauger',
        'webscreenie',
        'Webshag',
        'Webshot',
        'Website Quester',
        'websitepulse agent',
        'WebsiteQuester',
        'Websnapr',
        'WebSniffer',
        'Webster',
        'WebStripper',
        'WebSucker',
        'webtech\/',
        'Webthumb\/',
        'WebThumbnail',
        'WebWhacker',
        'WebZIP',
        'WeLikeLinks',
        'WEPA',
        'WeSEE',
        'wf84',
        'Wfuzz\/',
        'wget',
        'WhatCMS',
        'WhatsApp',
        'WhatsMyIP',
        'WhatWeb',
        'WhereGoes\?',
        'Whibse',
        'WhoAPI\/',
        'WhoRunsCoinHive',
        'Whynder Magnet',
        'WinHTTP\/',
        'WinHttp-Autoproxy-Service',
        'Windows-RSS-Platform',
        'WinPodder',
        'wkhtmlto',
        'wmtips',
        'Woko',
        'Wolfram HTTPClient',
        'woorankreview',
        'Word\/',
        'WordPress\/',
        'worldping-api',
        'WordupinfoSearch',
        'wotbox',
        'WP Engine Install Performance API',
        'WP Rocket',
        'wpif',
        'wprecon\.com survey',
        'WPScan',
        'wscheck',
        'Wtrace',
        'WWW-Collector-E',
        'WWW-Mechanize',
        'WWW::Document',
        'WWW::Mechanize',
        'www\.monitor\.us',
        'WWWOFFLE',
        'x09Mozilla',
        'x22Mozilla',
        'XaxisSemanticsClassifier',
        'XenForo\/',
        'Xenu Link Sleuth',
        'XING-contenttabreceiver',
        'xpymep([0-9]?)\.exe',
        'Y!J-(ASR|BSC)',
        'Y\!J-BRW',
        'Yaanb',
        'yacy',
        'Yahoo Link Preview',
        'YahooCacheSystem',
        'YahooMailProxy',
        'YahooYSMcm',
        'YandeG',
        'Yandex(?!Search)',
        'yanga',
        'yeti',
        'Yo-yo',
        'Yoleo Consumer',
        'yomins\.com',
        'yoogliFetchAgent',
        'YottaaMonitor',
        'Your-Website-Sucks',
        'yourls\.org',
        'YoYs\.net',
        'YP\.PL',
        'Zabbix',
        'Zade',
        'Zao',
        'Zauba',
        'Zemanta Aggregator',
        'Zend_Http_Client',
        'Zend\\\\Http\\\\Client',
        'Zermelo',
        'Zeus ',
        'zgrab',
        'ZnajdzFoto',
        'ZnHTTP',
        'Zombie\.js',
        'Zoom\.Mac',
        'ZoteroTranslationServer',
        'ZyBorg',
        '[a-z0-9\-_]*(bot|crawl|archiver|transcoder|spider|uptime|validator|fetcher|cron|checker|reader|extractor|monitoring|analyzer|scraper)',
    );
}
