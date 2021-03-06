<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * *****************************************************************************
 * THEME (DE)ACTIVATION
 * Theme activation hook: 'after_switch_theme'
 * Theme de-activation hook: 'switch_theme'
 */
add_action('wp_enqueue_scripts', 'bj_theme_scripts');

function bj_theme_scripts() {

}

/**
 * theme deactivation
 */
add_action('switch_theme', 'bj_deactivate_theme');

function bj_deactivate_theme() {
    //name of your theme
    update_option('cwp_last_theme', 'Base-dev');
}

/**
 * theme activation
 */
add_action('after_switch_theme', 'bj_activate_theme');

function bj_activate_theme() {

    //if (!class_exists('FN_Pages_Setup')) include_once get_stylesheet_directory().'/vendor/FN_Theme_Setup.php';

    FN_Pages_Setup::add()->set_home_page('Home Page')->set_post_status('publish')->setup();

    //resets the home page to wordpress default (posts)
    FN_Pages_Setup::default_home_page_option();

    //Fn_Gen::instance()->remove_image_dimesions();

    csf_default_menus();
}

/**
 * ******************************ADMIN INIT**************************************
 */
add_action('admin_init', 'bj_admin_init');

function bj_admin_init() {

//custom_theme_shop::factory();
//
//cts_products::factory()->product_details();
//
//cts_settings::factory()->order_info();
//cts_shipping::factory()->add_shipping();
}


add_action('after_theme_setup', 'bj_theme_setup');

function bj_theme_setup(){
        /*
     * footer widgets
     */
    cwp::add_widget('Sidebar', 'sidebar', 'Top sidebar widget');
    cwp::add_widget('Secondary Sidebar', 'secondary-sidebar', 'Themes Secondary Sidebar');
    cwp::add_widget('info 1', 'info-1', 'Display widgets in the first footer box');
    cwp::add_widget('info 2', 'info-2', 'Display widgets in the second footer box');
    cwp::add_widget('info 3', 'info-3', 'Display widgets in the third footer box');
    cwp::add_widget('info 4', 'info-4', 'Display widgets in the fourth footer box');
    cwp::add_widget('info 5', 'info-5', 'Display widgets in the fifth footer box');
    cwp::add_widget('Widget Page', 'widget-page', 'Display widgets on the widget-page tpl');
    cwp::register_sidebar('404 Page', '404-page', 'Display widgets on the 404-page tpl');
/*
 * *********** Custom images sizes and post media manage integration ************
 */








}


$recthumb = new Recent_thumbs_Widget();

add_theme_support('post-thumbnails');



add_image_size('rec-thumbs-widget', 200, 120, true);
add_image_size('theme-thumbnail', 900, 220, true);
add_image_size('theme-medium', 960, 0, true);
add_image_size('theme-large', 1200, 0, true);
add_image_size('gallery-thumb', 480, 480, TRUE);
//add_image_size('theme-preview', 620, 500, true);
add_filter('image_size_names_choose', 'cwp_theme_images');
function cwp_theme_images($sizes) {
    $isizes = array(
        "theme-thumbnail" => __('Theme Thumbnails', 'basejump'),
        "theme-medium" => __('Theme Medium', 'basejump'),
        "theme-large" => __('Theme Large', 'basejump'),
            //"theme-preview" => __('Theme Preview' . 'basejump'),
    );
    $imgs = array_merge($sizes, $isizes);
    return $imgs;
}


/**
 * enqueue scripts
 */
add_action('wp_enqueue_scripts', 'bj_scripts');

function bj_scripts() {
    /**
     * @todo add theme scripts here
     */
    //wp_enqueue_script( 'script_name' );
}

/**
 * *************customisations**************************************************
 */
//add more optoion to user profile
cwp_social::contact_info();

//post gallery rotator checkbox
cwp_gallery::gallery_rotator();


core_admin::remove_wp_adminbar_logo();

/**
 * ***********grab browser screenshots shortcode********************************
 */
cwp::browsershots();


/**
 * display gallery petabox image gallery metabox
 */
if (function_exists('be_gallery_metabox')):

    function be_gallery_types() {
        $post = array('post', 'page', 'cwp_theme');
        return $post;
    }

    function be_gallery_icon() {
        return 'icon-60';
    }

    add_filter('be_gallery_metabox_post_types', 'be_gallery_types', 10, 2);
    add_filter('be_gallery_metabox_image_size', 'be_gallery_icon', 10, 2);

endif;

/**
 * remove dashboard widgets
 */
core_admin::remove_dashboard_widgets();

/**
 * remove post revisions
 */
add_action('init', 'cwpt_custom_init');

function cwpt_custom_init() {
    remove_post_type_support('post', 'revisions');
}

/**
 * add some menu items
 */
//add_filter( 'wp_nav_menu_items', 'add_loginout_link', 10, 2 );
function add_loginout_link($items, $args) {
    $items = cwp_navs::factory()->add_loginout($items, $args, 'primary');
    return $items;
}

add_filter('wp_nav_menu_items', 'your_custom_menu_item', 10, 2);

function your_custom_menu_item($items, $args) {
    $items = cwp_navs::factory()->add_drop_down($items, $args, 'browse', "Another Dropwdown");
    return $items;
}

/**
 * adds short code buttons
 */
//core_admin::shortcode_buttons();

/**
 * --- AL-Manager -----
 */
//AUTOLOAD MANAGER FILTER(S)

add_filter('alm_filter', 'al_paths');

//sample fliter adds 'inc' dir to the autoload paths
//used for development scripts
function al_paths($folders) {
    $p = array(WP_PLUGIN_DIR . '/al-manager/inc/');
    $folders = array_merge($p, $folders);
    return $folders;
}

