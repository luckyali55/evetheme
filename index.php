<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage evetheme
 * @since evetheme 1.0
 */

get_header(); ?>

<section class="wrapper style4 container">

    <div class="row 150%">
        <div class="8u 12u(narrower)">

            <!-- Content -->
            <div class="content">
                <section>
                <?php if ( have_posts() ) : ?>
                    <?php /* The loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', get_post_format() ); ?>
                    <?php endwhile; ?>

                    <?php blog_pagination(); ?>

                <?php else : ?>
                    <?php //get_template_part( 'content', 'none' ); ?>
                    <?php the_excerpt();  ?>
                <?php endif; ?>
                </section>
            </div>

        </div>
        <div class="4u 12u(narrower)">

            <!-- Sidebar -->
            <div class="sidebar">
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>
</section>




<?php get_footer(); ?>
