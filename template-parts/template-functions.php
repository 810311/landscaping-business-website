<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Landscaping
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function landscaping_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
		if ( ! is_singular() ) {
			$classes[] = 'hfeed';
			}
		if ( is_page('about')) {
			$classes[] = 'about';
		   }

		if ( is_page('services')) {
			$classes[] = 'services';
		   }
		
		if ( is_page('gallery')) {
			$classes[] = 'gallery';
		   }   

		if ( is_page('contact')) {
			$classes[] = 'contact';
		   } 

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'landscaping_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function landscaping_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'landscaping_pingback_header' );
