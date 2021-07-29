<?php


if ( ! function_exists( 'skatepark_support' ) ) :
	function skatepark_support() {

		// Enqueue editor styles.
		add_editor_style(
			array(
				'/assets/theme.css',
			)
		);

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 35,
				'width'       => 150,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'skatepark' ),
				'secondary' => __( 'Secondary Navigation', 'skatepark' ),
			)
		);

		remove_theme_support( 'block-templates' );
	}
	add_action( 'after_setup_theme', 'skatepark_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function skatepark_scripts() {
	// Enqueue front-end styles.
	wp_enqueue_style( 'skatepark-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array( 'blockbase-ponyfill' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'skatepark_scripts' );

/**
 * Block Patterns.
 */
require get_stylesheet_directory() . '/inc/block-patterns.php';
