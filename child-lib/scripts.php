<?php
// Using LESS to compile your own stylesheet?
// You can remove the WeFoster parent theme styles by uncommenting the line below.

if ( WEFOSTER_LESS_TYPE == 'less' &&  WEFOSTER_LESS_METHOD == 'replace' ) {
  add_action( 'wp_enqueue_scripts', 'wff_dequeue_styles', 10000 );
  function wff_dequeue_styles() {

      //Remove standard styles
      wp_dequeue_style( 'wff_main' );

      //Remove BuddyPress
      wp_dequeue_style( 'wff_buddypress' );
  }
}


function wff_child_scripts() {

  if ( WEFOSTER_LESS_TYPE == 'less' ) {
    wp_enqueue_style('wff_child_custom_less', get_stylesheet_directory_uri() . '/assets/css/main.min.css', false, 'bdc9fa64dc6df3b6c674c3ea195c0d44');
  }

  if ( WEFOSTER_LESS_TYPE == 'css' ) {
    wp_enqueue_style('wff_child_custom_css', get_stylesheet_directory_uri() . '/custom.css' );
  }

  if ( WEFOSTER_CUSTOM_JS == 'true' ) {
    wp_register_script('wff_child_scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.min.js', array(), '911acd948151184ec83b6b47b9bebfad', true);
  }

  wp_enqueue_script('wff_child_scripts');
}
add_action('wp_enqueue_scripts', 'wff_child_scripts', 100);
?>
