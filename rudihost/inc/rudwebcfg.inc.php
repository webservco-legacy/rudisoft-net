<?php
/*
./inc/rudwebcfg.inc.php
21:06 2008-06-07
*/

if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

// WEBSITE START DATE
define('_RUDWEB_CFG_START', '2008-06-07');
// WEBSITE OWNER/CLIENT DATA
define('_RUDWEB_CFG_CLCOM', 'RudiSoft.Net'); // company name
define('_RUDWEB_CFG_CLNAM', 'Radu Maier'); // contact person
// WEBSITE DEVELOPER DATA
define('_RUDWEB_CFG_DVCOM', 'RudiSoft.Net'); // company name
define('_RUDWEB_CFG_DVURL', 'http://www.rudisoft.net'); // company url
define('_RUDWEB_CFG_DVNAM', 'Radu Maier'); // contact person
// HTML HEADER META
define('_RUDWEB_CFG_DESIG', _RUDWEB_CFG_DVNAM); // company
define('_RUDWEB_CFG_PUBL', _RUDWEB_CFG_DVCOM); // company
define('_RUDWEB_CFG_COPY', '&copy; ' . substr(_RUDWEB_CFG_START, 0, 4) . ' ' . _RUDWEB_CFG_CLCOM);
define('_RUDWEB_CFG_RATNG', 'General');
define('_RUDWEB_CFG_DISTR', 'Global'); /* Global / Local */
define('_RUDWEB_CFG_ROBOTS', 'Index, Follow'); /* INDEX, FOLLOW / NOINDEX, NOFOLLOW */
define('_RUDWEB_CFG_PRAG', 'no-cache');
define('_RUDWEB_CFG_EXP', '0');
define('_RUDWEB_CFG_CACHE', 'no-cache');
// DEFAULT LANGUAGE
define('_RUDWEB_CFG_LANG','en');
// DEFAULT SKIN
define('_RUDWEB_CFG_SKIN','rhost');
// DEFAULT PAGE TO DISPLAY AT FIRST (IF ENABLED)
define('_RUDWEB_CFG_CNT_EN','default');
define('_RUDWEB_CFG_CNT_DE','default');
define('_RUDWEB_CFG_CNT_ES','default');
define('_RUDWEB_CFG_CNT_FR','default');
define('_RUDWEB_CFG_CNT_IT','default');
define('_RUDWEB_CFG_CNT_RO','default');
define('_RUDWEB_CFG_CNT_SHW', '1'); // enable display of content at start
//OPTIONAL SITE MODULES
define('_RUDWEB_CFG_LANG_ON', '1'); // enable multiple languages
define('_RUDWEB_CFG_USR_ON', '1'); // enable user authentification
define('_RUDWEB_CFG_SKIN_ON', '1'); // enable multiple skins
define('_RUDWEB_CFG_CAT', '1'); // enable catalog
define('_RUDWEB_CFG_CAT_IPG', '10'); // catalog items/page
define('_RUDWEB_CFG_CART_ON', '0'); // enable shopping cart
define('_RUDWEB_CFG_CSP_ON', '1'); // enable catalog special offers
define('_RUDWEB_CFG_CSP_LMT', '3'); // number of special offers
define('_RUDWEB_CFG_STATS_ON', '1'); // enable visitor statistics
define('_RUDWEB_CFG_STATS_IP', '86.123.192.163, 80.96.77.225'); // visitor ip to ignore in statistics
define('_RUDWEB_CFG_FTR_ON', '1'); // enable featured content
define('_RUDWEB_CFG_FTR_LMT', '3'); // number of featured items
define('_RUDWEB_CFG_TIMER', '1'); // enable page load time
define('_RUDWEB_CFG_DEBUG', '1'); // enable debug info
define('_RUDWEB_CFG_CPY', '1'); // enable copyright notice
define('_RUDWEB_CFG_CPYDEV', '1'); // show developer info in copyright notice
define('_RUDWEB_CFG_SMAP', '0'); // enable sitemap
define('_RUDWEB_CFG_YAH', '0'); // enable youarehere
define('_RUDWEB_CFG_NWS', '1'); // enable news
define('_RUDWEB_CFG_NWS_LMT1', '3'); // news items limit latest
define('_RUDWEB_CFG_NWS_LMT2', '5'); // news items per page
define('_RUDWEB_CFG_SRC', '0'); // enable search
define('_RUDWEB_CFG_CON', '0'); // enable contact module
// OPTIONAL CONTENT MODULES
define('_RUDWEB_CFG_PICS_0', '0'); // enable content pictures 0
define('_RUDWEB_CFG_PICS_1', '1'); // enable content pictures 1
define('_RUDWEB_CFG_PICS_2', '1'); // enable content pictures 2
define('_RUDWEB_CFG_PICS_3', '1'); // enable content pictures 3
define('_RUDWEB_CFG_PICS_4', '1'); // enable content pictures 4
define('_RUDWEB_CFG_CNT_POSTED', '1'); // enable content posted by
define('_RUDWEB_CFG_CNT_TAGS', '1'); // enable content tags
define('_RUDWEB_CFG_CNT_CMNTS', '1'); // enable content comments
define('_RUDWEB_CFG_CNT_LNKS', '0'); // enable content links
define('_RUDWEB_CFG_CNT_DLDS', '0'); // enable content downloads
// OPTIONAL CONTENT MODULES
define('_RUDWEB_CFG_ADM', '1'); // 1 = enable admin module
?>