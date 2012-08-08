<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>

 <a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Permalink to %s', 'basejump'), the_title_attribute('echo=0')); ?>" rel="bookmark">
        <?php the_post_thumbnail('theme-medium'); ?>
    </a>
	<?php if ( is_search() ) : // Only display Excerpts for search pages ?>
	<div class="entry-summary">
		<?php the_excerpt( __('Continue reading <span class="meta-nav">&rarr;</span>', 'basejump' ) ); ?>
	</div><!-- .entry-summary -->

        <?php else : ?>
	<div class="entry-content">
		<?php the_excerpt( __(' Continue reading <span class="meta-nav">&rarr;</span>', 'basejump' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'basejump' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>
        
</article><!-- #post-<?php the_ID(); ?> -->
