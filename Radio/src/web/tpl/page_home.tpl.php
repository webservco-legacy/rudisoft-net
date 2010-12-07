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
								<h2>Welcome to RudiSoft Radio!</h2>
								<p>Broadcasting non stop winter holiday tunes all December!</p>
								<ul class="img-list">
									<li>
										<a class="new" title="Listen in your favorite player" href="<?php echo $cfg->radio->server . $cfg->radio->m3u; ?>"><img alt="Listen in your favorite player" title="Listen in your favorite player" src="./img/m3u.png" /></a>
										<h5><a class="new" title="Listen in your favorite player" href="<?php echo $cfg->radio->server . $cfg->radio->m3u; ?>">Listen in your favorite player</a></h5>
										Click the icon to download the radio playlist for listening in your favorite media player.
									</li>
								</ul>