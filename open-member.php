<?php
/*
Plugin Name: Open Membership
Plugin URI: https://github.com/coosanta/open-membership
Description: A brief description of the Plugin.
Version: 0.1
Author: coosanta ( Hwang Hyun Sub)
Author URI: http://URI_Of_The_Plugin_Author
License: GPL2
*/

function excerpt_count_js(){
      echo '<script>
			jQuery(document).ready(function(){
				jQuery("#postexcerpt .handlediv").after("<div style="position:absolute;top:0px;right:5px;color:#666;"><small>Excerpt length: </small><input type="text" value="0" maxlength="3" size="3" id="excerpt_counter" readonly="" style="background:#fff;"> <small>character(s).</small></div>");
				 jQuery("#excerpt_counter").val(jQuery("#excerpt").val().length);
				 jQuery("#excerpt").keyup( function() {
				 jQuery("#excerpt_counter").val(jQuery("#excerpt").val().length);
				});
			});</script>';
}

add_action( 'admin_head-post.php', 'excerpt_count_js');
add_action( 'admin_head-post-new.php', 'excerpt_count_js');

?>