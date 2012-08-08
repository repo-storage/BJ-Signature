<?php
/**
 * The template used to display Tag Archive pages
 *
 * @package WordPress
 * @subpackage Toolbox-core
 */
?>

<?php the_post(); ?>

<header class="page-header">
    <h1 class="page-title"><?php
printf(__('Tag Archives: %s', 'basejump'), '<span>' . single_tag_title('', false) . '</span>');
?></h1>
</header>

<?php rewind_posts(); ?>

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


    <?php// cwp::get_tpl_content((get_post_format() ? get_post_format() : 'general')); ?>
    <?php cwp_layout::tpl_part((get_post_format() ? get_post_format() : 'general')) ?>

<?php endwhile; ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ($wp_query->max_num_pages > 1) : ?>
    <nav id="nav-below">
        <h1 class="section-heading"><?php _e('Post navigation', 'basejump'); ?></h1>
        <div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&larr;</span> Older posts', 'basejump')); ?></div>
        <div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&rarr;</span>', 'basejump')); ?></div>
    </nav><!-- #nav-below -->
<?php endif; ?>

