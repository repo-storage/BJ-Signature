<?php
/**
 * @package WordPress
 * @subpackage Toolbox-core
 */


?><header class="page-header">
    <h1 class="page-title"><?php
printf(__('Category Archives: %s', 'basejump'), '<span>' . single_cat_title('', false) . '</span>');
?></h1>

    <?php $categorydesc = category_description();
    if (!empty($categorydesc))
        echo apply_filters('archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>'); ?>
</header>

<?php /* Display navigation to next/previous pages when applicable */ ?>


<?php /* Start the Loop */ ?>
<?php if(have_posts()) :

while (have_posts()) : the_post(); ?>

    <?php //get_template_part( 'content', get_post_format() ); ?>
    <?php cwp_layout::tpl_part('base',(get_post_format() ? get_post_format() : 'general')) ?>


<?php endwhile; ?>
        <?php else : ?>
        <div class="hero-unit">
<?php cwp_layout::tpl_part('','no_post'); ?>
    </div>
    <!-- ###### -->

<?php endif; ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php cwp_layout::tpl_part('base', 'post-nav'); ?>