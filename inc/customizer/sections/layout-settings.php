<?php
/**
 * Layout Settings
 *
 * @package GT Pure
 */

/**
 * Add Layout settings to the Customizer
 *
 * @param object $wp_customize / Customizer Object.
 */
function gt_pure_customize_register_layout_settings( $wp_customize ) {

	// Add Section for Layout Settings.
	$wp_customize->add_section( 'gt_pure_section_layout', array(
		'title'    => esc_html__( 'Layout Settings', 'gt-pure' ),
		'priority' => 10,
		'panel'    => 'gt_pure_options_panel',
	) );

	// Get Default Settings.
	$default = gt_pure_default_options();

	// Add Header Search Headline.
	$wp_customize->add_control( new GT_Pure_Customize_Header_Control(
		$wp_customize, 'gt_pure_theme_options[header_search_title]', array(
			'label'    => esc_html__( 'Header Search', 'gt-pure' ),
			'section'  => 'gt_pure_section_layout',
			'settings' => array(),
			'priority' => 10,
		)
	) );

	// Add Setting and Control for header search checkbox.
	$wp_customize->add_setting( 'gt_pure_theme_options[header_search]', array(
		'default'           => $default['header_search'],
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'gt_pure_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gt_pure_theme_options[header_search]', array(
		'label'    => esc_html__( 'Enable search function in header', 'gt-pure' ),
		'section'  => 'gt_pure_section_layout',
		'settings' => 'gt_pure_theme_options[header_search]',
		'type'     => 'checkbox',
		'priority' => 20,
	) );

	// Add Scroll to Top Headline.
	$wp_customize->add_control( new GT_Pure_Customize_Header_Control(
		$wp_customize, 'gt_pure_theme_options[scroll_top_title]', array(
			'label'    => esc_html__( 'Scroll-to-Top Button', 'gt-pure' ),
			'section'  => 'gt_pure_section_layout',
			'settings' => array(),
			'priority' => 30,
		)
	) );

	// Add Setting and Control for scroll to top checkbox.
	$wp_customize->add_setting( 'gt_pure_theme_options[scroll_to_top]', array(
		'default'           => $default['scroll_to_top'],
		'type'              => 'option',
		'transport'         => 'refresh',
		'sanitize_callback' => 'gt_pure_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gt_pure_theme_options[scroll_to_top]', array(
		'label'    => esc_html__( 'Enable Scroll-to-Top Button', 'gt-pure' ),
		'section'  => 'gt_pure_section_layout',
		'settings' => 'gt_pure_theme_options[scroll_to_top]',
		'type'     => 'checkbox',
		'priority' => 40,
	) );
}
add_action( 'customize_register', 'gt_pure_customize_register_layout_settings' );
