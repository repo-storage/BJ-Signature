<?php
/**
 * @package WordPress
 * @subpackage Toolbox-core
 */

global $wp_query;
?>
<?php the_post(); ?>

<header class="page-header">
    <h1 class="page-title">
        <?php if (is_day()) : ?>
            <?php printf(__('Daily Archives: <span>%s</span>', 'basejump'), get_the_date()); ?>
        <?php elseif (is_month()) : ?>
            <?php printf(__('Monthly Archives: <span>%s</span>', 'basejump'), get_the_date('F Y')); ?>
        <?php elseif (is_year()) : ?>
            <?php printf(__('Yearly Archives: <span>%s</span>', 'basejump'), get_the_date('Y')); ?>
        <?php else : ?>
            <?php _e('Blog Archives', 'basejump'); ?>
        <?php endif; ?>
    </h1>
</header>

<?php rewind_posts(); ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ($wp_query->max_num_pages > 1) : ?>
    <nav id="nav-above">
<!--        <h1 class="section-heading"><?php _e('Post navigation', 'basejump'); ?></h1>-->
        <div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&larr;</span> Older posts', 'basejump')); ?></div>
        <div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&rarr;</span>', 'basejump')); ?></div>
    </nav><!-- #nav-above -->
<?php endif; ?>

<?php /* Start the Loop */ ?>
<?php while (have_posts()) : the_post(); ?>

    <?php //get_template_part('content', get_post_format()); ?>
    <?php cwp_layout::tpl_part('base',(get_post_format() ? get_post_format() : 'general')) ?>

<?php endwhile; ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ($wp_query->max_num_pages > 1) : ?>
    <nav id="nav-below">
<!--        <h1 class="section-heading"><?php _e('Post navigation', 'basejump'); ?></h1>-->
        <div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&larr;</span> Older posts', 'basejump')); ?></div>
        <div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&rarr;</span>', 'basejump')); ?></div>
    </nav><!-- #nav-below -->
<?php endif; ?>