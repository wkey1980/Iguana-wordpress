<?php
/**
 * @package iguana
 */
?>
<?php

// Widgets
function iguana_widgets_init() {

    register_sidebar(
        array(
            'name' => esc_html__( 'Header', 'iguana '),
            'id' => 'header_widget',
            'description' => esc_html__( 'Add widgets here', 'iguana' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '<?h1>',
        )
    );

    register_sidebar(
        array(
            'name' => esc_html__( 'Footer', 'iguana '),
            'id' => 'footer_widget',
            'description' => esc_html__( 'Add widgets here', 'iguana' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '<?h1>',
        )
    );

    register_sidebar(
        array(
            'name' => esc_html__( 'Sidebar', 'iguana '),
            'id' => 'sidebar_widget',
            'description' => esc_html__( 'Add widgets here', 'iguana' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '<?h1>',
        )
    );

}
add_action( 'widgets_init', 'iguana_widgets_init' );

?>