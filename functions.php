<?php
/**
 * @package iguana
 */
?>

<?php
if ( ! function_exists( 'iguana_setup' ) ) :
    function iguana_setup() {
        load_theme_textdomain( 'iguana', get_template_directory() . '/Languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
    }
endif;
add_action( 'after_setup_theme', 'iguana_setup' );





$theme_dir = get_template_directory();

// Register Google Fonts
require $theme_dir . '/inc/google-fonts.php';

// Enqueue Styles
require $theme_dir . '/inc/enqueue-styles.php';

// Register Menus
require $theme_dir . '/inc/menus.php';

// Register Widgets areas
require $theme_dir . '/inc/widgets.php';

// Enqueue Scripts
require $theme_dir . '/inc/enqueue-scripts.php';