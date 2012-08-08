<?php

/**
 * PLEASE DO NOT EDIT THIS FUNCTION FILE >>> CREATE AND ADD FUNCTIONS TO A CUSTOM_FUNCTIONS.PHP FILE *********
 */


function install_guide($templates) {
    $tpl = get_template_directory() . '/install-guide.php';
    load_template($tpl);
}

if (!class_exists('cwp') OR $wp_version > 3.4):
    add_filter('template_include', 'install_guide');
    return;
endif;


/**
 * CSF FUNCTIONS
 */
if(file_exists(CWP_PATH .'/csf_functions.php'))
include_once CWP_PATH .'/csf_functions.php';


/**
 ****************THEME OPTIONS *************************************************
 */

if(file_exists(get_template_directory().'/theme-options.php')):
    include_once get_template_directory().'/theme-options.php';
    else:
    include_once CWP_PATH .'/theme-options/theme-options.php';
endif;


/**
 * ******************************************************************************
 * custom functions create this file and add your own custom functions
 */
if (file_exists(TEMPLATEPATH . '/custom_functions.php')) {
    include_once TEMPLATEPATH . '/custom_functions.php';
}

/**
 * ******************************************************************************
 */
/**
 * ******************************************************************************
 * toolbox functions theme functions
 */
if (file_exists(TEMPLATEPATH . '/theme_functions.php'))
    include_once TEMPLATEPATH . '/theme_functions.php';

/**
 * ******************************************************************************
 */
/**
 * ******************************************************************************
 * Custom metaboxes
 */
if(!class_exists('cmb_Meta_Box')):
if (file_exists(TEMPLATEPATH . '/includes/Custom-Metaboxes/init.php'))
    include_once TEMPLATEPATH . '/includes/Custom-Metaboxes/init.php';
endif;

