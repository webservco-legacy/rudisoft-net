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
									<a class="radio_stats_refresh" href="<?php echo $cfg->url->app; ?>?page=stats">click to refresh status</a>
								</p>
								
								<ul id="radio_stats">
									<?php echo show_stats_full( $stats ); ?>
								</ul>
								<script type="text/javascript">	
								//<![CDATA[
		
								/*
								$(document).ready(function() {
									$.updateFullStatus();
								});
								*/
								
								//]]>
								</script>