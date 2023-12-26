<?php
/**
 * Sample implementation of the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers

 * @package Market
 */

function market_custom_header_setup() {
	add_theme_support( 'custom-header', array(
		'default-image'          => '',
		'default-text-color'     => 'ffffff',
		'width'                  => 1920,
		'height'                 => 1080,
		'flex-height'            => true,
		'wp-head-callback'       => 'market_header_style',
		'admin-head-callback'    => 'market_admin_header_style',
		'admin-preview-callback' => 'market_admin_header_image',
	) ) ;
}
add_action( 'after_setup_theme', 'market_custom_header_setup' );

if ( ! function_exists( 'market_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see market_custom_header_setup().
 */
function market_header_style() {
	
	$header_text_color = get_header_textcolor();

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( 'blank' == $header_text_color ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that
		else :
	?>
		.site-title a,
		.site-description {
			color: #<?php echo $header_text_color; ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // market_header_style

if ( ! function_exists( 'market_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * @see market_custom_header_setup().
 */
function market_admin_header_style() {
?>
	<style type="text/css">
		.appearance_page_custom-header #headimg {
			border: none;
		}
	</style>
<?php
}
endif; // market_admin_header_style

if ( ! function_exists( 'market_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @see market_custom_header_setup().
 */
function market_admin_header_image() {
	$style = sprintf( ' style="color:#%s;"', get_header_textcolor() );
?>
	<div id="headimg">
		<?php if ( get_header_image() ) : ?>
		<img src="<?php header_image(); ?>" alt="">
		<?php endif; ?>
	</div>
<?php
}
endif; // market_admin_header_image
