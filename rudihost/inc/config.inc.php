<?php
/*
./inc/config.inc.php
10:06 2008-06-09
*/

if(!defined('_RUDWEB_PUBFIL')) {require_once './../lib/404.php';}

// DATABASE CONNECTION SETTINGS
$rudweb_dbtype = 'my';
$rudweb_dbport = '3306';
$rudweb_dbhost = 'localhost';
$rudweb_dbuser = 'rudihost';
$rudweb_dbpass = 'REDACTED';
$rudweb_dbname = 'rudihost';
// WEBSITE URL
define('_RUDWEB_SITE_URL','http://localhost/work/rs/rudihost/');
//define('_RUDWEB_SITE_URL','http://www.rudisoft.net/');
// WEBSITE DIRECTORY
define('_RUDWEB_SITE_DIR','e:/home/devel/server/htdocs/work/rs/rudihost/');
//define('_RUDWEB_SITE_DIR','/home/vol2/rudisoft.0lx.net/www/rudisoft.net/htdocs/');
// TAKE SITE SETTINGS FROM DB (1) OR FROM FILE (0)
define('_RUDWEB_DBCFG', '1');
// TAKE SKIN SETTINGS FROM DB(1) OR FROM FILE (0)
define('_RUDWEB_DBSKIN', '0');
// GLOBAL PREFIX, INCLUDING DATABASE TABLES PREFIX
define('_RUDWEB_PRE', 'rudihost_');
// REMOVE 'index.php' FROM URLS = ''. DON'T REMOVE = 'index.php/'
define('_RUDWEB_INDEX_PHP', '');
?>