<?php
/**
 * @package iguana
 */
?>

<?php get_header(); ?>

    <!-- Main Section -->
    <main id="content" class="main">

        <!-- MordPress Loop -->
        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <article class="post">
                    <?php the_title( '<h1 class="CHANGE-CLASS"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>
                    <?php the_content(); ?>

                </article>

            <?php endwhile ?>

        <?php else : ?>

            <article class="post error">
                <h1 class="404">No posts found</h1>
            </article>

        <?php endif; ?>

    </main>

<?php get_footer(); ?>
