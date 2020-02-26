<?php
/**
 * Layout Settings
 *
 * @package GT Drive
 */

/**
 * Add Layout settings to the Customizer
 *
 * @param object $wp_customize / Customizer Object.
 */
function gt_drive_customize_register_layout_settings( $wp_customize ) {

	// Add Section for Layout Settings.
	$wp_customize->add_section( 'gt_drive_section_layout', array(
		'title'    => esc_html__( 'Layout Settings', 'gt-drive' ),
		'priority' => 10,
		'panel'    => 'gt_drive_options_panel',
	) );

	// Get Default Settings.
	$default = gt_drive_default_options();

	// Add Header Search Headline.
	$wp_customize->add_control( new GT_Drive_Customize_Header_Control(
		$wp_customize, 'gt_drive_theme_options[header_search_title]', array(
			'label'    => esc_html__( 'Header Search', 'gt-drive' ),
			'section'  => 'gt_drive_section_layout',
			'settings' => array(),
			'priority' => 10,
		)
	) );

	// Add Setting and Control for header search checkbox.
	$wp_customize->add_setting( 'gt_drive_theme_options[header_search]', array(
		'default'           => $default['header_search'],
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'gt_drive_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gt_drive_theme_options[header_search]', array(
		'label'    => esc_html__( 'Enable search icon in header', 'gt-drive' ),
		'section'  => 'gt_drive_section_layout',
		'settings' => 'gt_drive_theme_options[header_search]',
		'type'     => 'checkbox',
		'priority' => 20,
	) );
}
add_action( 'customize_register', 'gt_drive_customize_register_layout_settings' );
