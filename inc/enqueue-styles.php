<?php
/**
 * @package iguana
 */
?>

<?php

define( 'iguana_theme_uri', get_template_directory_uri() );

function iguana_setup_styles() {

    $iguana_setup_style_ver = wp_get_theme()->get( 'Version' );

    // Enqueue theme.css stylesheet // ! last stylesheet to be loaded.
    wp_enqueue_style( 'theme.css', iguana_theme_uri . '/dist/theme.css', array(), $iguana_setup_style_ver, 'all' );
}
add_action( 'wp_enqueue_scripts', 'iguana_setup_styles' );
?>



