<?php
/**
 * Restaurant Fast Food functions and definitions
 *
 * @package Restaurant Fast Food
 * @subpackage restaurant_fast_food
 */

function restaurant_fast_food_setup() {

	load_theme_textdomain( 'restaurant-fast-food', get_template_directory() . '/language' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'restaurant-fast-food-featured-image', 2000, 1200, true );
	add_image_size( 'restaurant-fast-food-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary-1' => __( 'Primary Left Menu', 'restaurant-fast-food' ),
		'primary-2' => __( 'Primary Right Menu', 'restaurant-fast-food' ),
		'primary-3' => __( 'Mobile Menu', 'restaurant-fast-food' ),
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', restaurant_fast_food_fonts_url() ) );
}
add_action( 'after_setup_theme', 'restaurant_fast_food_setup' );

/**
 * Register custom fonts.
 */
function restaurant_fast_food_fonts_url(){
	$restaurant_fast_food_font_url = '';
	$restaurant_fast_food_font_family = array();
	$restaurant_fast_food_font_family[] = 'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900';
	$restaurant_fast_food_font_family[] = 'Fredericka the Great';
	$restaurant_fast_food_font_family[] = 'Pacifico';

	$restaurant_fast_food_font_family[] = 'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$restaurant_fast_food_font_family[] = 'Bad Script';
	$restaurant_fast_food_font_family[] = 'Bebas Neue';
	$restaurant_fast_food_font_family[] = 'Fjalla One';
	$restaurant_fast_food_font_family[] = 'PT Sans:ital,wght@0,400;0,700;1,400;1,700';
	$restaurant_fast_food_font_family[] = 'PT Serif:ital,wght@0,400;0,700;1,400;1,700';
	$restaurant_fast_food_font_family[] = 'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900';
	$restaurant_fast_food_font_family[] = 'Roboto Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$restaurant_fast_food_font_family[] = 'Alex Brush';
	$restaurant_fast_food_font_family[] = 'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$restaurant_fast_food_font_family[] = 'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$restaurant_fast_food_font_family[] = 'Playball';
	$restaurant_fast_food_font_family[] = 'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$restaurant_fast_food_font_family[] = 'Julius Sans One';
	$restaurant_fast_food_font_family[] = 'Arsenal:ital,wght@0,400;0,700;1,400;1,700';
	$restaurant_fast_food_font_family[] = 'Slabo 13px';
	$restaurant_fast_food_font_family[] = 'Overpass Mono:wght@300;400;500;600;700';
	$restaurant_fast_food_font_family[] = 'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900';
	$restaurant_fast_food_font_family[] = 'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$restaurant_fast_food_font_family[] = 'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900';
	$restaurant_fast_food_font_family[] = 'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$restaurant_fast_food_font_family[] = 'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$restaurant_fast_food_font_family[] = 'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700';
	$restaurant_fast_food_font_family[] = 'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$restaurant_fast_food_font_family[] = 'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$restaurant_fast_food_font_family[] = 'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$restaurant_fast_food_font_family[] = 'Quicksand:wght@300;400;500;600;700';
	$restaurant_fast_food_font_family[] = 'Padauk:wght@400;700';
	$restaurant_fast_food_font_family[] = 'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$restaurant_fast_food_font_family[] = 'Inconsolata:wght@200;300;400;500;600;700;800;900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$restaurant_fast_food_font_family[] = 'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$restaurant_fast_food_font_family[] = 'Indie Flower';
	$restaurant_fast_food_font_family[] = 'VT323';
	$restaurant_fast_food_font_family[] = 'Dosis:wght@200;300;400;500;600;700;800';
	$restaurant_fast_food_font_family[] = 'Frank Ruhl Libre:wght@300;400;500;700;900';
	$restaurant_fast_food_font_family[] = 'Fjalla One';
	$restaurant_fast_food_font_family[] = 'Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$restaurant_fast_food_font_family[] = 'Oxygen:wght@300;400;700';
	$restaurant_fast_food_font_family[] = 'Arvo:ital,wght@0,400;0,700;1,400;1,700';
	$restaurant_fast_food_font_family[] = 'Noto Serif:ital,wght@0,400;0,700;1,400;1,700';
	$restaurant_fast_food_font_family[] = 'Lobster';
	$restaurant_fast_food_font_family[] = 'Crimson Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700';
	$restaurant_fast_food_font_family[] = 'Yanone Kaffeesatz:wght@200;300;400;500;600;700';
	$restaurant_fast_food_font_family[] = 'Anton';
	$restaurant_fast_food_font_family[] = 'Libre Baskerville:ital,wght@0,400;0,700;1,400';
	$restaurant_fast_food_font_family[] = 'Bree Serif';
	$restaurant_fast_food_font_family[] = 'Gloria Hallelujah';
	$restaurant_fast_food_font_family[] = 'Abril Fatface';
	$restaurant_fast_food_font_family[] = 'Varela Round';
	$restaurant_fast_food_font_family[] = 'Vampiro One';
	$restaurant_fast_food_font_family[] = 'Shadows Into Light';
	$restaurant_fast_food_font_family[] = 'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$restaurant_fast_food_font_family[] = 'Rokkitt:wght@100;200;300;400;500;600;700;800;900';
	$restaurant_fast_food_font_family[] = 'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$restaurant_fast_food_font_family[] = 'Francois One';
	$restaurant_fast_food_font_family[] = 'Orbitron:wght@400;500;600;700;800;900';
	$restaurant_fast_food_font_family[] = 'Patua One';
	$restaurant_fast_food_font_family[] = 'Acme';
	$restaurant_fast_food_font_family[] = 'Satisfy';
	$restaurant_fast_food_font_family[] = 'Josefin Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700';
	$restaurant_fast_food_font_family[] = 'Quattrocento Sans:ital,wght@0,400;0,700;1,400;1,700';
	$restaurant_fast_food_font_family[] = 'Architects Daughter';
	$restaurant_fast_food_font_family[] = 'Russo One';
	$restaurant_fast_food_font_family[] = 'Monda:wght@400;700';
	$restaurant_fast_food_font_family[] = 'Righteous';
	$restaurant_fast_food_font_family[] = 'Lobster Two:ital,wght@0,400;0,700;1,400;1,700';
	$restaurant_fast_food_font_family[] = 'Hammersmith One';
	$restaurant_fast_food_font_family[] = 'Courgette';
	$restaurant_fast_food_font_family[] = 'Permanent Marke';
	$restaurant_fast_food_font_family[] = 'Cherry Swash:wght@400;700';
	$restaurant_fast_food_font_family[] = 'Cormorant Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700';
	$restaurant_fast_food_font_family[] = 'Poiret One';
	$restaurant_fast_food_font_family[] = 'BenchNine:wght@300;400;700';
	$restaurant_fast_food_font_family[] = 'Economica:ital,wght@0,400;0,700;1,400;1,700';
	$restaurant_fast_food_font_family[] = 'Handlee';
	$restaurant_fast_food_font_family[] = 'Cardo:ital,wght@0,400;0,700;1,400';
	$restaurant_fast_food_font_family[] = 'Alfa Slab One';
	$restaurant_fast_food_font_family[] = 'Averia Serif Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$restaurant_fast_food_font_family[] = 'Cookie';
	$restaurant_fast_food_font_family[] = 'Chewy';
	$restaurant_fast_food_font_family[] = 'Great Vibes';
	$restaurant_fast_food_font_family[] = 'Coming Soon';
	$restaurant_fast_food_font_family[] = 'Philosopher:ital,wght@0,400;0,700;1,400;1,700';
	$restaurant_fast_food_font_family[] = 'Days One';
	$restaurant_fast_food_font_family[] = 'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$restaurant_fast_food_font_family[] = 'Shrikhand';
	$restaurant_fast_food_font_family[] = 'Tangerine:wght@400;700';
	$restaurant_fast_food_font_family[] = 'IM Fell English SC';
	$restaurant_fast_food_font_family[] = 'Boogaloo';
	$restaurant_fast_food_font_family[] = 'Bangers';
	$restaurant_fast_food_font_family[] = 'Fredoka One';
	$restaurant_fast_food_font_family[] = 'Volkhov:ital,wght@0,400;0,700;1,400;1,700';
	$restaurant_fast_food_font_family[] = 'Shadows Into Light Two';
	$restaurant_fast_food_font_family[] = 'Marck Script';
	$restaurant_fast_food_font_family[] = 'Sacramento';
	$restaurant_fast_food_font_family[] = 'Unica One';
	$restaurant_fast_food_font_family[] = 'Dancing Script:wght@400;500;600;700';
	$restaurant_fast_food_font_family[] = 'Exo 2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$restaurant_fast_food_font_family[] = 'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$restaurant_fast_food_font_family[] = 'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$restaurant_fast_food_font_family[] = 'DM Serif Display:ital@0;1';
	$restaurant_fast_food_font_family[] = 'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800';

	$restaurant_fast_food_query_args = array(
		'family'	=> rawurlencode(implode('|',$restaurant_fast_food_font_family)),
	);
	$restaurant_fast_food_font_url = add_query_arg($restaurant_fast_food_query_args,'//fonts.googleapis.com/css');
	return $restaurant_fast_food_font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $restaurant_fast_food_font_url ) );
}

