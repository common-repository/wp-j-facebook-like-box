<?php
/*
Plugin Name: WP J Facebook Like Box
Plugin URI: http://www.j-download.com
Description: Wp J Facebook Likebox is slide up jquery window to represent facebook like box with customize feature. This plugin has both php and short code option. Please use [wpjflb] or wpjflb_loadpagefnc(); in your site for calling the plugin.
Author: Md. Shaon Bahadur
Version: 1.0
Author URI: http://www.j-download.com
*/

function wpjflb_loadpagefnc() {
    $facebookpagename           =       get_option('wpjflb_fpagename');
    $facebookwidth              =       get_option('wpjflb_fwidth');
    $facebookheight             =       get_option('wpjflb_fheight');
    $facebookconnections        =       get_option('wpjflb_fconnections');
    $facebookbackgroundcolor    =       get_option('wpjflb_fbackground');
    $facebookcolorscheme        =       get_option('wpjflb_fcolorscheme');
    $facebookheader             =       get_option('wpjflb_fheader');
    $facebookstream             =       get_option('wpjflb_fstream');
    $onlyonfrontpage            =       get_option('wpjflb_fonlyfpage');

    if($onlyonfrontpage=='1'){
     if (is_front_page()){
?>
            <link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/plugins/wp-j-facebook-like-box/lib/facebook_style.css" />
            <style>
            #facebookcontainer {
                width: <?php echo $facebookwidth; ?>px;
            }
            </style>
            <script language="JavaScript">
                $(document).ready(function(){
                    $('#facebookcontainer').slideDown( 2000 );
                });
                jQuery(function( $ ){
                    var container = $( "#facebookcontainer" );

                    $( ".fb_close_box" ).click(
                        function( event ){
                            event.preventDefault();

                            if (container.is( ":visible" )){
                                container.slideUp( 2000 );
                            }
                            else {
                                container.slideDown( 2000 );
                            }
                        }
                    );
                });
            </script>
            <div id="facebookcontainer">
                <div class="fb_close_box"></div>
                <div id="inner_facebook">
                    <iframe scrolling="no" frameborder="0" allowtransparency="true" style="border:none; overflow:hidden; width:<?php echo $facebookwidth; ?>px; height:<?php echo $facebookheight; ?>px;background: <?php echo $facebookbackgroundcolor; ?>;" src="http://www.facebook.com/plugins/likebox.php?href=http://Fwww.facebook.com/<?php echo $facebookpagename; ?>&amp;width=<?php echo $facebookwidth; ?>&amp;colorscheme=<?php echo $facebookcolorscheme; ?>&amp;connections=<?php echo $facebookconnections; ?>&amp;stream=<?php echo $facebookstream; ?>&amp;header=<?php echo $facebookheader; ?>&amp;height=<?php echo $facebookheight; ?>"></iframe>
                </div>
            </div>
<?php
     }
         }
     else {
?>

            <link rel="stylesheet" href="<?php bloginfo('wpurl'); ?>/wp-content/plugins/wp-j-facebook-like-box/lib/facebook_style.css" />
            <style>
            #facebookcontainer {
                width: <?php echo $facebookwidth; ?>px;
            }
            </style>
            <script language="JavaScript">
                $(document).ready(function(){
                    $('#facebookcontainer').slideDown( 2000 );
                });
                jQuery(function( $ ){
                    var container = $( "#facebookcontainer" );

                    $( ".fb_close_box" ).click(
                        function( event ){
                            event.preventDefault();

                            if (container.is( ":visible" )){
                                container.slideUp( 2000 );
                            }
                            else {
                                container.slideDown( 2000 );
                            }
                        }
                    );
                });
            </script>
            <div id="facebookcontainer">
                <div class="fb_close_box"></div>
                <div id="inner_facebook">
                    <iframe scrolling="no" frameborder="0" allowtransparency="true" style="border:none; overflow:hidden; width:<?php echo $facebookwidth; ?>px; height:<?php echo $facebookheight; ?>px;background: <?php echo $facebookbackgroundcolor; ?>;" src="http://www.facebook.com/plugins/likebox.php?href=http://www.facebook.com/<?php echo $facebookpagename; ?>&amp;width=<?php echo $facebookwidth; ?>&amp;colorscheme=<?php echo $facebookcolorscheme; ?>&amp;connections=<?php echo $facebookconnections; ?>&amp;stream=<?php echo $facebookstream; ?>&amp;header=<?php echo $facebookheader; ?>&amp;height=<?php echo $facebookheight; ?>"></iframe>
                </div>
            </div>
<?php
     }

}
add_shortcode('wpjflb', 'wpjflb_loadpagefnc');

function add_wpjflb_script()
{
    wp_register_script( 'wpjfacebook', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js');
    wp_enqueue_script( 'wpjfacebook' );
}
add_action('get_header', 'add_wpjflb_script');

//*************** Admin function ***************


function wpjflb_admin() {
	include('adminpage.php');
}

function wpjflb_admin_actions() {
    add_options_page('Wp J Facebook Likebox Options', 'Wp J Facebook Likebox', 'manage_options', 'wp_j_facebook_likebox', 'wpjflb_admin');
}

add_action('admin_menu', 'wpjflb_admin_actions');

?>