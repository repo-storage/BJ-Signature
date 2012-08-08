<?php
/**
 * @package WordPress
 * @subpackage basejump-search
 */

global $wp_query;
?>
<section id="post-content">
<?php if (have_posts()) : ?>

    <header class="page-header">
        <h1 class="page-title"><?php printf(__('Search Results for: %s', 'basejump'), '<span>' . get_search_query() . '</span>'); ?></h1>
    </header>

    <?php /* Display navigation to next/previous pages when applicable */ ?>
    <?php if ($wp_query->max_num_pages > 1) : ?>
        <nav id="nav-above">
            <h1 class="section-heading"><?php _e('Post navigation', 'basejump'); ?></h1>
            <div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&larr;</span> Older posts', 'basejump')); ?></div>
            <div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&rarr;</span>', 'basejump')); ?></div>
        </nav><!-- #nav-above -->
    <?php endif; ?>

    <?php /* Start the Loop */ ?>
    <?php while (have_posts()) : the_post(); ?>


      <?php //cwp::get_tpl_content('search'); ?>
     <?php //cwp_layout::tpl_part('base','search') ?>
     <?php cwp_layout::tpl_part('base',(get_post_format() ? get_post_format() : 'general')) ?>


    <?php endwhile; ?>

    <?php /* Display navigation to next/previous pages when applicable */ ?>
    <?php if ($wp_query->max_num_pages > 1) : ?>
        <nav id="nav-below">
            <h1 class="section-heading"><?php _e('Post navigation', 'basejump'); ?></h1>
            <div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&larr;</span> Older posts', 'basejump')); ?></div>
            <div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&rarr;</span>', 'basejump')); ?></div>
        </nav><!-- #nav-below -->
    <?php endif; ?>

<?php else : ?>

    <article id="post-0" class="post no-results not-found">
        <header class="entry-header">
            <h1 class="entry-title"><?php _e('Nothing Found', 'basejump'); ?></h1>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <p><?php _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'basejump'); ?></p>
            <?php get_search_form(); ?>
        </div><!-- .entry-content -->
    </article><!-- #post-0 -->

<?php endif; ?>
</section>