<?php
/**
 * @package iguana
 */
?>
<?php
function iguana_setup_scripts() {

    // Enqueue theme.js scripts // ! last js scripts to be loaded.
    wp_enqueue_script( 'theme.js', IGUANA_THEME_URI . '/app/js/theme.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'iguana_setup_scripts' );










