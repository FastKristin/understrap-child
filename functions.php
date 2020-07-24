<?php

/**
 * Custom template tags for this theme.
 */
require get_stylesheet_directory() . '/inc/template-tags-new.php';

/**
 * Custom posts & taxonomies for this theme.
 */
require get_stylesheet_directory() . '/inc/custom-post-tax.php';

function register_menu() {
  register_nav_menus( array(
      'primary' => 'Primary',
      'footer' => 'Footer',
      'custom'  => 'Custom',
  ) );
}
add_action('init', 'register_menu');

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();

    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/style.css', array(), $the_theme->get( 'Version' ), 'all' );

    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );

        wp_enqueue_script( 'custom-scripts', get_stylesheet_directory_uri() . '/js/custom-scripts.js', array(), $the_theme->get( 'Version' ), true );
}

if ( ! function_exists( 'understrap_all_excerpts_get_more_link' ) ) {
	/**
	 * Adds a custom read more link to all excerpts, manually or automatically generated
	 *
	 * @param string $post_excerpt Posts's excerpt.
	 *
	 * @return string
	 */
	function understrap_all_excerpts_get_more_link( $post_excerpt ) {

		return $post_excerpt . ' [...]<p><span class="btn btn-secondary understrap-read-more-link">Read More</span></p>';
	}
}
add_filter( 'wp_trim_excerpt', 'understrap_all_excerpts_get_more_link' );
