<?php
/**
 * $Id$
 *
 * JavaScript file.
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
	<script type="text/javascript">	
		//<![CDATA[
		
		$(document).ready(function() {

			$("#noscript").hide();
			
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

		});
		//]]>
		</script>