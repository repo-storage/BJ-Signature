<?php
/*
  Template Name: Home Page
 */
?>

<!-- ###### -->

<div class="row">
    <div class="span8">
       <?php //cwp::get_tpl_content('page'); ?>

        <?php while (have_posts()) : the_post(); ?>
            <?php cwp_layout::tpl_part('base', 'page') ?>
            <?php //get_template_part('content', 'page'); ?>

            <?php //comments_template('', true); ?>

        <?php endwhile; // end of the loop. ?>
       <!-- class content -->
    </div>

    <div class="span4">
        <aside id="news">
         
            <?php cwp_post::query('showposts=5',null,'al-libraries'); ?>
            <!-- class content -->
        </aside>
    </div>
    <!-- class content -->
</div>
