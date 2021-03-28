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
            'header' => __( 'Header Menu', 'iguana' ),
            'footer' => __( 'Footer Menu', 'iguana' ),
            'mobile' => __( 'Mobile Menu', 'iguana' ),
            'social' => __( 'Social Menu', 'iguana' ),
        )
    );
}
add_action( 'init', 'iguana_register_menu' );