<?php 

	$lzrestaurant_custom_style = '';

	// Logo Size
	$lzrestaurant_logo_top_padding = get_theme_mod('lzrestaurant_logo_top_padding');
	$lzrestaurant_logo_bottom_padding = get_theme_mod('lzrestaurant_logo_bottom_padding');
	$lzrestaurant_logo_left_padding = get_theme_mod('lzrestaurant_logo_left_padding');
	$lzrestaurant_logo_right_padding = get_theme_mod('lzrestaurant_logo_right_padding');

	if( $lzrestaurant_logo_top_padding != '' || $lzrestaurant_logo_bottom_padding != '' || $lzrestaurant_logo_left_padding != '' || $lzrestaurant_logo_right_padding != ''){
		$lzrestaurant_custom_style .=' .logo {';
			$lzrestaurant_custom_style .=' padding-top: '.esc_attr($lzrestaurant_logo_top_padding).'px; padding-bottom: '.esc_attr($lzrestaurant_logo_bottom_padding).'px; padding-left: '.esc_attr($lzrestaurant_logo_left_padding).'px; padding-right: '.esc_attr($lzrestaurant_logo_right_padding).'px;';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_logo_size = get_theme_mod('lzrestaurant_logo_size');
	if( $lzrestaurant_logo_size != '') {
		if($lzrestaurant_logo_size == 100) {
			$lzrestaurant_custom_style .=' .custom-logo-link img {';
				$lzrestaurant_custom_style .=' width: 350px;';
			$lzrestaurant_custom_style .=' }';
		} else if($lzrestaurant_logo_size >= 10 && $lzrestaurant_logo_size < 100) {
			$lzrestaurant_custom_style .=' .custom-logo-link img {';
				$lzrestaurant_custom_style .=' width: '.esc_attr($lzrestaurant_logo_size).'%;';
			$lzrestaurant_custom_style .=' }';
		}
	}

	// Header Animations
	$lzrestaurant_dropdown_anim = get_theme_mod('lzrestaurant_dropdown_anim');

	if ( $lzrestaurant_dropdown_anim != '') {
		$lzrestaurant_custom_style .=' .nav-menu ul ul {';
			$lzrestaurant_custom_style .=' animation-name:'.esc_attr($lzrestaurant_dropdown_anim).';';
		$lzrestaurant_custom_style .=' }';
	}

	//Slider color
	$lzrestaurant_slider_effect = get_theme_mod('lzrestaurant_slider_effect');

	if ( $lzrestaurant_slider_effect != '') {
		$lzrestaurant_custom_style .=' #slider .carousel-caption {';
			$lzrestaurant_custom_style .=' animation-name:'.esc_attr($lzrestaurant_slider_effect).';';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_slider_title_font_size = get_theme_mod('lzrestaurant_slider_title_font_size');

	if ( $lzrestaurant_slider_title_font_size != '') {
		$lzrestaurant_custom_style .=' #slider .carousel-caption h1 {';
			$lzrestaurant_custom_style .=' font-size:'.esc_attr($lzrestaurant_slider_title_font_size).'px;';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_slider_text_font_size = get_theme_mod('lzrestaurant_slider_text_font_size');

	if ( $lzrestaurant_slider_text_font_size != '') {
		$lzrestaurant_custom_style .=' #slider .carousel-caption p {';
			$lzrestaurant_custom_style .=' font-size:'.esc_attr($lzrestaurant_slider_text_font_size).'px;';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_slider_color = get_theme_mod('lzrestaurant_slider_color');

	if ( $lzrestaurant_slider_color != '') {
		$lzrestaurant_custom_style .=' #slider .inner_carousel h1 {';
			$lzrestaurant_custom_style .=' color:'.esc_attr($lzrestaurant_slider_color).';';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_slidertext_color = get_theme_mod('lzrestaurant_slidertext_color');

	if ( $lzrestaurant_slidertext_color != '') {
		$lzrestaurant_custom_style .=' #slider .inner_carousel p {';
			$lzrestaurant_custom_style .=' color:'.esc_attr($lzrestaurant_slidertext_color).';';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_sliderbtn_color = get_theme_mod('lzrestaurant_sliderbtn_color');
	$lzrestaurant_sliderbtnbg_color = get_theme_mod('lzrestaurant_sliderbtnbg_color');

	if ( $lzrestaurant_sliderbtn_color != '') {
		$lzrestaurant_custom_style .=' #slider .read-btn a.blogbutton-small, p.form-submit input, #slider i {';
			$lzrestaurant_custom_style .=' color:'.esc_attr($lzrestaurant_sliderbtn_color).'; background-color:'.esc_attr($lzrestaurant_sliderbtnbg_color).';';
		$lzrestaurant_custom_style .=' }';
	}

	//social icons color
	$lzrestaurant_tumblr_color = get_theme_mod('lzrestaurant_tumblr_color');

	if ( $lzrestaurant_tumblr_color != '') {
		$lzrestaurant_custom_style .=' .socialbox i {';
			$lzrestaurant_custom_style .=' color:'.esc_attr($lzrestaurant_tumblr_color).';';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_tumblrbg_color = get_theme_mod('lzrestaurant_tumblrbg_color');

	if ( $lzrestaurant_tumblrbg_color != '') {
		$lzrestaurant_custom_style .=' .socialbox i {';
			$lzrestaurant_custom_style .=' background-color:'.esc_attr($lzrestaurant_tumblrbg_color).';';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_menu_color = get_theme_mod('lzrestaurant_menu_color');

	if ( $lzrestaurant_menu_color != '') {
		$lzrestaurant_custom_style .=' .nav-menu ul li a {';
			$lzrestaurant_custom_style .=' color:'.esc_attr($lzrestaurant_menu_color).';';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_menuhvr_color = get_theme_mod('lzrestaurant_menuhvr_color');

	if ( $lzrestaurant_menuhvr_color != '') {
		$lzrestaurant_custom_style .=' .nav-menu ul li a:hover {';
			$lzrestaurant_custom_style .=' color:'.esc_attr($lzrestaurant_menuhvr_color).';';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_menubg_color = get_theme_mod('lzrestaurant_menubg_color');

	if ( $lzrestaurant_menubg_color != '') {
		$lzrestaurant_custom_style .=' .page-template-custom-home-page .main-top {';
			$lzrestaurant_custom_style .=' background-color:'.esc_attr($lzrestaurant_menubg_color).';';
		$lzrestaurant_custom_style .=' }';
	}

	// service section padding
	$lzrestaurant_feature_short_title_font_size = get_theme_mod('lzrestaurant_feature_short_title_font_size');

	if ( $lzrestaurant_feature_short_title_font_size != '') {
		$lzrestaurant_custom_style .=' #feature-pro p {';
			$lzrestaurant_custom_style .=' font-size:'.esc_attr($lzrestaurant_feature_short_title_font_size).'px;';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_feature_title_font_size = get_theme_mod('lzrestaurant_feature_title_font_size');

	if ( $lzrestaurant_feature_title_font_size != '') {
		$lzrestaurant_custom_style .=' #feature-pro strong {';
			$lzrestaurant_custom_style .=' font-size:'.esc_attr($lzrestaurant_feature_title_font_size).'px;';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_products_section_padding = get_theme_mod('lzrestaurant_products_section_padding');

	if( $lzrestaurant_products_section_padding != ''){
		$lzrestaurant_custom_style .=' #feature-pro {';
			$lzrestaurant_custom_style .=' padding-top: '.esc_attr($lzrestaurant_products_section_padding).'px; padding-bottom: '.esc_attr($lzrestaurant_products_section_padding).'px;';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_product_title_font_size = get_theme_mod('lzrestaurant_product_title_font_size');

	if ( $lzrestaurant_product_title_font_size != '') {
		$lzrestaurant_custom_style .=' #feature-pro .wc-block-components-product-name {';
			$lzrestaurant_custom_style .=' font-size:'.esc_attr($lzrestaurant_product_title_font_size).'px !important;';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_product_img_hight = get_theme_mod('lzrestaurant_product_img_hight');

	if ( $lzrestaurant_product_img_hight != '') {
		$lzrestaurant_custom_style .=' #feature-pro .wc-block-grid__products .wc-block-grid__product-image img {';
			$lzrestaurant_custom_style .=' height:'.esc_attr($lzrestaurant_product_img_hight).'px;';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_products_srttitle_color = get_theme_mod('lzrestaurant_products_srttitle_color');

	if ( $lzrestaurant_products_srttitle_color != '') {
		$lzrestaurant_custom_style .=' #feature-pro p {';
			$lzrestaurant_custom_style .=' color:'.esc_attr($lzrestaurant_products_srttitle_color).';';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_products_title_color = get_theme_mod('lzrestaurant_products_title_color');

	if ( $lzrestaurant_products_title_color != '') {
		$lzrestaurant_custom_style .=' #feature-pro strong {';
			$lzrestaurant_custom_style .=' color:'.esc_attr($lzrestaurant_products_title_color).';';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_products_text_color = get_theme_mod('lzrestaurant_products_text_color');

	if ( $lzrestaurant_products_text_color != '') {
		$lzrestaurant_custom_style .=' #feature-pro .box-image p {';
			$lzrestaurant_custom_style .=' color:'.esc_attr($lzrestaurant_products_text_color).';';
		$lzrestaurant_custom_style .=' }';
	}

	// Site Title Font Size
	$lzrestaurant_site_title_font_size = get_theme_mod('lzrestaurant_site_title_font_size');
	if( $lzrestaurant_site_title_font_size != ''){
		$lzrestaurant_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$lzrestaurant_custom_style .=' font-size: '.esc_attr($lzrestaurant_site_title_font_size).'px;';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_site_title_color = get_theme_mod('lzrestaurant_site_title_color');
	if ( $lzrestaurant_site_title_color != '') {
		$lzrestaurant_custom_style .=' .logo h1 a, .logo p.site-title a {';
			$lzrestaurant_custom_style .=' color:'.esc_attr($lzrestaurant_site_title_color).';';
		$lzrestaurant_custom_style .=' }';
	}

	// Site Tagline Font Size
	$lzrestaurant_site_tagline_font_size = get_theme_mod('lzrestaurant_site_tagline_font_size');
	if( $lzrestaurant_site_tagline_font_size != ''){
		$lzrestaurant_custom_style .=' .logo p.site-description {';
			$lzrestaurant_custom_style .=' font-size: '.esc_attr($lzrestaurant_site_tagline_font_size).'px;';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_site_tagline_color = get_theme_mod('lzrestaurant_site_tagline_color');
	if ( $lzrestaurant_site_tagline_color != '') {
		$lzrestaurant_custom_style .=' .logo p.site-description {';
			$lzrestaurant_custom_style .=' color:'.esc_attr($lzrestaurant_site_tagline_color).';';
		$lzrestaurant_custom_style .=' }';
	}

	// Copyright padding
	$lzrestaurant_copyright_padding = get_theme_mod('lzrestaurant_copyright_padding');

	if( $lzrestaurant_copyright_padding != ''){
		$lzrestaurant_custom_style .=' .site-info {';
			$lzrestaurant_custom_style .=' padding-top: '.esc_attr($lzrestaurant_copyright_padding).'px; padding-bottom: '.esc_attr($lzrestaurant_copyright_padding).'px;';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_copyright_font_size = get_theme_mod('lzrestaurant_copyright_font_size');

	if ( $lzrestaurant_copyright_font_size != '') {
		$lzrestaurant_custom_style .=' .site-info p a{';
			$lzrestaurant_custom_style .=' font-size:'.esc_attr($lzrestaurant_copyright_font_size).'px !important;';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_slider_hide_show = get_theme_mod('lzrestaurant_slider_hide_show',false);
	if( $lzrestaurant_slider_hide_show == true){
		$lzrestaurant_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$lzrestaurant_custom_style .=' display:none;';
		$lzrestaurant_custom_style .=' }';
	} else {
		$lzrestaurant_custom_style .=' .page-template-custom-home-page .main-top {';
			$lzrestaurant_custom_style .=' position:static; background: #000;';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_copyright_color = get_theme_mod('lzrestaurant_copyright_color');

	if ( $lzrestaurant_copyright_color != '') {
		$lzrestaurant_custom_style .=' .site-info p a{';
			$lzrestaurant_custom_style .=' color:'.esc_attr($lzrestaurant_copyright_color).';';
		$lzrestaurant_custom_style .=' }';
	}

	$lzrestaurant_copyrightbg_color = get_theme_mod('lzrestaurant_copyrightbg_color');

	if ( $lzrestaurant_copyrightbg_color != '') {
		$lzrestaurant_custom_style .=' .copyright{';
			$lzrestaurant_custom_style .=' background-color:'.esc_attr($lzrestaurant_copyrightbg_color).';';
		$lzrestaurant_custom_style .=' }';
	}