<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Restaurant Fast Food
 * @subpackage restaurant_fast_food
 */

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function restaurant_fast_food_categorized_blog() {
	$restaurant_fast_food_category_count = get_transient( 'restaurant_fast_food_categories' );

	if ( false === $restaurant_fast_food_category_count ) {
		// Create an array of all the categories that are attached to posts.
		$restaurant_fast_food_categories = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$restaurant_fast_food_category_count = count( $restaurant_fast_food_categories );

		set_transient( 'restaurant_fast_food_categories', $restaurant_fast_food_category_count );
	}

	// Allow viewing case of 0 or 1 categories in post preview.
	if ( is_preview() ) {
		return true;
	}

	return $restaurant_fast_food_category_count > 1;
}

if ( ! function_exists( 'restaurant_fast_food_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since Restaurant Fast Food
 */
function restaurant_fast_food_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

/**
 * Flush out the transients used in restaurant_fast_food_categorized_blog.
 */
function restaurant_fast_food_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'restaurant_fast_food_categories' );
}
add_action( 'edit_category', 'restaurant_fast_food_category_transient_flusher' );
add_action( 'save_post',     'restaurant_fast_food_category_transient_flusher' );
