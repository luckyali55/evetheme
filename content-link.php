<?php
/**
 * The template for displaying posts in the Link post format
 *
 * @package WordPress
 * @subpackage evetheme
 * @since evetheme 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title">
			<a href="<?php echo esc_url( evetheme_get_link_url() ); ?>"><?php the_title(); ?></a>
		</h1>

		<div class="entry-meta">
			<?php evetheme_entry_date(); ?>
			<?php edit_post_link( __( 'Edit', 'evetheme' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'evetheme' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'evetheme' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
		?>
	</div><!-- .entry-content -->

	<?php if ( is_single() ) : ?>
	<footer class="entry-meta">
		<?php evetheme_entry_meta(); ?>
		<?php if ( get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
	<?php endif; // is_single() ?>
</article><!-- #post -->
