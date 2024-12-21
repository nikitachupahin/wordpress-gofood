<?php

$restaurant_fast_food_tp_theme_css = '';

	$restaurant_fast_food_theme_lay = get_theme_mod( 'restaurant_fast_food_tp_body_layout_settings','Full');
    if($restaurant_fast_food_theme_lay == 'Container'){
		$restaurant_fast_food_tp_theme_css .='body{';
			$restaurant_fast_food_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$restaurant_fast_food_tp_theme_css .='}';
		$restaurant_fast_food_tp_theme_css .='.scrolled{';
			$restaurant_fast_food_tp_theme_css .='width: auto; left:0; right:0;';
		$restaurant_fast_food_tp_theme_css .='}';
		$restaurant_fast_food_tp_theme_css .='@media screen and (max-width:575px){';
		$restaurant_fast_food_tp_theme_css .='body{';
			$restaurant_fast_food_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left:0px';
		$restaurant_fast_food_tp_theme_css .='} }';
	}else if($restaurant_fast_food_theme_lay == 'Container Fluid'){
		$restaurant_fast_food_tp_theme_css .='body{';
			$restaurant_fast_food_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$restaurant_fast_food_tp_theme_css .='}';
		$restaurant_fast_food_tp_theme_css .='@media screen and (max-width:575px){';
		$restaurant_fast_food_tp_theme_css .='body{';
			$restaurant_fast_food_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left:0px';
		$restaurant_fast_food_tp_theme_css .='} }';
		$restaurant_fast_food_tp_theme_css .='.scrolled{';
			$restaurant_fast_food_tp_theme_css .='width: auto; left:0; right:0;';
		$restaurant_fast_food_tp_theme_css .='}';
	}else if($restaurant_fast_food_theme_lay == 'Full'){
		$restaurant_fast_food_tp_theme_css .='body{';
			$restaurant_fast_food_tp_theme_css .='max-width: 100%;';
		$restaurant_fast_food_tp_theme_css .='}';
	}

	$restaurant_fast_food_scroll_position = get_theme_mod( 'restaurant_fast_food_scroll_top_position','Right');
	if($restaurant_fast_food_scroll_position == 'Right'){
		$restaurant_fast_food_tp_theme_css .='#return-to-top{';
			$restaurant_fast_food_tp_theme_css .='right: 20px;';
		$restaurant_fast_food_tp_theme_css .='}';
	}else if($restaurant_fast_food_scroll_position == 'Left'){
		$restaurant_fast_food_tp_theme_css .='#return-to-top{';
			$restaurant_fast_food_tp_theme_css .='left: 20px;';
		$restaurant_fast_food_tp_theme_css .='}';
	}else if($restaurant_fast_food_scroll_position == 'Center'){
		$restaurant_fast_food_tp_theme_css .='#return-to-top{';
			$restaurant_fast_food_tp_theme_css .='right: 50%;left: 50%;';
		$restaurant_fast_food_tp_theme_css .='}';
	}

	// site title and tagline font size option
	$restaurant_fast_food_site_title_font_size = get_theme_mod('restaurant_fast_food_site_title_font_size', 30);{
	$restaurant_fast_food_tp_theme_css .='.logo h1 a, .logo p a{';
	$restaurant_fast_food_tp_theme_css .='font-size: '.esc_attr($restaurant_fast_food_site_title_font_size).'px;';
		$restaurant_fast_food_tp_theme_css .='}';
	}

	$restaurant_fast_food_site_tagline_font_size = get_theme_mod('restaurant_fast_food_site_tagline_font_size', 15);{
	$restaurant_fast_food_tp_theme_css .='.logo p{';
	$restaurant_fast_food_tp_theme_css .='font-size: '.esc_attr($restaurant_fast_food_site_tagline_font_size).'px;';
		$restaurant_fast_food_tp_theme_css .='}';
	}

	// related post
	$restaurant_fast_food_related_post_mob = get_theme_mod('restaurant_fast_food_related_post_mob', true);
	$restaurant_fast_food_related_post = get_theme_mod('restaurant_fast_food_remove_related_post', true);
	$restaurant_fast_food_tp_theme_css .= '.related-post-block {';
	if ($restaurant_fast_food_related_post == false) {
	    $restaurant_fast_food_tp_theme_css .= 'display: none;';
	}
	$restaurant_fast_food_tp_theme_css .= '}';
	$restaurant_fast_food_tp_theme_css .= '@media screen and (max-width: 575px) {';
	if ($restaurant_fast_food_related_post == false || $restaurant_fast_food_related_post_mob == false) {
	    $restaurant_fast_food_tp_theme_css .= '.related-post-block { display: none; }';
	}
	$restaurant_fast_food_tp_theme_css .= '}';

	//return to header mobile				
	$restaurant_fast_food_return_to_header_mob = get_theme_mod('restaurant_fast_food_return_to_header_mob', true);
	$restaurant_fast_food_return_to_header = get_theme_mod('restaurant_fast_food_return_to_header', true);
	$restaurant_fast_food_tp_theme_css .= '.return-to-header{';
	if ($restaurant_fast_food_return_to_header == false) {
	    $restaurant_fast_food_tp_theme_css .= 'display: none;';
	}
	$restaurant_fast_food_tp_theme_css .= '}';
	$restaurant_fast_food_tp_theme_css .= '@media screen and (max-width: 575px) {';
	if ($restaurant_fast_food_return_to_header == false || $restaurant_fast_food_return_to_header_mob == false) {
	    $restaurant_fast_food_tp_theme_css .= '.return-to-header{ display: none; }';
	}
	$restaurant_fast_food_tp_theme_css .= '}';


