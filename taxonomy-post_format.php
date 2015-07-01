<?php
/**
 * The template for displaying Post Format pages
 *
 * Used to display archive-type pages for posts with a post format.
 * If you'd like to further customize these Post Format views, you may create a
 * new template file for each specific one.
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

                <?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( '%s Archives', 'evetheme' ), '<span>' . esc_html( get_post_format_string( get_post_format() ) ) . '</span>' ); ?></h1>
			</header><!-- .archive-header -->

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php blog_pagination(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

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