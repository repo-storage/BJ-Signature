<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Theme Install Guide</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">



        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://dl.dropbox.com/u/28233385/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://dl.dropbox.com/u/28233385/bootstrap/css/bootstrap-responsive.css"/>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/install.css"/>
<!--        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />-->
        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">

    </head>

    <body data-spy="scroll" data-target=".subnav" data-offset="50">

        <!-- class content -->
        <!-- Demo content taken from the normalize.css project: http://necolas.github.com/normalize.css/ -->

        <section id="content">
            <div class="container install-help">
                <!-- class content -->
                <section id="articles">
                    <div class="row">
                        <div class="hero-unit">
                            <?php if(!is_user_logged_in()) : ?>
                            <div class="screenshot">
                                <img src="<?php echo get_template_directory_uri() ?>/screenshot.png" />
                            </div>
                            <!-- class content -->
                            <h1>Welcome to <?php bloginfo('name');?></h1>
<!--                            <h3>THEME SETUP INTRODUCTION</h3>-->
                            <p>
                                <?php echo bloginfo('description'); ?>
                            </p>
                            <?php else : ?>

                            <div class="">
<div class="screenshot">
                                <img src="<?php echo get_template_directory_uri() ?>/screenshot.png" />
                            </div>
                            <!-- class content -->
                            <h1><?php echo $bj_theme_info = wp_get_theme();?></h1>
                            <h3>THEME SETUP INTRODUCTION</h3>
                            <p>
                                <?php echo $bj_theme_info->Description; ?>
                            </p>
                                </div>
                                <!-- ###### -->

                            <div class="alert alert-error">
                                Several of the theme's required plugins are missing please go to the Admin / Apperance / Theme Plugins to rectify. Thank you!

                                </div>
                                <!-- ###### -->
                            <?php endif;  ?>
                            <div class="clear">Cleared</div>
                        </div>
                        <!-- ###### -->

                    </div>
                    <!-- ###### -->
                  </section>
                    </div>
                </section>

        <section id="footer">
            <div class="row">
                <div class="container">


                    <!-- ###### -->
                    <div class="twelve columns">
                        <div id="copright-info">
                            <p class="copyright">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>.
                                All Rights Reserved.
                                <br />
                            </p>
                            <p class="designer-copy"> <a href="http://craftedandpressed.com" target="_BLANK">
                                    Designed by Crafted and Pressed</a>.
                            </p>
                        </div>
                        <!-- ###end-row### -->
                    </div>
                </div>
            </div>
        </section>

        <?php get_footer(); ?>

    </body>