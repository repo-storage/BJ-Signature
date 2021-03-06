<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
    <div class="well">
        <h1 class="entry-title">
                    <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'basejump' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
                </h1>
	<header class="entry-header">

		<?php if ( 'post' == $post->post_type ) : ?>

		<div class="entry-meta">
			<?php
				printf( __( '<span class="sep">Posted on </span><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s" pubdate>%3$s</time></a> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%4$s" title="%5$s">%6$s</a></span>', 'basejump' ),
					get_permalink(),
					get_the_date( 'c' ),
					get_the_date(),
					get_author_posts_url( get_the_author_meta( 'ID' ) ),
					sprintf( esc_attr__( 'View all posts by %s', 'basejump' ), get_the_author() ),
					get_the_author()
				);
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

        <?php if(has_post_thumbnail()) the_post_thumbnail('theme-thumbnail'); ?>

	<?php if ( is_search() ) : // Only display Excerpts for search pages ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content('... <span class="readon-link"> ) </span> '); ?>
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
        </div>
    <!-- ###### -->
</article><!-- #post-<?php the_ID(); ?> -->
