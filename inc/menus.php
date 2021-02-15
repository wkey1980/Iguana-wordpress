<?php
/**
 * @package iguana
 */
?>

<?php

// Register menu locations

function iguana_register_menu() {
    register_nav_menus(
        array(
            'header' => __( 'Header Menu', 'uguana' ),
            'footer' => __( 'Footer Menu', 'uguana' ),
            'mobile' => __( 'Mobile Menu', 'uguana' ),
            'social' => __( 'Social Menu', 'uguana' ),
        )
    );
}
add_action( 'init', 'iguana_register_menu' );