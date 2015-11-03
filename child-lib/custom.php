<?php
// Create mini loops for the styleguide
function wff_styleguide_members( $retval ) {

    if ( is_page_template("templates/template-styleguide.php") ) {
        $retval['per_page'] = 3;
    }

    return $retval;
}
add_filter( 'bp_after_has_members_parse_args', 'wff_styleguide_members' );

// Create mini loops for the styleguide
function wff_styleguide_groups( $retval ) {

    if ( is_page_template("templates/template-styleguide.php") ) {
        $retval['per_page'] = 3;
    }

    return $retval;
}
add_filter( 'bp_after_has_groups_parse_args', 'wff_styleguide_groups' );

// Create mini loops for the styleguide
function wff_styleguide_activity( $retval ) {

    if ( is_page_template("templates/template-styleguide.php") ) {
        $retval['per_page'] = 3;
    }

    return $retval;
}
add_filter( 'bp_after_has_activities_parse_args', 'wff_styleguide_activity' );
?>
