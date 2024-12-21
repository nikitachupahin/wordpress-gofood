<?php
/**
 * Template Name: Custom Home Page
 *
 * @package Restaurant Fast Food
 * @subpackage restaurant_fast_food
 */

 ?>

<main id="tp_content" role="main">
	<?php do_action( 'restaurant_fast_food_before_slider' ); ?>

	<?php get_template_part( 'template-parts/home/slider' ); ?>
	<?php do_action( 'restaurant_fast_food_after_slider' ); ?>

	<?php get_header(); ?>

	<?php get_template_part( 'template-parts/home/category' ); ?>
	<?php do_action( 'restaurant_fast_food_after_category' ); ?>

	<?php get_template_part( 'template-parts/home/home-content' ); ?>
	<?php do_action( 'restaurant_fast_food_after_home_content' ); ?>
</main>

<?php get_footer();