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
								<h2>Live stats</h2>
								
								<p>
									<a class="radio_stats_refresh" href="<?php echo $cfg->url->app; ?>/?page=stats">click to refresh status</a>
								</p>
								
								<ul id="radio_stats">
									<li><span class="red">station status:</span> n/a</li>
									<li><span class="red">last initialization:</span> n/a</li>
									<li><span class="red">station name:</span> n/a</li>
									<li><span class="red">station description:</span> n/a</li>
									<li><span class="red">station genre:</span> n/a</li>
									<li><span class="red">stream type:</span> n/a</li>
									<li><span class="red">stream quality:</span> n/a</li>
									<li><span class="red">current listeners:</span> n/a</li>
									<li><span class="red">most listeners:</span> n/a</li>
									<li><span class="red">now playing:</span> n/a</li>
								</ul>
								<script type="text/javascript">	
								//<![CDATA[
		
								$(document).ready(function() {
									$.updateFullStatus();
								});
								//]]>
								</script>