/**
 * Register widget area.
 */
function restaurant_fast_food_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'restaurant-fast-food' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'restaurant-fast-food' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'restaurant-fast-food' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'restaurant-fast-food' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'restaurant-fast-food' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'restaurant-fast-food' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'restaurant-fast-food' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'restaurant-fast-food' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'restaurant-fast-food' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'restaurant-fast-food' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'restaurant-fast-food' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'restaurant-fast-food' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'restaurant-fast-food' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'restaurant-fast-food' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'restaurant_fast_food_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function restaurant_fast_food_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'restaurant-fast-food-fonts', restaurant_fast_food_fonts_url(), array(), null );

	// Bootstrap
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );

	// owl
	wp_enqueue_style( 'owl-carousel-css', get_theme_file_uri( '/assets/css/owl.carousel.css' ) );

	// Theme stylesheet.
	wp_enqueue_style( 'restaurant-fast-food-style', get_stylesheet_uri() );
	require get_parent_theme_file_path( '/tp-body-width-layout.php' );
	wp_add_inline_style( 'restaurant-fast-food-style',$restaurant_fast_food_tp_theme_css );
	require get_parent_theme_file_path( '/tp-theme-color.php' );
	wp_add_inline_style( 'restaurant-fast-food-style',$restaurant_fast_food_tp_theme_css );
	wp_style_add_data('restaurant-fast-food-style', 'rtl', 'replace');

	// Theme block stylesheet.
	wp_enqueue_style( 'restaurant-fast-food-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'restaurant-fast-food-style' ), '1.0' );

	// Fontawesome
	wp_enqueue_style( 'fontawesome-css', get_theme_file_uri( '/assets/css/fontawesome-all.css' ) );

	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/js/bootstrap.js' ), array( 'jquery' ), true );

	wp_enqueue_script( 'owl-carousel-js', get_theme_file_uri( '/assets/js/owl.carousel.js' ), array( 'jquery' ), true );

	wp_enqueue_script( 'restaurant-fast-food-custom-scripts', esc_url( get_template_directory_uri() ) . '/assets/js/custom.js', array('jquery'), true );

	wp_enqueue_script( 'restaurant-fast-food-focus-nav', esc_url( get_template_directory_uri() ) . '/assets/js/focus-nav.js', array('jquery'), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	$restaurant_fast_food_body_font_family = get_theme_mod('restaurant_fast_food_body_font_family', '');

	$restaurant_fast_food_heading_font_family = get_theme_mod('restaurant_fast_food_heading_font_family', '');

	$restaurant_fast_food_menu_font_family = get_theme_mod('restaurant_fast_food_menu_font_family', '');

	$restaurant_fast_food_tp_theme_css = '
		body{
		    font-family: '.esc_html($restaurant_fast_food_body_font_family).';
		}
		h1{
		    font-family: '.esc_html($restaurant_fast_food_heading_font_family).';
		}
		h2{
		    font-family: '.esc_html($restaurant_fast_food_heading_font_family).';
		}
		h3{
		    font-family: '.esc_html($restaurant_fast_food_heading_font_family).';
		}
		h4{
		    font-family: '.esc_html($restaurant_fast_food_heading_font_family).';
		}
		h5{
		    font-family: '.esc_html($restaurant_fast_food_heading_font_family).';
		}
		h6,#slider h6 {
		    font-family: '.esc_html($restaurant_fast_food_heading_font_family).';
		}
		#theme-sidebar .wp-block-search .wp-block-search__label,.wp-block-search .wp-block-search__label {
		    font-family: '.esc_html($restaurant_fast_food_heading_font_family).';
		}
		.menubar{
		    font-family: '.esc_html($restaurant_fast_food_menu_font_family).';
		}
	';
	wp_add_inline_style('restaurant-fast-food-style', $restaurant_fast_food_tp_theme_css);
}
add_action( 'wp_enqueue_scripts', 'restaurant_fast_food_scripts' );

