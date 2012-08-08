<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$plugins = array(
		/** This is an example of how to include a plugin pre-packaged with a theme */
		array(
			'name'     => 'TGM Example Plugin', // The plugin name
			'slug'     => 'tgm-example-plugin', // The plugin slug (typically the folder name)
			'source'   => get_stylesheet_directory() . '/lib/plugins/tgm-example-plugin.zip', // The plugin source
			'required' => true // If false, the plugin is only 'recommended' instead of required
		),
		/** This is an example of how to include a plugin from the WordPress Plugin Repository */
		array(
			'name' => 'BuddyPress',
			'slug' => 'buddypress',
			'required' => false
		)
	);
