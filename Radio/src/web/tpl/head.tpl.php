		<title><?php echo $out['page_title']; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="<?php echo $cfg['site_url']; ?>css/style.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo $cfg['site_url']; ?>css/jplayer.rudisoft.xmas.css" rel="stylesheet" type="text/css" media="screen" />
		
		<!--[if lt IE 7]>
		<link href="<?php echo $cfg['site_url']; ?>css/ie_style.css" rel="stylesheet" type="text/css" />
		<![endif]-->
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $cfg['site_url']; ?>js/jquery.jplayer.min.js"></script>
		<script type="text/javascript" src="<?php echo $cfg['site_url']; ?>js/jplayer_common.js"></script>
		<script type="text/javascript" src="<?php echo $cfg['site_url']; ?>js/cufon-yui.js"></script>
		<script type="text/javascript" src="<?php echo $cfg['site_url']; ?>js/cufon-replace.js"></script>
		<script type="text/javascript" src="<?php echo $cfg['site_url']; ?>js/Myriad_Pro_400.font.js"></script>
		<script type="text/javascript" src="<?php echo $cfg['site_url']; ?>js/Myriad_Pro_300.font.js"></script>
		
		<script type="text/javascript">
		<!--
		$(document).ready(function(){
		 
			// Local copy of jQuery selectors, for performance.
			var jpPlayTime = $("#jplayer_play_time");
			var jpTotalTime = $("#jplayer_total_time");
			var jpStatus = $("#demo_status"); // For displaying information about jPlayer's status in the demo page
		 
			$("#jquery_jplayer").jPlayer({
				ready: function () {
					this.element.jPlayer("setFile", "http://radio.rudisoft.net:1984/stream", "http://radio.rudisoft.net:1984/stream").jPlayer("play");
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
		});
		-->
		</script>