//Admin Enqueue for Admin
function restaurant_fast_food_admin_enqueue_scripts(){
	wp_enqueue_style('restaurant-fast-food-admin-style',( get_template_directory_uri() ) . '/assets/css/admin.css');
	wp_enqueue_script( 'restaurant-fast-food-custom-scripts',( get_template_directory_uri() ). '/assets/js/restaurant-fast-food-custom.js', array('jquery'), true);
	wp_register_script( 'restaurant-fast-food-admin-script', get_template_directory_uri() . '/assets/js/restaurant-fast-food-admin.js', array( 'jquery' ), '', true );

	wp_localize_script(
		'restaurant-fast-food-admin-script',
		'restaurant_fast_food',
		array(
			'admin_ajax'	=>	admin_url('admin-ajax.php'),
			'wpnonce'			=>	wp_create_nonce('restaurant_fast_food_dismissed_notice_nonce')
		)
	);
	wp_enqueue_script('restaurant-fast-food-admin-script');

    wp_localize_script( 'restaurant-fast-food-admin-script', 'restaurant_fast_food_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'restaurant_fast_food_admin_enqueue_scripts' );

/*radio button sanitization*/
function restaurant_fast_food_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}
// Sanitize Sortable control.
function restaurant_fast_food_sanitize_sortable( $val, $setting ) {
	if ( is_string( $val ) || is_numeric( $val ) ) {
		return array(
			esc_attr( $val ),
		);
	}
	$sanitized_value = array();
	foreach ( $val as $item ) {
		if ( isset( $setting->manager->get_control( $setting->id )->choices[ $item ] ) ) {
			$sanitized_value[] = esc_attr( $item );
		}
	}
	return $sanitized_value;
}

/* Excerpt Limit Begin */
function restaurant_fast_food_excerpt_function($excerpt_count = 35) {
    $restaurant_fast_food_excerpt = get_the_excerpt();

    $restaurant_fast_food_text_excerpt = wp_strip_all_tags($restaurant_fast_food_excerpt);

    $restaurant_fast_food_excerpt_limit = esc_attr(get_theme_mod('restaurant_fast_food_excerpt_count', $excerpt_count));

    $restaurant_fast_food_theme_excerpt = implode(' ', array_slice(explode(' ', $restaurant_fast_food_text_excerpt), 0, $restaurant_fast_food_excerpt_limit));

    return $restaurant_fast_food_theme_excerpt;
}

function restaurant_fast_food_sanitize_dropdown_pages( $page_id, $setting ) {
	$page_id = absint( $page_id );
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'restaurant_fast_food_loop_columns');
if (!function_exists('restaurant_fast_food_loop_columns')) {
	function restaurant_fast_food_loop_columns() {
		$columns = get_theme_mod( 'restaurant_fast_food_per_columns', 3 );
		return $columns;
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'restaurant_fast_food_per_page', 20 );
function restaurant_fast_food_per_page( $restaurant_fast_food_cols ) {
  	$restaurant_fast_food_cols = get_theme_mod( 'restaurant_fast_food_product_per_page', 9 );
	return $restaurant_fast_food_cols;
}

// Category count 
function restaurant_fast_food_display_post_category_count() {
    $restaurant_fast_food_category = get_the_category();
    $restaurant_fast_food_category_count = ($restaurant_fast_food_category) ? count($restaurant_fast_food_category) : 0;
    $restaurant_fast_food_category_text = ($restaurant_fast_food_category_count === 1) ? 'category' : 'categories'; // Check for pluralization
    echo $restaurant_fast_food_category_count . ' ' . $restaurant_fast_food_category_text;
}

//post tag
function custom_tags_filter($restaurant_fast_food_tag_list) {
    // Replace the comma (,) with an empty string
    $restaurant_fast_food_tag_list = str_replace(', ', '', $restaurant_fast_food_tag_list);

    return $restaurant_fast_food_tag_list;
}
add_filter('the_tags', 'custom_tags_filter');

function custom_output_tags() {
    $restaurant_fast_food_tags = get_the_tags();

    if ($restaurant_fast_food_tags) {
        $restaurant_fast_food_tags_output = '<div class="post_tag">Tags: ';

        $restaurant_fast_food_first_tag = reset($restaurant_fast_food_tags);

        foreach ($restaurant_fast_food_tags as $tag) {
            $restaurant_fast_food_tags_output .= '<a href="' . esc_url(get_tag_link($tag)) . '" rel="tag" class="mr-2">' . esc_html($tag->name) . '</a>';
            if ($tag !== $restaurant_fast_food_first_tag) {
                $restaurant_fast_food_tags_output .= ' ';
            }
        }

        $restaurant_fast_food_tags_output .= '</div>';

        echo $restaurant_fast_food_tags_output;
    }
}

function restaurant_fast_food_sanitize_checkbox( $input ) {
	// Boolean check
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function restaurant_fast_food_sanitize_number_absint( $number, $setting ) {
	// Ensure $number is an absolute integer (whole number, zero or greater).
	$number = absint( $number );

	// If the input is an absolute integer, return it; otherwise, return the default
	return ( $number ? $number : $setting->default );
}

function restaurant_fast_food_sanitize_number_range( $number, $setting ) {

	// Ensure input is an absolute integer.
	$number = absint( $number );

	// Get the input attributes associated with the setting.
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;

	// Get minimum number in the range.
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );

	// Get maximum number in the range.
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );

	// Get step.
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );

	// If the number is within the valid range, return it; otherwise, return the default
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

/**
 * Use front-page.php when Front page displays is set to a static page.
 */
function restaurant_fast_food_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'restaurant_fast_food_front_page_template' );

