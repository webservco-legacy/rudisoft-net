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
		<div id="noscript">
		'Tis the season to enable JavaScript in your browser!
		</div>
		<div id="main">
			<!-- header -->
			<div id="header">
				<?php require $cfg->path->app . 'tpl/header.tpl.php'; ?>
			</div>
			<!-- content -->
			<div id="content">
				<div class="wrapper">
					<div class="mainContent" id="ajax_content">
						<div class="indent">
							<div class="section">
								<?php require $cfg->path->app . 'tpl/page_' .  $page . '.tpl.php'; ?>
							</div>
						</div>
					</div>
					
					<div class="aside">
						<?php require $cfg->path->app . 'tpl/sidebar.tpl.php'; ?>
					</div>
				</div>
				
				<?php if ( isset( $_GET['debug'] ) ) { ?>
				<div class="section demo_section_bot"> 
					<div id="demo_status"></div> 
					<div id="demo_info"></div> 
				</div>
				<?php } ?>
				
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

			$("#noscript").hide();
			
			// Local copy of jQuery selectors, for performance.
			var jpPlayTime = $("#jplayer_play_time");
			var jpTotalTime = $("#jplayer_total_time");
			var jpStatus = $("#demo_status"); // For displaying information about jPlayer's status in the demo page

			$("#jquery_jplayer").jPlayer({
				ready: function () {
					var stream_url = '<?php echo $cfg->radio->server . $cfg->radio->mount; ?>';
					this.element.jPlayer("setFile", stream_url).jPlayer("play");
					//demoInstanceInfo(this.element, $("#demo_info")); // This displays information about jPlayer's configuration in the demo page
				},
				volume: 30,
				nativeSupport: false,
				swfPath: 'swf'
			})
			.jPlayer("onProgressChange", function(loadPercent, playedPercentRelative, playedPercentAbsolute, playedTime, totalTime) {
				jpPlayTime.text($.jPlayer.convertTime(playedTime));
				jpTotalTime.text($.jPlayer.convertTime(totalTime));

				if ( this.element.jPlayer("getData", "diag.isPlaying") && this.element.jPlayer("getData", "diag.playedTime") ) {
					$("#jplayer_loading").hide();
				}

				demoStatusInfo(this.element, jpStatus); // This displays information about jPlayer's status in the demo page
			})
			.jPlayer("onSoundComplete", function() {
				this.element.jPlayer("play");
			});

			$("#jplayer_stop").click(function() {
				$("#jquery_jplayer").jPlayer("stop");
				$("#jplayer_loading").hide();
				return false;
			});
			
			$("#jplayer_pause").click(function() {
				$("#jquery_jplayer").jPlayer("pause");
				$("#jplayer_loading").hide();
				return false;
			});

			$("#jplayer_play").click(function() {
				$("#jquery_jplayer").jPlayer("play");
				$("#jplayer_loading").show();
				return false;
			});

			<?php foreach ( $pages as $nav_page => $nav_data ) { ?>
			<?php if ( 'new' != $nav_data['class'] ) { ?>
			$('.<?php echo $nav_data['class']; ?>').click(function(event){
			    event.preventDefault();
			    $.loadContent( '<?php echo $nav_page; ?>' );
			});
			<?php } ?>
			<?php } ?>

			/* load link with class "new" in a new window */
			$('.new').click(function(event){
			    $(this).attr('target','_blank');
			  });

			/* ajax navigation function */
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

			/* ajax status update function */
			$.updateStatus = function() {
				$.ajax({
		            type: "POST",
		            url: "<?php echo $cfg->url->app; ?>ajax.php",
		            data : {'request': 'iceget', 'type': 'small'},
		            dataType: "html",
		            error: function(){
		            	$('#radio_status').html('Error');
		          	},
		          	success: function(data){
		        	  $('#radio_status').html(data);
		      	  	}
		      	});
			};

			/* special update status link */
			$('.radio_status_refresh').click(function(event){
			    event.preventDefault();
			    $.updateStatus();
			});

			/* ajax navigation - load homepage as default */
			$.loadContent( '<?php echo $cfg->app->index; ?>' );

			/* ajax - update radio status */
			$.updateStatus();
		});
		//]]>
		</script>
	</body>

</html>