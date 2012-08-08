<?php global $cpt_options;
get_header(); ?>
<div id="top">
    <div class="navbar navbar-fixed-top">
        <div class="container">
            <!-- ###### -->
            <div class="navbar-inner">
                <div class="container">
                    <!-- ###### -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="<?php home_url(); ?>" title="Home"><i class="icon-adjust"></i></a>
                    <div class="nav-collapse">
                        <?php //cwp_navs::factory()->set_depth(0)->tbs_menu('primary'); ?>
<?php EXT_WPNavs::add()->set_menu_class('nav')->set_depth(0)->set_theme_location('primary')->build_menu(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ###### -->

<!-- class content -->
<section id="header" >
    <div class="container">
        <!-- ###### -->
        <div class="row">
            <div class="span12">
                <!-- class content -->
                <hgroup>
                    <h1 id="site-title">
                        <span>
                            <?php
                            $bj_header = get_header_image();
                            if (!empty($bj_header)) :
                                ?>
                                <a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">

                                    <img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>" />
                                </a>
<?php else : ?>
                                <a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">

                                    <h1><?php bloginfo('name'); ?></h1>
                                </a>
<?php endif; ?>
                        </span>
                    </h1>
                    <h3 class="header-copy text-shadow"><?php bloginfo('description'); ?></h3>
                </hgroup>
            </div>
            <div class="row">
                <div class="span12">
                    <div class="social">
                        <?php cwp_social::twitter_link(); ?>
                        <?php cwp_social::facebook_link(); ?>
                        <?php cwp_social::gplus_link(); ?>
                        <?php cwp_social::linkedin_link(); ?>
                        <?php cwp_social::rss_link(); ?>
                    </div>

                </div>
                <!-- ###### -->

            </div>
            <!-- ###### -->
            <!-- class content -->
        </div>
        <!-- ###### -->
    </div>
</section>