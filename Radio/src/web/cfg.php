<?php
error_reporting (E_ALL | E_STRICT);

$cfg = array(
	'site_path' => '/home/rudisoft/www/public_html/sandbox/radio/',
	'site_url' => 'http://rudisoft.dev/sandbox/radio/',
);

$pages = array(
	'home' , 'playlist'
);

$out = array(
	'page_title' => 'RudiSoft.Net Radio',
	'page_template' => 'home',
);

if ( isset( $_GET['page'] ) && ( in_array( $_GET['page'], $pages ) ) )
{
	$out['page_template'] = $_GET['page'];
}
?>