//check if ALM is loaded and add filter
add_filter('alm_filter', 'al_paths_');

//sample fliter adds 'inc' dir to the autoload paths
//used for development scripts
function al_paths_($folders) {
    $p = array(WP_PLUGIN_DIR . '/al-manager/library/');
    $folders = array_merge($p, $folders);
    return $folders;
}

/**

 * Bootstrap js
 *
 */
add_action('wp_enqueue_scripts', 'cwpt_bootstrap_scripts');

function cwpt_bootstrap_scripts() {

    wp_enqueue_script('bootstrap-transition');
    wp_enqueue_script('bootstrap-dropdown');
    wp_enqueue_script('bootstrap-collapse');
}

/**
 * Mobile body class
 */
if (mod_mobile::detect()->isMobile())
    add_filter('body_class', 'cwpt_mobile_class');

function cwpt_mobile_class($classes) {
    $classes[] = 'mobile';
    return $classes;
}

/**
 * Phone body class
 */
if (mod_mobile::detect()->isPhone())
    add_filter('body_class', 'cwpt_phone_class');

function cwpt_phone_class($classes) {
    $classes[] = 'phone';
    return $classes;
}

/**
 * Editor style
 */
add_editor_style('editor-style.css');

function link_excerpt_more($more) {
    global $post;
    return '... <span class="readon-link"> <a href="' . get_permalink($post->ID) . '">)  </a></span> ';
}

add_filter('excerpt_more', 'link_excerpt_more');


/**
 * AL.Manager - make sure you are cleared to run, load classes on init do not load directly;
 */
add_action('init', 'load_classes');

function load_classes() {

//MB_Img_url::add_metabox()->admin_actions()->set_metabox_id('my-metabox');
    $styles = array(
        array('title' => 'Button', 'inline' => 'span', 'classes' => 'btn'),
        array('title' => 'info', 'inline' => 'span', 'classes' => 'btn btn-info'),
        array('title' => 'Success', 'inline' => 'span', 'classes' => 'btn btn-success'),
        array('title' => 'Warning', 'inline' => 'span', 'classes' => 'btn btn-warning'),
        array('title' => 'Font Size'),
        array('title' => 'Tiny', 'inline' => 'span', 'classes' => 'font-tiny'),
        array('title' => 'Small', 'inline' => 'span', 'classes' => 'font-small'),
        array('title' => 'Medium', 'inline' => 'span', 'classes' => 'font-medium'),
        array('title' => 'Large', 'inline' => 'span', 'classes' => 'font-large'),
        array('title' => 'Labels'),
        array('title' => 'Default', 'inline' => 'span', 'classes' => 'label'),
        array('title' => 'Warning', 'inline' => 'span', 'classes' => 'label label-warning'),
        array('title' => 'Info', 'inline' => 'span', 'classes' => 'label label-info'),
        array('title' => 'Important', 'inline' => 'span', 'classes' => 'label label-important'),
        array('title' => 'Alerts'),
        array('title' => 'Default', 'block' => 'div', 'classes' => 'alert'),
        array('title' => 'Info', 'block' => 'div', 'classes' => 'alert alert-info'),
        array('title' => 'Others'),
        array('title' => 'Well', 'block' => 'div', 'classes' => 'well'),
        array('title' => 'Highlight', 'inline' => 'span', 'classes' => 'highlight'),
    );

    Ext_Editor_Styles::create()->set_styles($styles)->add_filters();

    /**
     * testing menubars
     */
    /**
     * Theme Navs
     */
    /** Adss amenu item * */
    Ext_WPNavs::add()->set_theme_location('primary')->add_loginout();

    //mmmmiopFn_Gen::instance()->img_figure();

    Fn_Images::factory()->fluid_images();
}

/**
 * Customize Adminbar Post Menus
 *
 */
function apm_menus() {
    //create an post_type array(post_type, menu_title);
    $post_types = array('post' => 'Posts', 'page' => 'Pages', 'cwp_article' => 'Articles', 'cwp_faq' => "FAQ(s)");

    //load and run the class
    $apmmenus = AdminbarPostMenus::add_menus()->set_list_count(5)->set_post_types($post_types)->nodes();
}

// run the function on init;
add_action('init', 'apm_menus');


/**
 * Theme Plugins / Activations
 */
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * ******************************plugin activations*****************************
 */
if(file_exists(get_template_directory().'/plugins/theme-plugins.php'))
include_once get_template_directory().'/plugins/theme-plugins.php';

/***************************************************************************************/



/**
 * **************************THEME CUSTOMIZER 3.4+******************************
 */
$bj_site_logo = get_template_directory_uri() . '/images/signature-header.png';
if (!file_exists(get_template_directory() . '/images/signature-header.png'))
    $bj_site_logo = '';
$bj_theme_header = array(
    'default-image' => $bj_site_logo,
    'random-default' => false,
    'width' => 300,
    'height' => 48,
    'flex-height' => true,
    'flex-width' => true,
    'default-text-color' => '',
    'header-text' => true,
    'uploads' => true,
    'wp-head-callback' => '',
    'admin-head-callback' => '',
    'admin-preview-callback' => '',
);
add_theme_support('custom-header', $bj_theme_header);


$bj_background = get_template_directory_uri() . '/images/site-logo.png';
if (!file_exists($bj_background))
    $bj_background = '';
$bj_theme_background = array(
    'default-color' => 'FFFFFF',
    'default-image' => $bj_background,
    'wp-head-callback' => '_custom_background_cb',
    'admin-head-callback' => '',
    'admin-preview-callback' => ''
);
add_theme_support('custom-background', $bj_theme_background);