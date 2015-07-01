<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
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
				<h1 class="archive-title"><?php printf( __( 'Tag Archives: %s', 'evetheme' ), single_tag_title( '', false ) ); ?></h1>

				<?php if ( tag_description() ) : // Show an optional tag description ?>
				<div class="archive-meta"><?php echo tag_description(); ?></div>
				<?php endif; ?>
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