$restaurant_fast_food_footer_widget_image = get_theme_mod('restaurant_fast_food_footer_widget_image');
	if($restaurant_fast_food_footer_widget_image != false){
		$restaurant_fast_food_tp_theme_css .='#footer{';
			$restaurant_fast_food_tp_theme_css .='background: url('.esc_attr($restaurant_fast_food_footer_widget_image).');';
		$restaurant_fast_food_tp_theme_css .='}';
	}

	$restaurant_fast_food_related_product = get_theme_mod('restaurant_fast_food_related_product',true);
		if($restaurant_fast_food_related_product == false){
			$restaurant_fast_food_tp_theme_css .='.related.products{';
				$restaurant_fast_food_tp_theme_css .='display: none;';
			$restaurant_fast_food_tp_theme_css .='}';
		}

//menu font size
$restaurant_fast_food_menu_font_size = get_theme_mod('restaurant_fast_food_menu_font_size', '');{
$restaurant_fast_food_tp_theme_css .='.main-navigation a, .main-navigation li.page_item_has_children:after,.main-navigation li.menu-item-has-children:after{';
	$restaurant_fast_food_tp_theme_css .='font-size: '.esc_attr($restaurant_fast_food_menu_font_size).'px;';
$restaurant_fast_food_tp_theme_css .='}';
}

// menu text transform
$restaurant_fast_food_menu_text_tranform = get_theme_mod( 'restaurant_fast_food_menu_text_tranform','Capitalize');
if($restaurant_fast_food_menu_text_tranform == 'Uppercase'){
$restaurant_fast_food_tp_theme_css .='.main-navigation a {';
	$restaurant_fast_food_tp_theme_css .='text-transform: uppercase;';
$restaurant_fast_food_tp_theme_css .='}';
}else if($restaurant_fast_food_menu_text_tranform == 'Lowercase'){
$restaurant_fast_food_tp_theme_css .='.main-navigation a {';
	$restaurant_fast_food_tp_theme_css .='text-transform: lowercase;';
$restaurant_fast_food_tp_theme_css .='}';
}
else if($restaurant_fast_food_menu_text_tranform == 'Capitalize'){
$restaurant_fast_food_tp_theme_css .='.main-navigation a {';
	$restaurant_fast_food_tp_theme_css .='text-transform: capitalize;';
$restaurant_fast_food_tp_theme_css .='}';
}
//======================= slider Content layout ===================== //

$restaurant_fast_food_slider_content_layout = get_theme_mod('restaurant_fast_food_slider_content_layout', 'LEFT-ALIGN'); 
$restaurant_fast_food_tp_theme_css .= '#slider .inner_content{';
switch ($restaurant_fast_food_slider_content_layout) {
    case 'LEFT-ALIGN':
        $restaurant_fast_food_tp_theme_css .= 'text-align:left; right: 53%; left: 20%;';
        break;
    case 'CENTER-ALIGN':
        $restaurant_fast_food_tp_theme_css .= 'text-align:center; left: 20%; right: 53%;';
        break;
    case 'RIGHT-ALIGN':
        $restaurant_fast_food_tp_theme_css .= 'text-align:right; left: 20%; right: 53%;';
        break;
    default:
        $restaurant_fast_food_tp_theme_css .= 'text-align:left; right: 53%; left: 20%;';
        break;
}
$restaurant_fast_food_tp_theme_css .= '}';


//sale position
$restaurant_fast_food_scroll_position = get_theme_mod( 'restaurant_fast_food_sale_tag_position','right');
if($restaurant_fast_food_scroll_position == 'right'){
$restaurant_fast_food_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $restaurant_fast_food_tp_theme_css .='right: 25px !important;';
$restaurant_fast_food_tp_theme_css .='}';
}else if($restaurant_fast_food_scroll_position == 'left'){
$restaurant_fast_food_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $restaurant_fast_food_tp_theme_css .='left: 25px !important;';
$restaurant_fast_food_tp_theme_css .='}';
}

/*------------- Blog Page------------------*/
	$restaurant_fast_food_post_image_round = get_theme_mod('restaurant_fast_food_post_image_round', 0);
	if($restaurant_fast_food_post_image_round != false){
		$restaurant_fast_food_tp_theme_css .='.blog .box-image img{';
			$restaurant_fast_food_tp_theme_css .='border-radius: '.esc_attr($restaurant_fast_food_post_image_round).'px;';
		$restaurant_fast_food_tp_theme_css .='}';
	}

	$restaurant_fast_food_post_image_width = get_theme_mod('restaurant_fast_food_post_image_width', '');
	if($restaurant_fast_food_post_image_width != false){
		$restaurant_fast_food_tp_theme_css .='.blog .box-image img{';
			$restaurant_fast_food_tp_theme_css .='Width: '.esc_attr($restaurant_fast_food_post_image_width).'px;';
		$restaurant_fast_food_tp_theme_css .='}';
	}

	$restaurant_fast_food_post_image_length = get_theme_mod('restaurant_fast_food_post_image_length', '');
	if($restaurant_fast_food_post_image_length != false){
		$restaurant_fast_food_tp_theme_css .='.blog .box-image img{';
			$restaurant_fast_food_tp_theme_css .='height: '.esc_attr($restaurant_fast_food_post_image_length).'px;';
		$restaurant_fast_food_tp_theme_css .='}';
	}
