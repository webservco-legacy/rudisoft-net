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
                require $cfg->path->app . 'tpl/jscript.tpl.php';
                exit();
            }
            break;

        case 'iceget' :
            $iceget_types = array( 'small', 'full' );

            if ( isset( $_POST['type'] ) )
            {
                $type = ( in_array( $_POST['type'], $iceget_types ) ) ? $_POST['type'] : 'full';

                $f = 'show_stats_'.$type;

                return $f( $stats );
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