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
				require $cfg->path->app . 'tpl/jscript.tpl.php';
				exit();
			}
			break;
				
		case 'iceget' :
			$iceget_types = array( 'small', 'full' );
			
			if ( isset( $_POST['type'] ) )
			{
				$type = ( in_array( $_POST['type'], $iceget_types ) ) ? $_POST['type'] : 'full';

				$f = 'iceget_'.$type;

				require $cfg->path->app . 'lib/iceget.lib.php';
				$iceget = new Iceget();
				$iceget->SetUrl( 'http://radio.rudisoft.net:1984/stats.xsl' );
				$stats = $iceget->GetStats( '/stream' );

				return $f( $stats );
			}
			break;

		default:
			echo 0;
			break;
	}
}

echo 0;

function iceget_small( $stats )
{
	$onair = ( 'on' == $stats['onair'] ) ? 'broadcasting' : 'not broadcasting';
	$out = '
	server status: <span class="' . $stats['onair'] . '">' . $onair . '</span>
	<h5>now playing:</h5><span class="song">' . $stats['title'] . '</span>
	';
	echo $out;
}

function iceget_full( $stats )
{
	$onair = ( 'on' == $stats['onair'] ) ? 'broadcasting' : 'not broadcasting';
	$out = '
	<li><span class="red">station status:</span> <span class="' . $stats['onair'] . '">' . $onair . '</span></li>
	<li><span class="red">last initialization:</span> ' . $stats['since'] . '</li>
	<li><span class="red">station name:</span> ' . $stats['name'] . '</li>
	<li><span class="red">station description:</span> ' . $stats['description'] . '</li>
	<li><span class="red">station genre:</span> ' . $stats['genre'] . '</li>
	<li><span class="red">stream type:</span> ' . $stats['type'] . '</li>
	<li><span class="red">stream quality:</span> ' . $stats['bitrate'] . '</li>
	<li><span class="red">current listeners:</span> ' . $stats['listeners'] . '</li>
	<li><span class="red">most listeners:</span> ' . $stats['peak'] . '</li>
	<li><span class="red">now playing:</span> ' . $stats['title'] . '</li>
	';
	echo $out;
}

exit;
?>