<?php
/**
 * @package WordPress
 * @subpackage basejump
 */
?>
<div id="secondary1" class="widget-area" role="complementary">
    <?php if (!dynamic_sidebar('sidebar-1')) : ?>

        <aside id="search" class="widget widget_search">
            BOOTSTRAP
            <?php get_search_form(); ?>
        </aside>

        <aside id="archives" class="widget">
            <h3 class="widget-title"><?php _e('Archives', 'basejump'); ?></h3>
            <ul>
                <?php wp_get_archives(array('type' => 'monthly')); ?>
            </ul>
        </aside>

        <aside id="meta" class="widget">
            <h3 class="widget-title"><?php _e('Meta', 'basejump'); ?></h3>
            <ul>
                <?php wp_register(); ?>
                <aside><?php wp_loginout(); ?></aside>
                <?php wp_meta(); ?>
            </ul>
        </aside>

    <?php endif; // end sidebar widget area ?>
</div><!-- #secondary .widget-area -->

<?php if (is_active_sidebar('sidebar-2')) : ?>
    <div id="tertiary" class="widget-area" role="complementary">
        <?php dynamic_sidebar('sidebar-2'); ?>
    </div><!-- #tertiary .widget-area -->
<?php endif; ?>