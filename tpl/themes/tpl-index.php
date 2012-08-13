<?php
/**
 * theme index file
 * @package WordPress
 * @subpackage CORE-SF
 */
?>
<?php cwp_layout::theme_header(); ?>
<section id="content" class="">
    <div class="container">
        <!-- ###### -->
        <div class="row-fluid">
            <div class="span8">
                <section id="articles">
                  <?php cwp_layout::main_tpl(); ?>
                </section>
            </div>
            <div class="span4">
                <section id="sidebar">
                    lll
                    <?php cwp_layout::the_sidebar('tbs'); ?>
                </section>
            </div>
        </div>
    </div>
</section>
<?php cwp_layout::theme_footer(); ?>
