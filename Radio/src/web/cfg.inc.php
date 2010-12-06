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
 * Set error reporting
 */
error_reporting ( (string) $cfg->app->errors );

/**
 * List of all pages.
 *
 * @var array
 */
$pages = array(
	'home' => array(
		'name' => 'Home',
		'url' => (string) $cfg->url->app . (string) $cfg->app->index,
		'class' => 'page_home first',
	),
	'playlist' => array(
		'name' => 'Playlist',
		'url' => (string) $cfg->url->app . '?page=playlist',
		'class' => 'page_playlist',
	),
	'issues' => array(
		'name' => 'Known Issues',
		'url' => (string) $cfg->url->app . '?page=issues',
		'class' => 'page_issues',
	),
	'rudisoft' => array(
		'name' => 'RudiSoft.Net',
		'url' => 'http://www.rudisoft.net',
		'class' => 'new',
	),
);

/**
 * Set ajax flag.
 *
 * @var bool
 */
$ajax = FALSE;