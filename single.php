<?php
/**
 * The template for displaying all single posts
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

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php evetheme_post_nav(); ?>
				<?php comments_template(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

        <div class="4u 12u(narrower)">

            <!-- Sidebar -->
            <div class="sidebar">
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>
    </section>

<?php get_footer(); ?>