<?php
/**
 * Theme Info Settings
 *
 * Register Theme Info Settings
 *
 * @package GT Drive
 */

/**
 * Adds all Theme Info settings to the Customizer
 *
 * @param object $wp_customize / Customizer Object.
 */
function gt_drive_customize_register_theme_info_settings( $wp_customize ) {

	// Add Section for Theme Fonts.
	$wp_customize->add_section( 'gt_drive_section_theme_info', array(
		'title'    => esc_html__( 'Theme Info', 'gt-drive' ),
		'priority' => 200,
		'panel'    => 'gt_drive_options_panel',
	) );

	// Add Theme Links control.
	$wp_customize->add_control( new GT_Drive_Customize_Links_Control(
		$wp_customize, 'gt_drive_theme_links', array(
			'section'  => 'gt_drive_section_theme_info',
			'settings' => array(),
			'priority' => 10,
		)
	) );

	// Add GT Local Fonts control.
	if ( ! class_exists( 'GermanThemes_Blocks' ) ) {
		$wp_customize->add_control( new GT_Drive_Customize_Plugin_Control(
			$wp_customize, 'gt_blocks_plugin', array(
				'label'       => esc_html__( 'GT Blocks', 'gt-drive' ),
				'description' => esc_html__( 'Install our free GT Blocks plugin to create a business-styled homepage in the Editor with just a few clicks.', 'gt-drive' ),
				'section'     => 'gt_drive_section_theme_info',
				'settings'    => array(),
				'priority'    => 30,
			)
		) );
	}
}
add_action( 'customize_register', 'gt_drive_customize_register_theme_info_settings' );
