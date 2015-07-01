<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage evetheme
 * @since evetheme 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; // is_single() ?>


	</header><!-- .entry-header -->

	<?php if ( is_search() || is_home() ) : // Only display Excerpts for Search ?>
        <?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
            <div class="entry-thumbnail">
                <?php the_post_thumbnail('thumbnail'); ?>
            </div>
        <?php endif; ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
        <div class="entry-meta">
            <?php evetheme_entry_meta(); ?>
            <?php edit_post_link( __( 'Edit', 'evetheme' ), '<span class="edit-link">', '</span>' ); ?>
        </div><!-- .entry-meta -->
	<?php else : ?>
        <?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
        <div class="featured-img">
            <?php the_post_thumbnail(''); ?>
        </div>
        <?php endif; ?>
        <div class="entry-meta">
            <?php evetheme_entry_meta(); ?>
        </div><!-- .entry-meta -->
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
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'evetheme' ) . '</span>', __( 'One comment so far', 'evetheme' ), __( 'View all % comments', 'evetheme' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->
