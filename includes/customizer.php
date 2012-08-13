<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * **************************THEME CUSTOMIZER 3.4+******************************
 */

add_action( 'customize_register', 'themename_customize_register' );
function themename_customize_register($wp_customize) {



	$wp_customize->add_section( 'themedemo_demo_settings', array(
		'title'          => __('Demonstration Stuff','basejump'),
		'priority'       => 35,
	) );

	$wp_customize->add_setting( 'some_setting', array(
		'default'        => 'default_value',
	) );

	$wp_customize->add_control( 'some_setting', array(
		'label'   => 'Text Setting',
		'section' => 'themedemo_demo_settings',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'some_other_setting', array(
		'default'        => '#000000',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'some_other_setting', array(
		'label'   => __('Color Setting','basejump'),
		'section' => 'themedemo_demo_settings',
		'settings'   => 'some_other_setting',
	) ) );
}



