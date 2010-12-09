<?php
/**
 * $Id$
 *
 * Application library.
 *
 * @author     Radu Maier <rudisoft@rudisoft.net>
 * @copyright  Copyright (c) 2008 - 2010, RudiSoft.Net
 * @license    http://www.opensource.org/licenses/bsd-license.php
 * @package    RadioApp
 * @subpackage Icecast
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
 * Show stats (small)
 *
 * @param array $stats
 *
 * @return string
 */
function show_stats_small( $stats )
{
	$onair = ( 'on' == $stats['onair'] ) ? 'broadcasting' : 'not broadcasting';
	$out = '
	server status: <span class="' . $stats['onair'] . '">' . $onair . '</span>
	<h5>now playing:</h5><span class="song">' . $stats['title'] . '</span>
	';
	echo $out;
}

/**
 * Show stats (full)
 *
 * @param array $stats
 *
 * @return string
 */
function show_stats_full( $stats )
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

?>