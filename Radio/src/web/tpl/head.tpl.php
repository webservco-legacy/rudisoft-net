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
		<title>RudiSoft.Net Radio</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="<?php echo $cfg->url->app; ?>css/style.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo $cfg->url->app; ?>css/jplayer.rudisoft.xmas.css" rel="stylesheet" type="text/css" media="screen" />
		
		<!--[if lt IE 7]>
		<link href="<?php echo $cfg->url->app; ?>css/ie_style.css" rel="stylesheet" type="text/css" />
		<![endif]-->
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $cfg->url->app; ?>js/jquery.jplayer.min.js"></script>
		<script type="text/javascript" src="<?php echo $cfg->url->app; ?>js/jplayer_common.js"></script>
		<script type="text/javascript" src="<?php echo $cfg->url->app; ?>js/cufon-yui.js"></script>
		<script type="text/javascript" src="<?php echo $cfg->url->app; ?>js/cufon-replace.js"></script>
		<script type="text/javascript" src="<?php echo $cfg->url->app; ?>js/Myriad_Pro_400.font.js"></script>
		<script type="text/javascript" src="<?php echo $cfg->url->app; ?>js/Myriad_Pro_300.font.js"></script>