<?php
/**
 * The header for our theme
 *
 * @package Restaurant Fast Food
 * @subpackage restaurant_fast_food
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'restaurant-fast-food' ) ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php 
	if ( function_exists( 'wp_body_open' ) ){
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}

	$header_show = 'show';
	if (get_theme_mod( 'restaurant_fast_food_slider_arrows') != '' ) {
		$header_show = 'hide';
	}
?>

<div class="header-img <?php echo esc_attr($header_show); ?>"></div>
<header role="banner">
	<a class="screen-reader-text skip-link" href="#tp_content"><?php esc_html_e( 'Skip to content', 'restaurant-fast-food' ); ?></a>
	<?php
		get_template_part( 'template-parts/header/site', 'branding' );
	?>
</header>
