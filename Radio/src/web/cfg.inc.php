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
 * Load application library.
 */
require_once $cfg->path->app . 'lib/app.lib.php';

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
    'stats' => array(
        'menu' => TRUE,
        'name' => 'Live Stats',
        'url' => (string) $cfg->url->app . '?page=stats',
        'class' => 'page_stats',
),
    '404' => array(
        'menu' => FALSE,
        'name' => '404 Not Found',
        'url' => (string) $cfg->url->app . '?page=404',
        'class' => 'page_404',
),

);

require_once $cfg->path->app . 'lib/iceget.lib.php';
$iceget = new Iceget();
$iceget->SetUrl( $cfg->radio->server . $cfg->radio->stats );
$stats = $iceget->GetStats( (string) $cfg->radio->mount );

?>