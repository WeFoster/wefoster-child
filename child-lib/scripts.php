<?php
add_action( 'wp_enqueue_scripts', 'my_dequeue_styles', 10000 );

function my_dequeue_styles() {
    wp_dequeue_style( 'wff_main' );
    wp_dequeue_style( 'wff_buddypress' );
}

function wff_child_scripts() {
  wp_enqueue_style('wff_child', get_stylesheet_directory_uri() . '/assets/css/main.min.css', false, '57bab3e3cd9dbc91e4f2fbea81c57816');

  wp_register_script('wff_child_scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.min.js', array(), '31f856a97839114025338bd815558cec', true);


  wp_enqueue_script('wff_child_scripts');
}
add_action('wp_enqueue_scripts', 'wff_child_scripts', 100);
?>
