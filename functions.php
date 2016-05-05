<?php
/**
 * Theme Setup
 */

// http://documentation.wefoster.co/kb/using-less-and-grunt-to-generate-custom-stylesheets/
define('WEFOSTER_LESS_TYPE', 'css');

//define('WEFOSTER_LESS_TYPE', 'less');

// This method will remove the parent CSS styles.
//define('WEFOSTER_LESS_METHOD', 'replace');

// This method will NOT remove the Parent CSS.
//define('WEFOSTER_LESS_METHOD', 'extend');

// Set this to 'true' to load a Custom javascript file.
define('WEFOSTER_CUSTOM_JS', 'false');

// Load the required files. Please see the docs:
// https://documentation.wefoster.co/kb/when-to-use-constants-filters-and-actions-to-build-page-layouts/

// https://documentation.wefoster.co/kb/constants/
require_once locate_template('/child-lib/constants.php');

// https://documentation.wefoster.co/kb/actions/
require_once locate_template('/child-lib/actions.php');

// https://documentation.wefoster.co/kb/filters/
require_once locate_template('/child-lib/filters.php');

// https://documentation.wefoster.co/kb/using-less-and-grunt-to-generate-custom-stylesheets/
require_once locate_template('/child-lib/scripts.php');

//https://documentation.wefoster.co/kb/advanced-functions-overwritingreplacingadding-new-functionality/
require_once locate_template('/child-lib/custom.php');

function wff_child_theme_setup()
{
  /**
   * Allow theme translations
   * Translations can be added into the /languages/ directory.
   */

  // Grab text from parent
  load_theme_textdomain( 'wefoster', get_stylesheet_directory() . '/languages' );

  // Uncomment to translate text from the CHILD theme only.
  // load_theme_textdomain( 'wefoster_child_theme', get_stylesheet_directory() . '/languages' );

}
add_action( 'after_setup_theme', 'wff_child_theme_setup' );
?>
