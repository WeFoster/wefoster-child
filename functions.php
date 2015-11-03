<?php
/**
 * Theme Setup
 */
function wff_child_theme_setup()
{
  /**
   * Allow theme translations
   * Translations can be added into the /languages/ directory.
   */

  // Grab text from parent
  load_theme_textdomain( 'wefoster', get_stylesheet_directory() . '/languages' );

  // Translate text from the CHILD theme only.
  // load_theme_textdomain( 'wefoster_child_theme', get_stylesheet_directory() . '/languages' );

}
add_action( 'after_setup_theme', 'wff_child_theme_setup' );


require_once locate_template('/child-lib/scripts.php');          	// Custom functions
require_once locate_template('/child-lib/custom.php');          	// Custom functions
?>
