<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package woo-booster
 * @since 1.0.0
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */

if ( ! function_exists( 'woo_booster_support' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */

	function woo_booster_support() {

		add_editor_style( get_template_directory_uri().'/assets/css/editor.css' );

		load_theme_textdomain( 'woo-booster', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for post thumbnails
		add_theme_support( 'post-thumbnails' );

	}

endif;
add_action( 'after_setup_theme', 'woo_booster_support' );

function woo_booster_styles() {
	wp_enqueue_style(
		'woo-booster-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'woo-booster-font-awesome',
		get_template_directory_uri() . '/assets/css/font-awesome/css/all.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'woo_booster_styles' );


add_action( 'enqueue_block_assets', function (): void {
	wp_enqueue_style( 'dashicons' );
});

function woo_booster_excerpt_length( $length ){ 

	$excerpt_length = 20;
	if ( is_admin() ) return $length;
	return $excerpt_length;
}
add_filter( 'excerpt_length', 'woo_booster_excerpt_length' );

// tgm-plugin
require get_template_directory() . '/inc/tgm-plugin/tgmpa-hook.php';

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
