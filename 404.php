<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage evetheme
 * @since evetheme 1.0
 */

get_header(); ?>

    <section class="wrapper style4 container">

    <div class="row 150%">
    <div class="12u">

        <!-- Content -->
        <div class="content">
            <div class="page-wrapper">
				<div class="page-content notfound">
					<h2 ><?php _e( 'NOT FOUND', 'evetheme' ); ?></h2>
					<p><?php _e( 'Try a search?', 'evetheme' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->
    </div>
    </section>

<?php get_footer(); ?>