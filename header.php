<?php
/**
 * @package iguana
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="site-wrapper">

    <!-- Skip to content -->
    <a class="skip-link screen-reader-text" href="#content">
        <?php esc_html_e( 'Skip to Content', 'iguana' ); ?>
    </a>

    <!-- Header Section -->
    <?php get_template_part( 'template-parts/header/site-header' ); ?>