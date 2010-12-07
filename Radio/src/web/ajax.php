<?php
/**
 * $Id$
 *
 * Application ajax functionality.
 *
 * @author     Radu Maier <rudisoft@rudisoft.net>
 * @copyright  Copyright (c) 2008 - 2010, RudiSoft.Net
 * @license    http://www.opensource.org/licenses/bsd-license.php
 * @package    RadioApp
 * @subpackage Ajax
 * @version    $Revision$
 * @since      Version 5
 * @access     public
 * @filesource
 */

/**
 * Security token.
 */
define( '_RUDWEB', TRUE );

/**
 * Load configuration.
 */
require_once './cfg.inc.php';

/**
 * Set ajax flag.
 *
 * @var bool
 */
$ajax = TRUE;

/**
 * Work only with post requests.
 */
if ( isset( $_POST['request'] ) )
{
	switch( $_POST['request'] )
	{
		case 'page' :
			if ( isset( $_POST['page'] ) )
			{
				$page = ( array_key_exists( $_POST['page'], $pages ) ) ? $_POST['page'] : '404';
				require $cfg->path->app . 'tpl/page_' . $page . '.tpl.php';
				require_once $cfg->path->app . 'tpl/ajax.tpl.php';
				exit();
			}
			break;

		default:
			echo 0;
			break;
	}
}

echo 0;

exit;
?>