<?php

if ( is_front_page() && is_home() ) :

    // Display logo if selected. Or display nothing if no logo is selected/
    if ( has_custom_logo() ) {
        if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        }
    }
?>

    <h1 class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    </h1>

    <h3 class="site-description">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a>
    </h3>

<?php else : ?>

    <h1>Big Error</h1>

<?php endif; ?>

---------------------------------



