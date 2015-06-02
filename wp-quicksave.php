<?php
/**
 * Plugin Name: Quick Save
 * Plugin URI: http://wp-quicksave.com
 * Description: Press the ALT key to update posts and pages. Works the same as clicking the Update/Publish button. To use a different key to the ALT key click Settings > Quick Save Keycode.
 * Version: 1.0
 * Author: Stev
 * Author URI: http://www.stevs.net
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 *  Copyright 2015  Stev  (email : support@wp-quicksave.com) 
 *
 **/
 
add_action('admin_footer', 'quick_save_function');
function quick_save_function() {
echo '<script type="text/javascript">tA=document.getElementById("content").addEventListener("keydown", function() {
e=window.event;keyCode=e.keyCode;if(e.altKey && keyCode==18){document.getElementById("publish").click();}});</script>';
} 
add_action('admin_menu', 'wpqs_menu');
function wpqs_menu() {
    add_options_page('Quick Save Menu', 'Quick Save Keycode', 'manage_options', __FILE__, 'wpqs_page');
}
function wpqs_page() {
?>
<div style="font-size:22px;line-height:30px;">
<h1 style=line-height:40px;>
Change the key combination you <br>
want to save the page
</h1>
<h3>
To use a key or key combination other than the ALT key <br>
to save pages can be done with the Pro version.
</h3>

<h2>Get it Now</h2>
<table style="font-size:22px;line-height:26px;" width=80%><tr><td valign=top>
<a href="https://www.jvzoo.com/b/34019/162789/13" target="_blank"><img src="<?php echo plugins_url( 'pro.png', __FILE__ ); ?>" alt="WP Quick Save Plugin - Pro Version" border="0" /></a>
</td><td valign=top style="padding-left:25px;">

When you install the Pro version you can set your own key or key combination quickly and easily. The pro version license means it can be installed on all your Wordpress sites too. You only need to buy it once. The keycode wizard will appear here once installed and comes with a 30 day money back guarantee.

</td></tr></table>


</div>
<?php
}
?>