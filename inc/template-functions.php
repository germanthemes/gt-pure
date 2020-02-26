<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package GT Drive
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function gt_drive_body_classes( $classes ) {

	// Get theme options from database.
	$theme_options = gt_drive_theme_options();

	// Hide Site Title?
	if ( false === $theme_options['site_title'] ) {
		$classes[] = 'site-title-hidden';
	}

	// Hide Site Description?
	if ( false === $theme_options['site_description'] ) {
		$classes[] = 'site-description-hidden';
	}

	// Add class if header search is enabled.
	if ( true === $theme_options['header_search'] ) {
		$classes[] = 'header-search-enabled';
	}

	// Add class if header search and main navigation menu is present.
	if ( true === $theme_options['header_search'] && has_nav_menu( 'primary' ) ) {
		$classes[] = 'header-search-and-main-navigation-active';
	}

	// Hide header search in Customizer for instant live preview.
	if ( is_customize_preview() && false === $theme_options['header_search'] ) {
		$classes[] = 'header-search-hidden';
	}

	// Hide Date?
	if ( false === $theme_options['meta_date'] ) {
		$classes[] = 'date-hidden';
	}

	// Hide Author?
	if ( false === $theme_options['meta_author'] ) {
		$classes[] = 'author-hidden';
	}

	// Hide Categories?
	if ( false === $theme_options['meta_categories'] ) {
		$classes[] = 'categories-hidden';
	}

	// Hide Tags?
	if ( false === $theme_options['meta_tags'] ) {
		$classes[] = 'tags-hidden';
	}

	// Add Blog Sidebar class.
	if ( is_active_sidebar( 'sidebar-1' ) && gt_drive_is_blog_page() ) {
		$classes[] = 'has-blog-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'gt_drive_body_classes' );

/**
 * Check if we are on a blog page or single post.
 *
 * @return bool
 */
function gt_drive_is_blog_page() {
	return ( 'post' === get_post_type() ) && ( is_home() || is_archive() || is_single() );
}


/**
 * Add dropdown icon if menu item has children.
 *
 * @param  string $title The menu item's title.
 * @param  object $item  The current menu item.
 * @param  array  $args  An array of wp_nav_menu() arguments.
 * @param  int    $depth Depth of menu item. Used for padding.
 * @return string $title The menu item's title with dropdown icon.
 */
function gt_drive_dropdown_icon_to_menu_link( $title, $item, $args, $depth ) {
	if ( 'primary' === $args->theme_location ) {
		foreach ( $item->classes as $value ) {
			if ( 'menu-item-has-children' === $value || 'page_item_has_children' === $value ) {
				$title = $title . gt_drive_get_svg( 'expand' );
			}
		}
	}

	return $title;
}
add_filter( 'nav_menu_item_title', 'gt_drive_dropdown_icon_to_menu_link', 10, 4 );


/**
 * Return SVG markup.
 *
 * @param string $icon SVG icon id.
 * @return string $svg SVG markup.
 */
function gt_drive_get_svg( $icon = null ) {
	// Return early if no icon was defined.
	if ( empty( $icon ) ) {
		return;
	}

	// Create SVG markup.
	$svg  = '<svg class="icon icon-' . esc_attr( $icon ) . '" aria-hidden="true" role="img">';
	$svg .= ' <use xlink:href="' . get_parent_theme_file_uri( '/assets/icons/genericons-neue.svg#' ) . esc_html( $icon ) . '"></use> ';
	$svg .= '</svg>';

	return $svg;
}
