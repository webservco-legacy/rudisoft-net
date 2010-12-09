<?php
/**
 * $Id$
 *
 * Template file.
 *
 * @author     Radu Maier <rudisoft@rudisoft.net>
 * @copyright  Copyright (c) 2008 - 2010, RudiSoft.Net
 * @license    http://www.opensource.org/licenses/bsd-license.php
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
?>
					<div id="player_box">
					
						<div id="jquery_jplayer"></div>
						
						<div class="jp-single-player">
							<div class="jp-interface">
								<ul class="jp-controls">
									<li><a href="#" id="jplayer_play" class="jp-play" tabindex="1">play</a></li> 
									<li><a href="#" id="jplayer_pause" class="jp-pause" tabindex="1">pause</a></li>
									<li><a href="#" id="jplayer_stop" class="jp-stop" tabindex="1">stop</a></li>
									<li><a href="#" id="jplayer_volume_min" class="jp-volume-min" tabindex="1">min volume</a></li> 
									<li><a href="#" id="jplayer_volume_max" class="jp-volume-max" tabindex="1">max volume</a></li>
								</ul>
								<div id="jplayer_volume_bar" class="jp-volume-bar"> 
									<div id="jplayer_volume_bar_value" class="jp-volume-bar-value"></div> 
								</div> 
								<div id="jplayer_play_time" class="jp-play-time"></div>
								<div id="jplayer_loading" class="jp-loading"><strong>Loading...</strong></div>
							</div>
						</div>
					</div>