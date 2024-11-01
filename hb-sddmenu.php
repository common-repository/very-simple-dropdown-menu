<?php
/*
 * Plugin Name: HB Simple Dropdown Menu
 * Description: A very simple dropdown menu.
 * Version: 0.1.0
 * Author: heiblack
 * Author URI: https://pigduck.fun
 * License:  GPL 3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
*/

if ( !defined( 'ABSPATH' ) ) {
   http_response_code( 404 );
   die();
}

function_exists('plugin_dir_url') or exit('No direct plugin_dir_url access allowed');


add_action( 'wp_enqueue_scripts', 'HB_sddmenu_scripts' );
function HB_sddmenu_scripts() {
   wp_enqueue_style( 'sddmenu-style', plugin_dir_url( __FILE__ )  . '/assets/hb_sddmenu.css');
   wp_enqueue_script('sddmenu-script', plugin_dir_url( __FILE__ )  . '/assets/hb_sddmenu.js');
}

require_once  dirname( __FILE__ ) .'/inc/class.hb-wallker.php';

add_shortcode('HB-sddmenu', function($array) {
   $app = '';
   if($array):
      if (class_exists('HB_MenuWalker')) {
         require_once  dirname( __FILE__ ) .'/inc/functions.php';
         return $app;
      } else {
         return '';
      }
   endif;
});



