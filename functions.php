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

        add_theme_support( 'post-thumbnails' );
        add_image_size( 'iguana-large', 500, 400, true ); // width, height, crop

        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support(
            'post-formats',
            array(
                'link',
                'aside',
                'gallery',
                'image',
                'quote',
                'status',
                'video',
                'audio',
                'chat',
            )
        );

        add_theme_support(
            'html5',
            array(
                'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
            )
        );

                // Custom header, custom background, custom logo
                add_theme_support(
                    'custom-header',
                    apply_filters( 'iguana_custom_header_args',
                    array(
                        'default-color' => 'ffffff', // Customize > Colors > Header Text Color
                        'default-image' => '',
                        'width' => 2000,
                        'height' => 450,
                        'flex-height' => false,
                        'flex-width' => false,
                        )
                    )
                );
                add_theme_support(
                    'custom-background',
                    apply_filters(
                        'iguana_custom_background_args',
                        array(
                            'default-color'=> 'ffffff', // Customize > Colors > Background Color
                            'default-image'=> '',
                        )
                    )
                );
                add_theme_support(
                    'custom-logo',
                    array(
                        'width' => 50,
                        'height' => 50,
                        'flex-width' => true,
                        'flex-height' => true,
                        'header-text' => array( 'title-tag', 'site-description' ),
                    )
                );

                add_theme_support( 'customize-selective-refresh-widgets' );

    }
endif;
add_action( 'after_setup_theme', 'iguana_setup' );





$theme_dir = get_template_directory();

// Register Google Fonts
require $theme_dir . '/inc/google-fonts.php';

// Enqueue Styles
require $theme_dir . '/inc/enqueue-styles.php';

// Enqueue Scripts
require $theme_dir . '/inc/enqueue-scripts.php';

// Register Menus
require $theme_dir . '/inc/menus.php';

// Register Widgets areas
require $theme_dir . '/inc/widgets.php';

