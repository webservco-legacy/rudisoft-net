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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php require $cfg->path->app . 'tpl/head.tpl.php'; ?>
	</head>
	
	<body id="page1">
		<div id="main">
			<!-- header -->
			<div id="header">
				<?php require $cfg->path->app . 'tpl/header.tpl.php'; ?>
			</div>
			<!-- content -->
			<div id="content">
				<div class="wrapper">
					<div class="mainContent" id="ajax_content">
						<?php //require $cfg->path->app . 'tpl/' .  $out['page_template'] . '.tpl.php'; ?>
					</div>
					<div class="aside">
						<?php require $cfg->path->app . 'tpl/sidebar.tpl.php'; ?>
					</div>
				</div>
			</div>
			<!-- footer -->
			<div id="footer">
				<?php require $cfg->path->app . 'tpl/footer.tpl.php'; ?>
			</div>
		</div>
		<script type="text/javascript">	
		//<![CDATA[
		
		Cufon.now();

		$(document).ready(function() {

			// Local copy of jQuery selectors, for performance.
			var jpPlayTime = $("#jplayer_play_time");
			var jpTotalTime = $("#jplayer_total_time");
			var jpStatus = $("#demo_status"); // For displaying information about jPlayer's status in the demo page
		 
			$("#jquery_jplayer").jPlayer({
				ready: function () {
					var stream_url = '<?php echo $cfg->radio->server . $cfg->radio->mount; ?>';
					this.element.jPlayer("setFile", stream_url, stream_url).jPlayer("play");
					demoInstanceInfo(this.element, $("#demo_info")); // This displays information about jPlayer's configuration in the demo page
				},
				nativeSupport: false,
				swfPath: 'swf'
			})
			.jPlayer("onProgressChange", function(loadPercent, playedPercentRelative, playedPercentAbsolute, playedTime, totalTime) {
				jpPlayTime.text($.jPlayer.convertTime(playedTime));
				jpTotalTime.text($.jPlayer.convertTime(totalTime));
		 
				demoStatusInfo(this.element, jpStatus); // This displays information about jPlayer's status in the demo page
			})
			.jPlayer("onSoundComplete", function() {
				this.element.jPlayer("play");
			});

			<?php /* XXX MAKE THE FOLOWING DINAMYC */ ?>

			/* ajax navigation - home page */
			$('.page_home').click(function(event){
			    event.preventDefault();
			    $.loadContent( '<?php echo $cfg->app->index; ?>' );
			  });

			/* ajax navigation - playlist page */
			$('.page_playlist').click(function(event){
			    event.preventDefault();
			    $.loadContent( 'playlist' );
			  });

			/* load link with class "new" in a new window */
			$('.new').click(function(event){
			    $(this).attr('target','_blank');
			  });

			/* ajax navigationfunction */
			$.loadContent = function( page ) {
				$.ajax({
		            type: "POST",
		            url: "<?php echo $cfg->url->app; ?>ajax.php",
		            data : {'request': 'page', 'page': page},
		            dataType: "html",
		            error: function(){
		            	$('#ajax_content').html('Error');
		          	},
		          	success: function(data){
		        	  $('#ajax_content').html(data);
		      	  	}
		      	});
			};

			/* ajax navigation - load homepage as default */
			$.loadContent( '<?php echo $cfg->app->index; ?>' );
		});
		//]]>
		</script>
	</body>

</html>