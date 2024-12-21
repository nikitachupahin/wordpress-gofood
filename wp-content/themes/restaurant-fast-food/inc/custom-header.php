<?php
/**
 * Custom header implementation
 *
 * @link https://codex.wordpress.org/Custom_Headers
 *
 * @package Restaurant Fast Food
 * @subpackage restaurant_fast_food
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses restaurant_fast_food_header_style()
 */
function restaurant_fast_food_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'restaurant_fast_food_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1400,
		'height'                 => 300,
		'flex-width'    		 => true,
		'flex-height'    		 => true,
		'wp-head-callback'       => 'restaurant_fast_food_header_style',
		'default-image'          => get_parent_theme_file_uri( '/assets/images/header_img.png' ),
	) ) );

	register_default_headers( array(
		'default-image' => array(
			'url'           => '%s/assets/images/header_img.png',
			'thumbnail_url' => '%s/assets/images/header_img.png',
			'description'   => __( 'Default Header Image', 'restaurant-fast-food' ),
		),
	) );
}
add_action( 'after_setup_theme', 'restaurant_fast_food_custom_header_setup' );

if ( ! function_exists( 'restaurant_fast_food_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see restaurant_fast_food_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'restaurant_fast_food_header_style' );
function restaurant_fast_food_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$restaurant_fast_food_custom_css = "
        .header-img{
			background-image:url('".esc_url(get_header_image())."') !important;
			height: 300px;
			display: block;
			background-position: center top;
			background-size: cover !important;
		}";
	   	wp_add_inline_style( 'restaurant-fast-food-style', $restaurant_fast_food_custom_css );
	endif;
}
endif; // restaurant-fast-food-style
