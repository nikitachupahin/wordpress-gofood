<?php
/**
 * Template for displaying search forms in Restaurant Fast Food
 *
 * @package Restaurant Fast Food
 * @subpackage restaurant_fast_food
 */

?>

<?php $restaurant_fast_food_unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<div class="search-bg">
	<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" id="<?php echo esc_attr( $restaurant_fast_food_unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'restaurant-fast-food' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'restaurant-fast-food' ); ?></button>
	</form>
</div>
