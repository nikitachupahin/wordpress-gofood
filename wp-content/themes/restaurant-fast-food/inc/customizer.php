<?php
/**
 * Restaurant Fast Food: Customizer
 *
 * @package Restaurant Fast Food
 * @subpackage restaurant_fast_food
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function restaurant_fast_food_customize_register( $wp_customize ) {

	require get_parent_theme_file_path('/inc/controls/range-slider-control.php');

	// Register the custom control type.
	$wp_customize->register_control_type( 'Restaurant_Fast_Food_Toggle_Control' );

	//Register the sortable control type.
	$wp_customize->register_control_type( 'Restaurant_Fast_Food_Control_Sortable' );

	//add home page setting pannel
	$wp_customize->add_panel( 'restaurant_fast_food_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Custom Home page', 'restaurant-fast-food' ),
	    'description' => __( 'Description of what this panel does.', 'restaurant-fast-food' ),
	) );

	//TP General Option
	$wp_customize->add_section('restaurant_fast_food_tp_general_settings',array(
        'title' => __('TP General Option', 'restaurant-fast-food'),
        'panel' => 'restaurant_fast_food_panel_id',
        'priority' => 1,
    ) );

    $wp_customize->add_setting('restaurant_fast_food_tp_body_layout_settings',array(
        'default' => 'Full',
        'sanitize_callback' => 'restaurant_fast_food_sanitize_choices'
	));
    $wp_customize->add_control('restaurant_fast_food_tp_body_layout_settings',array(
        'type' => 'radio',
        'label'     => __('Body Layout Setting', 'restaurant-fast-food'),
        'description'   => __('This option work for complete body, if you want to set the complete website in container.', 'restaurant-fast-food'),
        'section' => 'restaurant_fast_food_tp_general_settings',
        'choices' => array(
            'Full' => __('Full','restaurant-fast-food'),
            'Container' => __('Container','restaurant-fast-food'),
            'Container Fluid' => __('Container Fluid','restaurant-fast-food')
        ),
	) );

    // Add Settings and Controls for Post Layout
	$wp_customize->add_setting('restaurant_fast_food_sidebar_post_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'restaurant_fast_food_sanitize_choices'
	));
	$wp_customize->add_control('restaurant_fast_food_sidebar_post_layout',array(
        'type' => 'radio',
        'label'     => __('Post Sidebar Position', 'restaurant-fast-food'),
        'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'restaurant-fast-food'),
        'section' => 'restaurant_fast_food_tp_general_settings',
        'choices' => array(
            'full' => __('Full','restaurant-fast-food'),
            'left' => __('Left','restaurant-fast-food'),
            'right' => __('Right','restaurant-fast-food'),
            'three-column' => __('Three Columns','restaurant-fast-food'),
            'four-column' => __('Four Columns','restaurant-fast-food'),
            'grid' => __('Grid Layout','restaurant-fast-food')
        ),
	) );
	// Add Settings and Controls for Post sidebar Layout
	$wp_customize->add_setting('restaurant_fast_food_sidebar_single_post_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'restaurant_fast_food_sanitize_choices'
	));
	$wp_customize->add_control('restaurant_fast_food_sidebar_single_post_layout',array(
        'type' => 'radio',
        'label'     => __('Single Post Sidebar Position', 'restaurant-fast-food'),
        'description'   => __('This option work for single blog page', 'restaurant-fast-food'),
        'section' => 'restaurant_fast_food_tp_general_settings',
        'choices' => array(
            'full' => __('Full','restaurant-fast-food'),
            'left' => __('Left','restaurant-fast-food'),
            'right' => __('Right','restaurant-fast-food'),
        ),
	) );

	// Add Settings and Controls for Page Layout
	$wp_customize->add_setting('restaurant_fast_food_sidebar_page_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'restaurant_fast_food_sanitize_choices'
	));
	$wp_customize->add_control('restaurant_fast_food_sidebar_page_layout',array(
        'type' => 'radio',
        'label'     => __('Page Sidebar Position', 'restaurant-fast-food'),
        'description'   => __('This option work for pages.', 'restaurant-fast-food'),
        'section' => 'restaurant_fast_food_tp_general_settings',
        'choices' => array(
            'full' => __('Full','restaurant-fast-food'),
            'left' => __('Left','restaurant-fast-food'),
            'right' => __('Right','restaurant-fast-food')
        ),
	) );

	//tp typography option
	$restaurant_fast_food_font_array = array(
		''                       => 'No Fonts',
		'Abril Fatface'          => 'Abril Fatface',
		'Acme'                   => 'Acme',
		'Anton'                  => 'Anton',
		'Architects Daughter'    => 'Architects Daughter',
		'Arimo'                  => 'Arimo',
		'Arsenal'                => 'Arsenal',
		'Arvo'                   => 'Arvo',
		'Alegreya'               => 'Alegreya',
		'Alfa Slab One'          => 'Alfa Slab One',
		'Averia Serif Libre'     => 'Averia Serif Libre',
		'Bangers'                => 'Bangers',
		'Boogaloo'               => 'Boogaloo',
		'Bad Script'             => 'Bad Script',
		'Bitter'                 => 'Bitter',
		'Bree Serif'             => 'Bree Serif',
		'BenchNine'              => 'BenchNine',
		'Cabin'                  => 'Cabin',
		'Cardo'                  => 'Cardo',
		'Courgette'              => 'Courgette',
		'Cherry Swash'           => 'Cherry Swash',
		'Cormorant Garamond'     => 'Cormorant Garamond',
		'Crimson Text'           => 'Crimson Text',
		'Cuprum'                 => 'Cuprum',
		'Cookie'                 => 'Cookie',
		'Chewy'                  => 'Chewy',
		'Days One'               => 'Days One',
		'Dosis'                  => 'Dosis',
		'Droid Sans'             => 'Droid Sans',
		'Economica'              => 'Economica',
		'Fredoka One'            => 'Fredoka One',
		'Fjalla One'             => 'Fjalla One',
		'Francois One'           => 'Francois One',
		'Frank Ruhl Libre'       => 'Frank Ruhl Libre',
		'Gloria Hallelujah'      => 'Gloria Hallelujah',
		'Great Vibes'            => 'Great Vibes',
		'Handlee'                => 'Handlee',
		'Hammersmith One'        => 'Hammersmith One',
		'Inconsolata'            => 'Inconsolata',
		'Indie Flower'           => 'Indie Flower',
		'IM Fell English SC'     => 'IM Fell English SC',
		'Julius Sans One'        => 'Julius Sans One',
		'Josefin Slab'           => 'Josefin Slab',
		'Josefin Sans'           => 'Josefin Sans',
		'Kanit'                  => 'Kanit',
		'Lobster'                => 'Lobster',
		'Lato'                   => 'Lato',
		'Lora'                   => 'Lora',
		'Libre Baskerville'      => 'Libre Baskerville',
		'Lobster Two'            => 'Lobster Two',
		'Merriweather'           => 'Merriweather',
		'Monda'                  => 'Monda',
		'Montserrat'             => 'Montserrat',
		'Muli'                   => 'Muli',
		'Marck Script'           => 'Marck Script',
		'Noto Serif'             => 'Noto Serif',
		'Open Sans'              => 'Open Sans',
		'Overpass'               => 'Overpass',
		'Overpass Mono'          => 'Overpass Mono',
		'Oxygen'                 => 'Oxygen',
		'Orbitron'               => 'Orbitron',
		'Patua One'              => 'Patua One',
		'Pacifico'               => 'Pacifico',
		'Padauk'                 => 'Padauk',
		'Playball'               => 'Playball',
		'Playfair Display'       => 'Playfair Display',
		'PT Sans'                => 'PT Sans',
		'Philosopher'            => 'Philosopher',
		'Permanent Marker'       => 'Permanent Marker',
		'Poiret One'             => 'Poiret One',
		'Quicksand'              => 'Quicksand',
		'Quattrocento Sans'      => 'Quattrocento Sans',
		'Raleway'                => 'Raleway',
		'Rubik'                  => 'Rubik',
		'Rokkitt'                => 'Rokkitt',
		'Russo One'              => 'Russo One',
		'Righteous'              => 'Righteous',
		'Slabo'                  => 'Slabo',
		'Source Sans Pro'        => 'Source Sans Pro',
		'Shadows Into Light Two' => 'Shadows Into Light Two',
		'Shadows Into Light'     => 'Shadows Into Light',
		'Sacramento'             => 'Sacramento',
		'Shrikhand'              => 'Shrikhand',
		'Tangerine'              => 'Tangerine',
		'Ubuntu'                 => 'Ubuntu',
		'VT323'                  => 'VT323',
		'Varela Round'           => 'Varela Round',
		'Vampiro One'            => 'Vampiro One',
		'Vollkorn'               => 'Vollkorn',
		'Volkhov'                => 'Volkhov',
		'Yanone Kaffeesatz'      => 'Yanone Kaffeesatz'
	);

	$wp_customize->add_section('restaurant_fast_food_typography_option',array(
		'title'         => __('TP Typography Option', 'restaurant-fast-food'),
		'priority' => 1,
		'panel' => 'restaurant_fast_food_panel_id'
   	));

   	$wp_customize->add_setting('restaurant_fast_food_heading_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'restaurant_fast_food_sanitize_choices',
	));
	$wp_customize->add_control(	'restaurant_fast_food_heading_font_family', array(
		'section' => 'restaurant_fast_food_typography_option',
		'label'   => __('heading Fonts', 'restaurant-fast-food'),
		'type'    => 'select',
		'choices' => $restaurant_fast_food_font_array,
	));

	$wp_customize->add_setting('restaurant_fast_food_body_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'restaurant_fast_food_sanitize_choices',
	));
	$wp_customize->add_control(	'restaurant_fast_food_body_font_family', array(
		'section' => 'restaurant_fast_food_typography_option',
		'label'   => __('Body Fonts', 'restaurant-fast-food'),
		'type'    => 'select',
		'choices' => $restaurant_fast_food_font_array,
	));
	
	//TP Color Option
	$wp_customize->add_section('restaurant_fast_food_color_option',array(
     'title'         => __('TP Color Option', 'restaurant-fast-food'),
     'panel' => 'restaurant_fast_food_panel_id',
     'priority' => 1,
    ) );
	$wp_customize->add_setting( 'restaurant_fast_food_tp_color_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'restaurant_fast_food_tp_color_option', array(
			'label'     => __('Themem first Color', 'restaurant-fast-food'),
	    'description' => __('It will change the complete theme color in one click.', 'restaurant-fast-food'),
	    'section' => 'restaurant_fast_food_color_option',
	    'settings' => 'restaurant_fast_food_tp_color_option',
  	)));
  	$wp_customize->add_setting( 'restaurant_fast_food_tp_color_option_link', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'restaurant_fast_food_tp_color_option_link', array(
			'label'     => __('Theme  Hover Color', 'restaurant-fast-food'),
	    'description' => __('It will change the complete theme color in one click.', 'restaurant-fast-food'),
	    'section' => 'restaurant_fast_food_color_option',
	    'settings' => 'restaurant_fast_food_tp_color_option_link',
  	)));
  	// Mobile Responsive
	$wp_customize->add_section('restaurant_fast_food_mobile_media_option',array(
		'title'         => __('Mobile Responsive media', 'restaurant-fast-food'),
		'description' => __('Control will no function if the toggle in the main settings is off.', 'restaurant-fast-food'),
		'priority' => 10,
		'panel' => 'restaurant_fast_food_panel_id'
	) );
	$wp_customize->add_setting( 'restaurant_fast_food_return_to_header_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'restaurant_fast_food_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Restaurant_Fast_Food_Toggle_Control( $wp_customize, 'restaurant_fast_food_return_to_header_mob', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'restaurant-fast-food' ),
		'section'     => 'restaurant_fast_food_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'restaurant_fast_food_return_to_header_mob',
	) ) );
	$wp_customize->add_setting( 'restaurant_fast_food_related_post_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'restaurant_fast_food_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Restaurant_Fast_Food_Toggle_Control( $wp_customize, 'restaurant_fast_food_related_post_mob', array(
		'label'       => esc_html__( 'Show / Hide Related Post', 'restaurant-fast-food' ),
		'section'     => 'restaurant_fast_food_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'restaurant_fast_food_related_post_mob',
	) ) );

	//menu typography
  	$wp_customize->add_section( 'restaurant_fast_food_menu_typography', array(
    	'title'      => __( 'Menu Typography', 'restaurant-fast-food' ),
    	'priority' => 5,
		'panel' => 'restaurant_fast_food_panel_id'
	) );

  	$wp_customize->add_setting('restaurant_fast_food_menu_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'restaurant_fast_food_sanitize_choices',
	));
	$wp_customize->add_control(	'restaurant_fast_food_menu_font_family', array(
		'section' => 'restaurant_fast_food_menu_typography',
		'label'   => __('Menu Fonts', 'restaurant-fast-food'),
		'type'    => 'select',
		'choices' => $restaurant_fast_food_font_array,
	));
  	
	$wp_customize->add_setting('restaurant_fast_food_menu_text_tranform',array(
		'default' => 'Capitalize',
		'sanitize_callback' => 'restaurant_fast_food_sanitize_choices'
 	));
 	$wp_customize->add_control('restaurant_fast_food_menu_text_tranform',array(
		'type' => 'select',
		'label' => __('Menu Text Transform','restaurant-fast-food'),
		'section' => 'restaurant_fast_food_menu_typography',
		'choices' => array(
		   'Uppercase' => __('Uppercase','restaurant-fast-food'),
		   'Lowercase' => __('Lowercase','restaurant-fast-food'),
		   'Capitalize' => __('Capitalize','restaurant-fast-food'),
		),
	) );

	$wp_customize->add_setting('restaurant_fast_food_menu_font_size', array(
	'default' => '',
    'sanitize_callback' => 'restaurant_fast_food_sanitize_number_range',
	));

	$wp_customize->add_control(new Restaurant_Fast_Food_Range_Slider($wp_customize, 'restaurant_fast_food_menu_font_size', array(
    'section' => 'restaurant_fast_food_menu_typography',
    'label' => esc_html__('Font Size', 'restaurant-fast-food'),
    'input_attrs' => array(
        'min' => 0,
        'max' => 15,
        'step' => 1
    )
	)));

	//TP Blog Option
	$wp_customize->add_section('restaurant_fast_food_blog_option',array(
        'title' => __('TP Blog Option', 'restaurant-fast-food'),
        'panel' => 'restaurant_fast_food_panel_id',
        'priority' => 4,
    ) );

    /** Meta Order */
    $wp_customize->add_setting('blog_meta_order', array(
        'default' => array('date', 'author', 'comment', 'category'),
        'sanitize_callback' => 'restaurant_fast_food_sanitize_sortable',
    ));
    $wp_customize->add_control(new Restaurant_Fast_Food_Control_Sortable($wp_customize, 'blog_meta_order', array(
    	'label' => esc_html__('Meta Order', 'restaurant-fast-food'),
        'description' => __('Drag & Drop post items to re-arrange the order and also hide and show items as per the need by clicking on the eye icon.', 'restaurant-fast-food') ,
        'section' => 'restaurant_fast_food_blog_option',
        'choices' => array(
            'date' => __('date', 'restaurant-fast-food') ,
            'author' => __('author', 'restaurant-fast-food') ,
            'comment' => __('comment', 'restaurant-fast-food') ,
            'category' => __('category', 'restaurant-fast-food') ,
        ) ,
    )));
    $wp_customize->add_setting( 'restaurant_fast_food_excerpt_count', array(
		'default'              => 35,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'restaurant_fast_food_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'restaurant_fast_food_excerpt_count', array(
		'label'       => esc_html__( 'Edit Excerpt Limit','restaurant-fast-food' ),
		'section'     => 'restaurant_fast_food_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );
	$wp_customize->add_setting('restaurant_fast_food_read_more_text',array(
		'default'=> __('Read More','restaurant-fast-food'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('restaurant_fast_food_read_more_text',array(
		'label'	=> __('Edit Button Text','restaurant-fast-food'),
		'section'=> 'restaurant_fast_food_blog_option',
		'type'=> 'text'
	));

	$wp_customize->add_setting('restaurant_fast_food_post_image_round', array(
	  'default' => '0',
      'sanitize_callback' => 'restaurant_fast_food_sanitize_number_range',
	));
	$wp_customize->add_control(new restaurant_fast_food_Range_Slider($wp_customize, 'restaurant_fast_food_post_image_round', array(
       'section' => 'restaurant_fast_food_blog_option',
      'label' => esc_html__('Edit Post Image Border Radius', 'restaurant-fast-food'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 180,
        'step' => 1
    )
	)));

	$wp_customize->add_setting('restaurant_fast_food_post_image_width', array(
	  'default' => '',
      'sanitize_callback' => 'restaurant_fast_food_sanitize_number_range',
	));
	$wp_customize->add_control(new restaurant_fast_food_Range_Slider($wp_customize, 'restaurant_fast_food_post_image_width', array(
       'section' => 'restaurant_fast_food_blog_option',
      'label' => esc_html__('Edit Post Image Width', 'restaurant-fast-food'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 367,
        'step' => 1
    )
	)));

	$wp_customize->add_setting('restaurant_fast_food_post_image_length', array(
	  'default' => '',
      'sanitize_callback' => 'restaurant_fast_food_sanitize_number_range',
	));
	$wp_customize->add_control(new restaurant_fast_food_Range_Slider($wp_customize, 'restaurant_fast_food_post_image_length', array(
       'section' => 'restaurant_fast_food_blog_option',
      'label' => esc_html__('Edit Post Image height', 'restaurant-fast-food'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 900,
        'step' => 1
    )
	)));

	$wp_customize->selective_refresh->add_partial( 'restaurant_fast_food_read_more_text', array(
		'selector' => '.readmore-btn',
		'render_callback' => 'restaurant_fast_food_customize_partial_restaurant_fast_food_read_more_text',
	) );
	$wp_customize->add_setting( 'restaurant_fast_food_remove_read_button', array(
		 'default'           => true,
		 'transport'         => 'refresh',
		 'sanitize_callback' => 'restaurant_fast_food_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Restaurant_Fast_Food_Toggle_Control( $wp_customize, 'restaurant_fast_food_remove_read_button', array(
		 'label'       => esc_html__( 'Show / Hide Read More Button', 'restaurant-fast-food' ),
		 'section'     => 'restaurant_fast_food_blog_option',
		 'type'        => 'toggle',
		 'settings'    => 'restaurant_fast_food_remove_read_button',
	) ) );
    $wp_customize->selective_refresh->add_partial( 'restaurant_fast_food_remove_read_button', array(
		'selector' => '.readmore-btn',
		'render_callback' => 'restaurant_fast_food_customize_partial_restaurant_fast_food_remove_read_button',
	));
	$wp_customize->add_setting( 'restaurant_fast_food_remove_tags', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'restaurant_fast_food_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Restaurant_Fast_Food_Toggle_Control( $wp_customize, 'restaurant_fast_food_remove_tags', array(
	'label'       => esc_html__( 'Show / Hide Tags Option', 'restaurant-fast-food' ),
	'section'     => 'restaurant_fast_food_blog_option',
	'type'        => 'toggle',
	'settings'    => 'restaurant_fast_food_remove_tags',
	) ) );
    $wp_customize->selective_refresh->add_partial( 'restaurant_fast_food_remove_tags', array(
		'selector' => '.box-content a[rel="tag"]',
		'render_callback' => 'restaurant_fast_food_customize_partial_restaurant_fast_food_remove_tags',
	));
	$wp_customize->add_setting( 'restaurant_fast_food_remove_category', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'restaurant_fast_food_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Restaurant_Fast_Food_Toggle_Control( $wp_customize, 'restaurant_fast_food_remove_category', array(
		'label'       => esc_html__( 'Show / Hide Category Option', 'restaurant-fast-food' ),
		'section'     => 'restaurant_fast_food_blog_option',
		'type'        => 'toggle',
		'settings'    => 'restaurant_fast_food_remove_category',
	) ) );
    $wp_customize->selective_refresh->add_partial( 'restaurant_fast_food_remove_category', array(
		'selector' => '.box-content a[rel="category"]',
		'render_callback' => 'restaurant_fast_food_customize_partial_restaurant_fast_food_remove_category',
	));
	$wp_customize->add_setting( 'restaurant_fast_food_remove_comment', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'restaurant_fast_food_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Restaurant_Fast_Food_Toggle_Control( $wp_customize, 'restaurant_fast_food_remove_comment', array(
	 'label'       => esc_html__( 'Show / Hide Comment Form', 'restaurant-fast-food' ),
	 'section'     => 'restaurant_fast_food_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'restaurant_fast_food_remove_comment',
	) ) );

	$wp_customize->add_setting( 'restaurant_fast_food_remove_related_post', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'restaurant_fast_food_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Restaurant_Fast_Food_Toggle_Control( $wp_customize, 'restaurant_fast_food_remove_related_post', array(
	 'label'       => esc_html__( 'Show / Hide Related Post', 'restaurant-fast-food' ),
	 'section'     => 'restaurant_fast_food_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'restaurant_fast_food_remove_related_post',
	) ) );
	$wp_customize->add_setting('restaurant_fast_food_related_post_heading',array(
		'default'=> __('Related Posts','restaurant-fast-food'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('restaurant_fast_food_related_post_heading',array(
		'label'	=> __('Edit Section Title','restaurant-fast-food'),
		'section'=> 'restaurant_fast_food_blog_option',
		'type'=> 'text'
	));
	$wp_customize->add_setting( 'restaurant_fast_food_related_post_per_page', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'restaurant_fast_food_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'restaurant_fast_food_related_post_per_page', array(
		'label'       => esc_html__( 'Related Post Per Page','restaurant-fast-food' ),
		'section'     => 'restaurant_fast_food_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 3,
			'max'              => 9,
		),
	) );
	$wp_customize->add_setting( 'restaurant_fast_food_related_post_per_columns', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'restaurant_fast_food_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'restaurant_fast_food_related_post_per_columns', array(
		'label'       => esc_html__( 'Related Post Per Row','restaurant-fast-food' ),
		'section'     => 'restaurant_fast_food_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 4,
		),
	) );
	$wp_customize->add_setting('restaurant_fast_food_post_layout',array(
        'default' => 'image-content',
        'sanitize_callback' => 'restaurant_fast_food_sanitize_choices'
	));
	$wp_customize->add_control('restaurant_fast_food_post_layout',array(
        'type' => 'radio',
        'label'     => __('Post Layout', 'restaurant-fast-food'),
        'section' => 'restaurant_fast_food_blog_option',
        'choices' => array(
            'image-content' => __('Media-Content','restaurant-fast-food'),
            'content-image' => __('Content-Media','restaurant-fast-food'),
        ),
	) );

	//home page slider
	$wp_customize->add_section( 'restaurant_fast_food_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'restaurant-fast-food' ),
		'panel' => 'restaurant_fast_food_panel_id',
      'priority' => 7,
	) );

	$wp_customize->add_setting( 'restaurant_fast_food_slider_arrows', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'restaurant_fast_food_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Restaurant_Fast_Food_Toggle_Control( $wp_customize, 'restaurant_fast_food_slider_arrows', array(
		'label'       => esc_html__( 'Show / Hide slider', 'restaurant-fast-food' ),
		'section'     => 'restaurant_fast_food_slider_section',
		'type'        => 'toggle',
		'settings'    => 'restaurant_fast_food_slider_arrows',
	) ) );

    $wp_customize->selective_refresh->add_partial( 'restaurant_fast_food_slider_arrows', array(
		'selector' => '#slider .carousel-caption',
		'render_callback' => 'restaurant_fast_food_customize_partial_restaurant_fast_food_slider_arrows',
	) );

	$wp_customize->add_setting('restaurant_fast_food_slider_short_heading',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('restaurant_fast_food_slider_short_heading',array(
		'label'	=> __('Add short Heading','restaurant-fast-food'),
		'section'=> 'restaurant_fast_food_slider_section',
		'type'=> 'text'
	));


	for ( $restaurant_fast_food_count = 1; $restaurant_fast_food_count <= 4; $restaurant_fast_food_count++ ) {

	// Add color scheme setting and control.
	$wp_customize->add_setting( 'restaurant_fast_food_slider_page' . $restaurant_fast_food_count, array(
		'default'           => '',
		'sanitize_callback' => 'restaurant_fast_food_sanitize_dropdown_pages'
	) );

	$wp_customize->add_control( 'restaurant_fast_food_slider_page' . $restaurant_fast_food_count, array(
		'label'    => __( 'Select Slide Image Page', 'restaurant-fast-food' ),
		'section'  => 'restaurant_fast_food_slider_section',
		'type'     => 'dropdown-pages'
	) );
	}

	$wp_customize->add_setting( 'restaurant_fast_food_search_icon', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'restaurant_fast_food_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Restaurant_Fast_Food_Toggle_Control( $wp_customize, 'restaurant_fast_food_search_icon', array(
		'label'       => esc_html__( 'Show / Hide Search Option', 'restaurant-fast-food' ),
		'section'     => 'restaurant_fast_food_slider_section',
		'type'        => 'toggle',
		'settings'    => 'restaurant_fast_food_search_icon',
	) ) );

	$wp_customize->selective_refresh->add_partial( 'restaurant_fast_food_search_icon', array(
		'selector' => '.search_btn i',
		'render_callback' => 'restaurant_fast_food_customize_partial_restaurant_fast_food_search_icon',
	) );

	$wp_customize->add_setting('restaurant_fast_food_slider_content_layout',array(
        'default' => 'LEFT-ALIGN',
        'sanitize_callback' => 'restaurant_fast_food_sanitize_choices'
	));
	$wp_customize->add_control('restaurant_fast_food_slider_content_layout',array(
        'type' => 'radio',
        'label'     => __('Slider Content Layout', 'restaurant-fast-food'),
        'section' => 'restaurant_fast_food_slider_section',
        'choices' => array(
        	'LEFT-ALIGN' => __('LEFT-ALIGN','restaurant-fast-food'),
            'CENTER-ALIGN' => __('CENTER-ALIGN','restaurant-fast-food'),
            'RIGHT-ALIGN' => __('RIGHT-ALIGN','restaurant-fast-food'),
        ),
	) );

	// Product Section
	$wp_customize->add_section( 'restaurant_fast_food_product_section' , array(
    	'title'      => __( 'Category Section', 'restaurant-fast-food' ),
    	'priority' => 8,
		'panel' => 'restaurant_fast_food_panel_id'
	) );
	$wp_customize->add_setting( 'restaurant_fast_food_show_hide_product_section', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'restaurant_fast_food_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Restaurant_Fast_Food_Toggle_Control( $wp_customize, 'restaurant_fast_food_show_hide_product_section', array(
		'label'       => esc_html__( 'Show / Hide Category Section', 'restaurant-fast-food' ),
		'section'     => 'restaurant_fast_food_product_section',
		'type'        => 'toggle',
		'settings'    => 'restaurant_fast_food_show_hide_product_section',
	) ) );

	$wp_customize->add_setting('restaurant_fast_food_category_small_heading',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('restaurant_fast_food_category_small_heading',array(
		'label'	=> __('Add short Heading','restaurant-fast-food'),
		'section'=> 'restaurant_fast_food_product_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('restaurant_fast_food_product_heading',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('restaurant_fast_food_product_heading',array(
		'label'	=> __('Add Heading','restaurant-fast-food'),
		'section'=> 'restaurant_fast_food_product_section',
		'type'=> 'text'
	));

	$restaurant_fast_food_args = array(
	    'type'                     => 'product',
	    'child_of'                 => 0,
	    'parent'                   => '',
	    'orderby'                  => 'term_group',
	    'order'                    => 'ASC',
	    'hide_empty'               => false,
	    'hierarchical'             => 1,
	    'number'                   => '',
	    'taxonomy'                 => 'product_cat',
	    'pad_counts'               => false
	);

	$categories = get_categories($restaurant_fast_food_args);
	$restaurant_fast_food_cats = array('' => __('Select a category', 'restaurant-fast-food'));
	$i = 0;
	foreach ($categories as $category) {
	    if ($i == 0) {
	        $default = $category->slug;
	        $i++;
	    }
	    $restaurant_fast_food_cats[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('restaurant_fast_food_prod_cat', array(
	    'default'           => '',
	    'sanitize_callback' => 'restaurant_fast_food_sanitize_dropdown_pages',
	));

	$wp_customize->add_control('restaurant_fast_food_prod_cat', array(
	    'type'     => 'select',
	    'choices'  => $restaurant_fast_food_cats,
	    'label'    => __('Select Product Category', 'restaurant-fast-food'),
	    'section'  => 'restaurant_fast_food_product_section',
	));


	//footer
	$wp_customize->add_section('restaurant_fast_food_footer_section',array(
		'title'	=> __('Footer Text','restaurant-fast-food'),
		'description'	=> __('Add copyright text.','restaurant-fast-food'),
		'panel' => 'restaurant_fast_food_panel_id',
		'priority' => 9,
	));

	$wp_customize->add_setting('restaurant_fast_food_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('restaurant_fast_food_footer_text',array(
		'label'	=> __('Copyright Text','restaurant-fast-food'),
		'section'	=> 'restaurant_fast_food_footer_section',
		'type'		=> 'text'
	));
	// footer columns
	$wp_customize->add_setting('restaurant_fast_food_footer_columns',array(
		'default'	=> 4,
		'sanitize_callback'	=> 'restaurant_fast_food_sanitize_number_absint'
	));
	$wp_customize->add_control('restaurant_fast_food_footer_columns',array(
		'label'	=> __('Footer Widget Columns','restaurant-fast-food'),
		'section'	=> 'restaurant_fast_food_footer_section',
		'setting'	=> 'restaurant_fast_food_footer_columns',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 4,
		),
	));

	$wp_customize->selective_refresh->add_partial( 'restaurant_fast_food_footer_text', array(
		'selector' => '#footer p',
		'render_callback' => 'restaurant_fast_food_customize_partial_restaurant_fast_food_footer_text',
	) );

    $wp_customize->add_setting('restaurant_fast_food_return_to_header',array(
       'default' => true,
       'sanitize_callback'	=> 'restaurant_fast_food_sanitize_checkbox'
    ));
    $wp_customize->add_control('restaurant_fast_food_return_to_header',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Return to header','restaurant-fast-food'),
       'section' => 'restaurant_fast_food_footer_section',
    ));
    $wp_customize->add_setting( 'restaurant_fast_food_tp_footer_bg_color_option', array(
		'default' => '#5EAE53',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'restaurant_fast_food_tp_footer_bg_color_option', array(
		'label'     => __('Footer Widget Background Color', 'restaurant-fast-food'),
		'description' => __('It will change the complete footer widget backgorund color.', 'restaurant-fast-food'),
		'section' => 'restaurant_fast_food_footer_section',
		'settings' => 'restaurant_fast_food_tp_footer_bg_color_option',
	)));
	$wp_customize->add_setting('restaurant_fast_food_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'restaurant_fast_food_footer_widget_image',array(
    'label' => __('Footer Widget Background Image','restaurant-fast-food'),
    'section' => 'restaurant_fast_food_footer_section'
	)));

	$wp_customize->add_setting( 'restaurant_fast_food_return_to_header', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'restaurant_fast_food_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Restaurant_Fast_Food_Toggle_Control( $wp_customize, 'restaurant_fast_food_return_to_header', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'restaurant-fast-food' ),
		'section'     => 'restaurant_fast_food_footer_section',
		'type'        => 'toggle',
		'settings'    => 'restaurant_fast_food_return_to_header',
	) ) );


    // Add Settings and Controls for Scroll top
	$wp_customize->add_setting('restaurant_fast_food_scroll_top_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'restaurant_fast_food_sanitize_choices'
	));
	$wp_customize->add_control('restaurant_fast_food_scroll_top_position',array(
        'type' => 'radio',
        'label'     => __('Scroll to top Position', 'restaurant-fast-food'),
        'description'   => __('This option work for scroll to top', 'restaurant-fast-food'),
        'section' => 'restaurant_fast_food_footer_section',
        'choices' => array(
            'Right' => __('Right','restaurant-fast-food'),
            'Left' => __('Left','restaurant-fast-food'),
            'Center' => __('Center','restaurant-fast-food')
        ),
	) );

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'restaurant_fast_food_customize_partial_blogname',
	) );

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'restaurant_fast_food_customize_partial_blogdescription',
	) );

		$wp_customize->add_setting( 'restaurant_fast_food_site_title_text', array(
			'default'           => true,
			'transport'         => 'refresh',
			'sanitize_callback' => 'restaurant_fast_food_sanitize_checkbox',
		) );
		$wp_customize->add_control( new Restaurant_Fast_Food_Toggle_Control( $wp_customize, 'restaurant_fast_food_site_title_text', array(
			'label'       => esc_html__( 'Show / Hide Site Title', 'restaurant-fast-food' ),
			'section'     => 'title_tagline',
			'type'        => 'toggle',
			'settings'    => 'restaurant_fast_food_site_title_text',
		) ) );

		// logo site title size
		$wp_customize->add_setting('restaurant_fast_food_site_title_font_size',array(
			'default'	=> 25,
			'sanitize_callback'	=> 'restaurant_fast_food_sanitize_number_absint'
		));
		$wp_customize->add_control('restaurant_fast_food_site_title_font_size',array(
			'label'	=> __('Site Title Font Size in PX','restaurant-fast-food'),
			'section'	=> 'title_tagline',
			'setting'	=> 'restaurant_fast_food_site_title_font_size',
			'type'	=> 'number',
			'input_attrs' => array(
				'step'             => 1,
				'min'              => 0,
				'max'              => 30,
			),
		));

		$wp_customize->add_setting( 'restaurant_fast_food_site_tagline_color', array(
		    'default' => '',
		    'sanitize_callback' => 'sanitize_hex_color'
	  	));
	  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'restaurant_fast_food_site_tagline_color', array(
				'label'     => __('Change Site Title Color', 'restaurant-fast-food'),
		    'section' => 'title_tagline',
		    'settings' => 'restaurant_fast_food_site_tagline_color',
	  	)));

		$wp_customize->add_setting( 'restaurant_fast_food_site_tagline_text', array(
			'default'           => false,
			'transport'         => 'refresh',
			'sanitize_callback' => 'restaurant_fast_food_sanitize_checkbox',
		) );
		$wp_customize->add_control( new Restaurant_Fast_Food_Toggle_Control( $wp_customize, 'restaurant_fast_food_site_tagline_text', array(
			'label'       => esc_html__( 'Show / Hide Site Tagline', 'restaurant-fast-food' ),
			'section'     => 'title_tagline',
			'type'        => 'toggle',
			'settings'    => 'restaurant_fast_food_site_tagline_text',
		) ) );


		// logo site tagline size
	$wp_customize->add_setting('restaurant_fast_food_site_tagline_font_size',array(
		'default'	=> 15,
		'sanitize_callback'	=> 'restaurant_fast_food_sanitize_number_absint'
	));
	$wp_customize->add_control('restaurant_fast_food_site_tagline_font_size',array(
		'label'	=> __('Site Tagline Font Size in PX','restaurant-fast-food'),
		'section'	=> 'title_tagline',
		'setting'	=> 'restaurant_fast_food_site_tagline_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 30,
		),
	));

	$wp_customize->add_setting( 'restaurant_fast_food_logo_tagline_color', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'restaurant_fast_food_logo_tagline_color', array(
			'label'     => __('Change Site Tagline Color', 'restaurant-fast-food'),
	    'section' => 'title_tagline',
	    'settings' => 'restaurant_fast_food_logo_tagline_color',
  	)));

    $wp_customize->add_setting('restaurant_fast_food_logo_width',array(
		'default' => 50,
		'sanitize_callback'	=> 'restaurant_fast_food_sanitize_number_absint'
	));
	 $wp_customize->add_control('restaurant_fast_food_logo_width',array(
		'label'	=> esc_html__('Here You Can Customize Your Logo Size','restaurant-fast-food'),
		'section'	=> 'title_tagline',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('restaurant_fast_food_logo_settings',array(
        'default' => 'Different Line',
        'sanitize_callback' => 'restaurant_fast_food_sanitize_choices'
	));
   $wp_customize->add_control('restaurant_fast_food_logo_settings',array(
        'type' => 'radio',
        'label'     => __('Logo Layout Settings', 'restaurant-fast-food'),
        'description'   => __('Here you have two options 1. Logo and Site tite in differnt line. 2. Logo and Site title in same line.', 'restaurant-fast-food'),
        'section' => 'title_tagline',
        'choices' => array(
            'Different Line' => __('Different Line','restaurant-fast-food'),
            'Same Line' => __('Same Line','restaurant-fast-food')
        ),
	) );

	$wp_customize->add_setting('restaurant_fast_food_per_columns',array(
		'default'=> 3,
		'sanitize_callback'	=> 'restaurant_fast_food_sanitize_number_absint'
	));
	$wp_customize->add_control('restaurant_fast_food_per_columns',array(
		'label'	=> __('Product Per Row','restaurant-fast-food'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));

	$wp_customize->add_setting('restaurant_fast_food_product_per_page',array(
		'default'=> 9,
		'sanitize_callback'	=> 'restaurant_fast_food_sanitize_number_absint'
	));
	$wp_customize->add_control('restaurant_fast_food_product_per_page',array(
		'label'	=> __('Product Per Page','restaurant-fast-food'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));

		$wp_customize->add_setting( 'restaurant_fast_food_product_sidebar', array(
			'default'           => true,
			'transport'         => 'refresh',
			'sanitize_callback' => 'restaurant_fast_food_sanitize_checkbox',
		) );
		$wp_customize->add_control( new Restaurant_Fast_Food_Toggle_Control( $wp_customize, 'restaurant_fast_food_product_sidebar', array(
			'label'       => esc_html__( 'Show / Hide Shop page sidebar', 'restaurant-fast-food' ),
			'section'     => 'woocommerce_product_catalog',
			'type'        => 'toggle',
			'settings'    => 'restaurant_fast_food_product_sidebar',
		) ) );
		$wp_customize->add_setting('restaurant_fast_food_sale_tag_position',array(
        'default' => 'right',
        'sanitize_callback' => 'restaurant_fast_food_sanitize_choices'
	));
	$wp_customize->add_control('restaurant_fast_food_sale_tag_position',array(
        'type' => 'radio',
        'label'     => __('Sale Badge Position', 'restaurant-fast-food'),
        'description'   => __('This option work for Archieve Products', 'restaurant-fast-food'),
        'section' => 'woocommerce_product_catalog',
        'choices' => array(
            'left' => __('Left','restaurant-fast-food'),
            'right' => __('Right','restaurant-fast-food'),
        ),
	) );
		$wp_customize->add_setting( 'restaurant_fast_food_single_product_sidebar', array(
			'default'           => true,
			'transport'         => 'refresh',
			'sanitize_callback' => 'restaurant_fast_food_sanitize_checkbox',
		) );
		$wp_customize->add_control( new Restaurant_Fast_Food_Toggle_Control( $wp_customize, 'restaurant_fast_food_single_product_sidebar', array(
			'label'       => esc_html__( 'Show / Hide Product page sidebar', 'restaurant-fast-food' ),
			'section'     => 'woocommerce_product_catalog',
			'type'        => 'toggle',
			'settings'    => 'restaurant_fast_food_single_product_sidebar',
		) ) );

		$wp_customize->add_setting( 'restaurant_fast_food_related_product', array(
			'default'           => true,
			'transport'         => 'refresh',
			'sanitize_callback' => 'restaurant_fast_food_sanitize_checkbox',
		) );
		$wp_customize->add_control( new Restaurant_Fast_Food_Toggle_Control( $wp_customize, 'restaurant_fast_food_related_product', array(
			'label'       => esc_html__( 'Show / Hide related product', 'restaurant-fast-food' ),
			'section'     => 'woocommerce_product_catalog',
			'type'        => 'toggle',
			'settings'    => 'restaurant_fast_food_related_product',
		) ) );
		
	//Page template settings
	$wp_customize->add_panel( 'restaurant_fast_food_page_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Page Template Settings', 'restaurant-fast-food' ),
	    'description' => __( 'Description of what this panel does.', 'restaurant-fast-food' ),
	) );

	// 404 PAGE
	$wp_customize->add_section('restaurant_fast_food_404_page_section',array(
		'title'         => __('404 Page', 'restaurant-fast-food'),
		'description'   => 'Here you can customize 404 Page content.',
		'panel' => 'restaurant_fast_food_page_panel_id'
	) );

	$wp_customize->add_setting('restaurant_fast_food_edit_404_title',array(
		'default'=> __('Oops! That page cant be found.','restaurant-fast-food'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('restaurant_fast_food_edit_404_title',array(
		'label'	=> __('Edit Title','restaurant-fast-food'),
		'section'=> 'restaurant_fast_food_404_page_section',
		'type'=> 'text',
	));

	$wp_customize->add_setting('restaurant_fast_food_edit_404_text',array(
		'default'=> __('It looks like nothing was found at this location. Maybe try a search?','restaurant-fast-food'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('restaurant_fast_food_edit_404_text',array(
		'label'	=> __('Edit Text','restaurant-fast-food'),
		'section'=> 'restaurant_fast_food_404_page_section',
		'type'=> 'text'
	));

	// Search Results
	$wp_customize->add_section('restaurant_fast_food_no_result_section',array(
		'title'         => __('Search Results', 'restaurant-fast-food'),
		'description'   => 'Here you can customize Search Result content.',
		'panel' => 'restaurant_fast_food_page_panel_id'
	) );

	$wp_customize->add_setting('restaurant_fast_food_edit_no_result_title',array(
		'default'=> __('Nothing Found','restaurant-fast-food'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('restaurant_fast_food_edit_no_result_title',array(
		'label'	=> __('Edit Title','restaurant-fast-food'),
		'section'=> 'restaurant_fast_food_no_result_section',
		'type'=> 'text',
	));

	$wp_customize->add_setting('restaurant_fast_food_edit_no_result_text',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','restaurant-fast-food'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('restaurant_fast_food_edit_no_result_text',array(
		'label'	=> __('Edit Text','restaurant-fast-food'),
		'section'=> 'restaurant_fast_food_no_result_section',
		'type'=> 'text'
	));
}
add_action( 'customize_register', 'restaurant_fast_food_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Restaurant Fast Food 1.0
 * @see restaurant_fast_food_customize_register()
 *
 * @return void
 */
function restaurant_fast_food_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Restaurant Fast Food 1.0
 * @see restaurant_fast_food_customize_register()
 *
 * @return void
 */
function restaurant_fast_food_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if ( ! defined( 'RESTAURANT_FAST_FOOD_PRO_THEME_NAME' ) ) {
	define( 'RESTAURANT_FAST_FOOD_PRO_THEME_NAME', esc_html__( 'Restaurant Pro Theme', 'restaurant-fast-food' ));
}
if ( ! defined( 'RESTAURANT_FAST_FOOD_PRO_THEME_URL' ) ) {
	define( 'RESTAURANT_FAST_FOOD_PRO_THEME_URL', esc_url('https://www.themespride.com/products/fast-food-wordpress-theme'));
}
if ( ! defined( 'RESTAURANT_FAST_FOOD_DOCS_URL' ) ) {
	define( 'RESTAURANT_FAST_FOOD_DOCS_URL', esc_url('https://page.themespride.com/demo/docs/restaurant-fast-food/'));
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Restaurant_Fast_Food_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Restaurant_Fast_Food_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Restaurant_Fast_Food_Customize_Section_Pro(
				$manager,
				'restaurant_fast_food_section_pro',
				array(
					'priority'   => 9,
					'title'    => RESTAURANT_FAST_FOOD_PRO_THEME_NAME,
					'pro_text' => esc_html__( 'Upgrade Pro', 'restaurant-fast-food' ),
					'pro_url'  => esc_url( RESTAURANT_FAST_FOOD_PRO_THEME_URL, 'restaurant-fast-food' ),
				)
			)
		);
		
		    // Register sections.
		$manager->add_section(
			new Restaurant_Fast_Food_Customize_Section_Pro(
				$manager,
				'restaurant_fast_food_documentation',
				array(
					'priority'   => 500,
					'title'    => esc_html__( 'Theme Documentation', 'restaurant-fast-food' ),
					'pro_text' => esc_html__( 'Click Here', 'restaurant-fast-food' ),
					'pro_url'  => esc_url( RESTAURANT_FAST_FOOD_DOCS_URL, 'restaurant-fast-food'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'restaurant-fast-food-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'restaurant-fast-food-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Restaurant_Fast_Food_Customize::get_instance();
