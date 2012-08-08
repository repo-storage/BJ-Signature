<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>
            <?php
            /*
             * Print the <title> tag based on what is being viewed.
             */
            global $page, $paged;

            wp_title('|', true, 'right');

            // Add the blog name.
            bloginfo('name');

            // Add the blog description for the home/front page.
            $site_description = get_bloginfo('description', 'display');
            if ($site_description && ( is_home() || is_front_page() ))
                echo " | $site_description";

            // Add a page number if necessary:
            if ($paged >= 2 || $page >= 2)
                echo ' | ' . sprintf(__('Page %s', 'basejump'), max($paged, $page));
            ?>
        </title>
<!--        wp_head here will make sure plugins and stylesheets do not mess with the design-->
<?php wp_head(); ?>


	<!-- Included CSS Files -->
<!--        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri().'/library/css/post-style.css' ?>" />-->
<!--        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri().'/library/css/wp.css' ?>" />-->



        <?php if (mod_mobile::detect()->isIphone()): ?>
            <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
            <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
            <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <?php endif ?>
        <link rel="stylesheet" href="<?php  echo cwp::locate_in_library('bootstrap.min.css', 'bootstrap/css'); ?>"/>
        <?php //if(mod_mobile::detect()->isMobile()): ?>
        <link rel="stylesheet" href="<?php echo cwp::locate_in_library('bootstrap-responsive.min.css', 'bootstrap/css'); ?>"/>
        <?php //endif; ?>
        <link rel="stylesheet" href="<?php echo cwp::locate_in_library('ui-stylesheet.css') ?>"/>
        <link rel="stylesheet" href="<?php echo cwp::locate_in_library('base-style.css') ?>" />
        <link rel="stylesheet" href="<?php echo cwp::locate_in_library('stylesheet.css', 'fonts/socialicons'); ?>"/>
        <link rel="stylesheet" href="<?php echo cwp::locate_in_library('stylesheet.css', 'fonts/Droid-Sans'); ?>"/>
        <link rel="stylesheet" href="<?php echo cwp::locate_in_library('font-awesome.css', 'bootstrap/css'); ?>"/>
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/foundation/stylesheets/ie.css">
	<![endif]-->

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!--	<script src="<?php echo get_template_directory_uri() ?>/foundation/javascripts/jquery-1.5.1.min.js"></script>-->

         <!-- theme stylesheet last - cascading elements -->
         <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/mobile.css' ?>"/>


</head>
<body <?php body_class() ?>>
<div id="page">
