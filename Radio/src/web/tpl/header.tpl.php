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
				<div class="row-1">
					<div class="indent"><a class="page_home" href="<?php echo $cfg->url->app; ?>"><img alt="" src="img/logo.jpg" /></a><img alt="" src="img/slogan.jpg" /></div>
				</div>
				<div class="row-2">
					<ul class="nav">
					<?php foreach ( $pages as $nav_page => $nav_data ) { ?>
					<?php if ( FALSE !== $nav_data['menu'] ) { ?>
						<?php $extra_class = ( 'home' == $nav_page ) ? ' first' : ''; ?>
						<li><a class="<?php echo $nav_data['class']; ?><?php echo $extra_class; ?>" title="<?php echo $nav_data['name']; ?>" href="<?php echo $nav_data['url']; ?>"><?php echo $nav_data['name']; ?></a></li>
					<?php } ?>
					<?php } ?>
					</ul>
					<!-- 
					<ul class="extra-nav">
						<li><a href="home.html"><img alt="" src="img/icon-home.gif" /></a></li>
						<li><a href="contact_us.html"><img alt="" src="img/icon-mail.gif" /></a></li>
						<li><a href="site_map.html"><img alt="" src="img/icon-map.gif" /></a></li>
					</ul>
					-->
				</div>
				<div class="row-3">
					<div class="extra-slogan"><img alt="" src="img/extra-slogan.jpg" /></div>
					<?php require $cfg->path->app . 'tpl/player.tpl.php'; ?>
				</div>