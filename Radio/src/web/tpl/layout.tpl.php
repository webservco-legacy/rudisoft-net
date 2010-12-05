<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<?php require $cfg['site_path'] . 'tpl/head.tpl.php'; ?>
	</head>
	
	<body id="page1">
		<div id="main">
			<!-- header -->
			<div id="header">
				<?php require $cfg['site_path'] . 'tpl/header.tpl.php'; ?>
			</div>
			<!-- content -->
			<div id="content">
				<div class="wrapper">
					<div class="mainContent" id="ajax_content">
						<?php //require $cfg['site_path'] . 'tpl/' .  $out['page_template'] . '.tpl.php'; ?>
					</div>
					<div class="aside">
						<?php require $cfg['site_path'] . 'tpl/sidebar.tpl.php'; ?>
					</div>
				</div>
			</div>
			<!-- footer -->
			<div id="footer">
				<?php require $cfg['site_path'] . 'tpl/footer.tpl.php'; ?>
			</div>
		</div>
		<script type="text/javascript">	
		//<![CDATA[
		
		Cufon.now();

		$(document).ready(function() {

			$('#nav_home').click(function(event){
			    event.preventDefault();
			    $.loadContent( 'home' );
			  });

			$('#nav_playlist').click(function(event){
			    event.preventDefault();
			    $.loadContent( 'playlist' );
			  });

			$('#nav_rudisoft').click(function(event){
			    $(this).attr('target','_blank');
			  });

			$.loadContent = function( page ) {
				$.ajax({
		            type: "POST",
		            url: "<?php echo $cfg['site_url']; ?>ajax.php",
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

			$.loadContent( 'home' );
		});
		//]]>
		</script>
	</body>

</html>