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
						<div class="box2">
							<div class="inner">
								<h3>RADIO STATUS</h3>
								<div id="radio_status">
								server status: <span>n/a</span>
								<h5>now playing:</h5>n/a
								</div>
								<a class="radio_status_refresh" href="<?php echo $cfg->url->app; ?>">click to refresh status</a>
							</div>
						</div>
						
						<div class="box1">
							<div class="inner">
								<h3>News</h3>
								<dl>
									<dt><a>December 5, 2010</a></dt>
									<dd>Website launch.</dd>
									<dt><a>December 4, 2010</a></dt>
									<dd>Starting test broadcast.</dd>
								</dl>
							</div>
						</div>