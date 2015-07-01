<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, evetheme
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
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
				<h1 class="archive-title"><?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'evetheme' ), get_the_date() );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'evetheme' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'evetheme' ) ) );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'evetheme' ), get_the_date( _x( 'Y', 'yearly archives date format', 'evetheme' ) ) );
					else :
						_e( 'Archives', 'evetheme' );
					endif;
				?></h1>
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