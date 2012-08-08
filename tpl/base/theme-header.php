<!-- ###### -->
<div id="page">
<nav id="top" class="container show-on-desktops">

        <div class="row">
            <div class="twelve columns hr-menu menu-icon">
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'fallback_cb' => 'base_default_menu')); ?>
                <!-- ###end-row### -->
            </div>
        </div>
        <!-- container -->
</nav>
    <!-- class content -->
<section id="header" class="container">

        <div class="row logo">
            <div class="six columns">
                <!-- class content -->
                <hgroup>
                    <h1 id="site-title"><span>
                            <a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                                <?php //bloginfo('name'); ?>
                                <img src="<?php echo cwp::logo('cp-logo-round.png'); ?>" alt="<?php bloginfo('name'); ?>" />
                         </a></span>
                   </h1>
                </hgroup>
            </div>
            <div class="six columns">
                menu

                <!-- ####column-end#### -->
            </div>
            <!-- ###### -->
            <!-- class content -->

        </div>
        <!-- class content -->

</section>

