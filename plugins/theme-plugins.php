<?php

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname(__FILE__) . '/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'bj_plugins');


function bj_plugins() {


    $plugins = array(

        array(
            'name' => 'Core.WP',
            'slug' => 'core-wp',
            'source' => get_template_directory() . '/plugins/core-wp.zip', // The plugin source
            'required' => true,
            'version' => '',
            'force_activation' => true,
            'force_deactivation' => false,
            'external_url' => '',
        ),

        array(
            'name' => 'AL-Manager',
            'slug' => 'al-manager',
            'source' => get_template_directory() . '/plugins/al-manager.zip', // The plugin source
            'required' => true,
            'version' => '',
            'force_activation' => true,
            'force_deactivation' => false,
            'external_url' => '',
        ),
        array(
            'name' => 'Adminbar Post Menus',
            'slug' => 'adminbar-post-menus',
            'required' => true
        ),
        array(
            'name' => 'Meta Box',
            'slug' => 'meta-box',
            'required' => true
        ),
        array(
            'name' => 'WordPress SEO by Yoast',
            'slug' => 'wordpress-seo',
            'required' => false
        ),
        array(
            'name' => 'Google Analytics for WordPress',
            'slug' => 'google-analytics-for-wordpress',
            'required' => false
        ),
        array(
            'name' => 'Jetpack by WordPress.com',
            'slug' => 'jetpack',
            'required' => false
        ),
        array(
            'name' => 'Jquery Colobox',
            'slug' => 'jquery-colorbox',
            'required' => true
        ),
        array(
            'name' => 'SyntaxHighlighter TinyMCE Button',
            'slug' => 'syntaxhighlighter-tinymce-button',
            'required' => false
        ),
        array(
            'name' => 'Akismet',
            'slug' => 'akismet',
            'required' => false
        ),
    );



    /**
     ***************************************************************************
     *
     ***************************************************************************
     */
    $config = array(
        'domain' => 'basejump', // Text domain - likely want to be the same as your theme.
        'default_path' => '', // Default absolute path to pre-packaged plugins
        'parent_menu_slug' => 'themes.php', // Default parent menu slug
        'parent_url_slug' => 'themes.php', // Default parent URL slug
        'menu' => 'plugin-installer', // Menu slug
        'has_notices' => true, // Show admin notices or not
        'is_automatic' => true, // Automatically activate plugins after installation or not
        'message' => '', // Message to output right before the plugins table
        'strings' => array(
            'page_title' => __('Install Required Theme Plugins', 'basejump'),
            'menu_title' => __('Theme Plugins', 'basejump'),
            'installing' => __('Installing Theme Plugin: %s', 'basejump'), // %1$s = plugin name
            'oops' => __('Something went wrong with the plugin API.', 'basejump'),
            'notice_can_install_required' => _n_noop('This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.'), // %1$s = plugin name(s)
            'notice_can_install_recommended' => _n_noop('This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.'), // %1$s = plugin name(s)
            'notice_cannot_install' => _n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.'), // %1$s = plugin name(s)
            'notice_can_activate_required' => _n_noop('The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.'), // %1$s = plugin name(s)
            'notice_can_activate_recommended' => _n_noop('The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.'), // %1$s = plugin name(s)
            'notice_cannot_activate' => _n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.'), // %1$s = plugin name(s)
            'notice_ask_to_update' => _n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.'), // %1$s = plugin name(s)
            'notice_cannot_update' => _n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.'), // %1$s = plugin name(s)
            'install_link' => _n_noop('Begin installing plugin', 'Begin installing plugins'),
            'activate_link' => _n_noop('Activate installed plugin', 'Activate installed plugins'),
            'return' => __('Return to Required Plugins Installer', 'basejump'),
            'plugin_activated' => __('Plugin activated successfully.', 'basejump'),
            'complete' => __('All plugins installed and activated successfully. %s', 'basejump'), // %1$s = dashboard link
            'nag_type' => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
        )
    );

    tgmpa($plugins, $config);
}