<?php
/**
 * Load backstretch.js
 * @package Wordpress
 * @subpackage one-theme
 * @since 1.0
 * @author Matthew Hansen
 */

if( !function_exists( 'ot_load_backstretch_js' ) ) :
  function ot_load_backstretch_js() {
    if(!is_child_theme()){
      wp_register_script( 'backstretch_js', get_template_directory_uri().'/lib/modules/backstretch/js/jquery.backstretch.min.js', array( 'jquery' ), '2.0.4', true );
  } else {
      wp_register_script( 'backstretch_js', get_stylesheet_directory_uri().'/lib/modules/backstretch/js/jquery.backstretch.min.js', array( 'jquery' ), '2.0.4', true );
  }
    wp_enqueue_script( 'backstretch_js' );
  }
  add_action( 'init', 'ot_load_backstretch_js' );

endif;