/**
 * Logo Custamization.
 */

function restaurant_fast_food_logo_width(){

	$restaurant_fast_food_logo_width   = get_theme_mod( 'restaurant_fast_food_logo_width', 50 );

	echo "<style type='text/css' media='all'>"; ?>
		img.custom-logo{
		    width: <?php echo absint( $restaurant_fast_food_logo_width ); ?>px;
		    max-width: 100%;
		}
	<?php echo "</style>";
}
define('RESTAURANT_FAST_FOOD_CREDIT',__('https://www.themespride.com/products/free-restaurant-wordpress-theme','restaurant-fast-food') );
if ( ! function_exists( 'restaurant_fast_food_credit' ) ) {
	function restaurant_fast_food_credit(){
		echo "<a href=".esc_url(RESTAURANT_FAST_FOOD_CREDIT)." target='_blank'>".esc_html__(get_theme_mod('restaurant_fast_food_footer_text',__('Restaurant Fast Food WordPress Theme','restaurant-fast-food')))."</a>";
	}
}

add_action( 'wp_ajax_restaurant_fast_food_dismissed_notice_handler', 'restaurant_fast_food_ajax_notice_handler' );

function restaurant_fast_food_ajax_notice_handler() {
	if (!wp_verify_nonce($_POST['wpnonce'], 'restaurant_fast_food_dismissed_notice_nonce')) {
		exit;
	}
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function restaurant_fast_food_activation_notice() { 

	if ( ! get_option('dismissed-get_started', FALSE ) ) { ?>

    <div class="restaurant-fast-food-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
        <div class="restaurant-fast-food-getting-started-notice clearfix">
            <div class="restaurant-fast-food-theme-notice-content">
                <h2 class="restaurant-fast-food-notice-h2">
                    <?php
                printf(
                /* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
                    esc_html__( 'Welcome! Thank you for choosing %1$s!', 'restaurant-fast-food' ), '<strong>'. wp_get_theme()->get('Name'). '</strong>' );
                ?>
                </h2>

                <p class="plugin-install-notice"><?php echo sprintf(__('Click here to get started with the theme set-up.', 'restaurant-fast-food')) ?></p>

                <a class="restaurant-fast-food-btn-get-started button button-primary button-hero restaurant-fast-food-button-padding" href="<?php echo esc_url( admin_url( 'themes.php?page=restaurant-fast-food-about' )); ?>" ><?php esc_html_e( 'Get started', 'restaurant-fast-food' ) ?></a><span class="restaurant-fast-food-push-down">
                <?php
                    /* translators: %1$s: Anchor link start %2$s: Anchor link end */
                    printf(
                        'or %1$sCustomize theme%2$s</a></span>',
                        '<a target="_blank" href="' . esc_url( admin_url( 'customize.php' ) ) . '">',
                        '</a>'
                    );
                ?>
            </div>
        </div>
    </div>
<?php }

}

add_action( 'admin_notices', 'restaurant_fast_food_activation_notice' );

add_action('after_switch_theme', 'restaurant_fast_food_setup_options');
function restaurant_fast_food_setup_options () {
    update_option('dismissed-get_started', FALSE );
}




add_action( 'wp_head', 'restaurant_fast_food_logo_width' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );
/**
 * Load Theme Web File
 */
require get_parent_theme_file_path('/inc/wptt-webfont-loader.php' );
/**
 * Load Toggle file
 */
require get_parent_theme_file_path( '/inc/controls/customize-control-toggle.php' );
/**
 * Load Theme About Page
 */
require get_parent_theme_file_path( '/inc/about-theme.php' );
/**
 * load sortable file
 */
require get_parent_theme_file_path( '/inc/controls/sortable-control.php' );

