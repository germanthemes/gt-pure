<?php
/**
 * Returns theme options
 *
 * Uses sane defaults in case the user has not configured any theme options yet.
 *
 * @package GT Pure
 */

/**
* Get a single theme option
*
* @return mixed
*/
function gt_pure_get_option( $option_name = '' ) {

	// Get all Theme Options from Database.
	$theme_options = gt_pure_theme_options();

	// Return single option.
	if ( isset( $theme_options[ $option_name ] ) ) {
		return $theme_options[ $option_name ];
	}

	return false;
}


/**
 * Get saved user settings from database or theme defaults
 *
 * @return array
 */
function gt_pure_theme_options() {

	// Merge theme options array from database with default options array.
	$theme_options = wp_parse_args( get_option( 'gt_pure_theme_options', array() ), gt_pure_default_options() );

	// Return theme options.
	return apply_filters( 'gt_pure_theme_options', $theme_options );
}


/**
 * Returns the default settings of the theme
 *
 * @return array
 */
function gt_pure_default_options() {

	$default_options = array(
		'retina_logo'        => false,
		'site_title'         => true,
		'site_description'   => true,
		'header_search'      => false,
		'scroll_to_top'      => false,
		'meta_date'          => true,
		'meta_author'        => true,
		'meta_categories'    => true,
		'meta_tags'          => false,
		'primary_color'      => '#003344',
		'secondary_color'    => '#268f97',
		'accent_color'       => '#c9493b',
		'highlight_color'    => '#f9d26e',
		'light_gray_color'   => '#e4e4e4',
		'gray_color'         => '#848484',
		'dark_gray_color'    => '#242424',
		'link_color'         => '#268f97',
		'link_hover_color'   => '#003344',
		'header_color'       => '#003344',
		'title_color'        => '#003344',
		'title_hover_color'  => '#268f97',
		'footer_color'       => '#003344',
		'text_font'          => 'SystemFontStack',
		'title_font'         => 'SystemFontStack',
		'title_is_bold'      => true,
		'title_is_uppercase' => false,
		'navi_font'          => 'SystemFontStack',
		'navi_is_bold'       => false,
		'navi_is_uppercase'  => false,
		'license_key'        => '',
		'license_status'     => 'inactive',
	);

	return apply_filters( 'gt_pure_default_options', $default_options );
}
