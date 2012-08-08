<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>

        <!-- ###### -->
        <?php //if(has_post_thumbnail()) the_post_thumbnail('theme-medium'); ?>

	<?php if ( is_search() ) : // Only display Excerpts for search pages ?>
	<div class="entry-summary">
		<?php the_excerpt( __('Continue reading <span class="meta-nav">&rarr;</span>', 'basejump' ) ); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'basejump' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>
        <footer class="entry-meta">
<!--
		<span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ', 'basejump' ); ?></span><?php the_category( ', ' ); ?></span>
		<span class="sep"> | </span>
		<?php the_tags( '<span class="tag-links">' . __( 'Tagged ', 'basejump' ) . '</span>', ', ', '<span class="sep"> | </span>' ); ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'basejump' ), __( '1 Comment', 'basejump' ), __( '% Comments', 'basejump' ) ); ?></span>
		<?php edit_post_link( __( 'Edit', 'basejump' ), '<span class="sep">|</span> <span class="edit-link">', '</span>' ); ?>
                -->
	</footer>

</article><!-- #post-<?php the_ID(); ?> -->
