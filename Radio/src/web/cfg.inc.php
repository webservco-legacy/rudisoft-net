<?php
/**
 * $Id$
 *
 * Application configuration file.
 *
 * @author     Radu Maier <rudisoft@rudisoft.net>
 * @copyright  Copyright (c) 2008 - 2010, RudiSoft.Net
 * @license    http://www.opensource.org/licenses/bsd-license.php
 * @package    RadioApp
 * @subpackage Config
 * @version    $Revision$
 * @since      Version 5
 * @access     public
 * @filesource
 */

/**
 * Security check.
 */
if ( !defined( '_RUDWEB' ) )
{
	/**
	 * Stop script execution.
	 */
	exit;
}

if ( !is_readable( './etc/settings.cfg.xml' ) )
{
	die( 'Configuration file is missing.' );
}

/**
 * @var object
 */
$settings = simplexml_load_file('./etc/settings.cfg.xml');

/**
 * @var string
 */
$env = ($settings->env) ? trim( $settings->env ) : 'dev';

/**
 * @var object
 */
$cfg = $settings->$env;

/**
 * Set error reporting.
 */
if ( '1' == (string) $cfg->app->errors )
{
	error_reporting( E_ALL | E_STRICT );
}
else
{
	error_reporting( 0 );
}

/**
 * List of all pages.
 *
 * @var array
 */
$pages = array(
	'home' => array(
		'menu' => TRUE,
		'name' => 'Home',
		'url' => (string) $cfg->url->app . '?page=' . (string) $cfg->app->index,
		'class' => 'page_home',
	),
	'programmes' => array(
		'menu' => TRUE,
		'name' => 'Programmes',
		'url' => (string) $cfg->url->app . '?page=programmes',
		'class' => 'page_programmes',
	),
	'404' => array(
		'menu' => FALSE,
		'name' => '404 Not Found',
		'url' => (string) $cfg->url->app . '?page=404',
		'class' => 'page_404',
	),
	
);

/**
 * Set ajax flag.
 *
 * @var bool
 */
$ajax = FALSE;