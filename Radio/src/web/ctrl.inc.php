<?php
/**
 * $Id$
 *
 * Application controller.
 *
 * @author     Radu Maier <rudisoft@rudisoft.net>
 * @copyright  Copyright (c) 2008 - 2010, RudiSoft.Net
 * @license    http://www.opensource.org/licenses/bsd-license.php
 * @package    RadioApp
 * @subpackage Controller
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

/**
 * Set current page.
 *
 * @var string
 */
$page = ( isset( $_GET['page'] ) && ( array_key_exists( $_GET['page'], $pages ) ) ) ? $_GET['page'] : (string) $cfg->app->index;

/**
 * Output data.
 *
 * @var array
 */
$out = array(
	'page_title' => $pages[$page]['name'],
);

/**
 * Page model path.
 *
 * @var string
 */
$page_mod = (string) $cfg->path->app . 'mod/' . $page . '.mod.php';

/**
 * Check if we have a model for the page.
 */
if ( is_readable( $page_mod ) )
{
	/**
	 * Load page model.
	 */
	require_once $page_mod;
}

/**
 * Load template.
 */
require $cfg->path->app . 'tpl/layout.tpl.php';
?>