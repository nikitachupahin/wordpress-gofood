<?php
/**
 * Restaurant Fast Food Theme Page
 *
 * @package Restaurant Fast Food
 */

function restaurant_fast_food_admin_scripts() {
	wp_dequeue_script('restaurant-fast-food-custom-scripts');
}
add_action( 'admin_enqueue_scripts', 'restaurant_fast_food_admin_scripts' );

if ( ! defined( 'RESTAURANT_FAST_FOOD_FREE_THEME_URL' ) ) {
	define( 'RESTAURANT_FAST_FOOD_FREE_THEME_URL', 'https://www.themespride.com/products/free-restaurant-wordpress-theme' );
}
if ( ! defined( 'RESTAURANT_FAST_FOOD_PRO_THEME_URL' ) ) {
	define( 'RESTAURANT_FAST_FOOD_PRO_THEME_URL', 'https://www.themespride.com/products/fast-food-wordpress-theme' );
}
if ( ! defined( 'RESTAURANT_FAST_FOOD_DEMO_THEME_URL' ) ) {
	define( 'RESTAURANT_FAST_FOOD_DEMO_THEME_URL', 'https://page.themespride.com/restaurant-fast-food/' );
}
if ( ! defined( 'RESTAURANT_FAST_FOOD_DOCS_THEME_URL' ) ) {
    define( 'RESTAURANT_FAST_FOOD_DOCS_THEME_URL', 'https://page.themespride.com/demo/docs/restaurant-fast-food/' );
}
if ( ! defined( 'RESTAURANT_FAST_FOOD_RATE_THEME_URL' ) ) {
    define( 'RESTAURANT_FAST_FOOD_RATE_THEME_URL', 'https://wordpress.org/support/theme/restaurant-fast-food/reviews/' );
}
if ( ! defined( 'RESTAURANT_FAST_FOOD_CHANGELOG_THEME_URL' ) ) {
    define( 'RESTAURANT_FAST_FOOD_CHANGELOG_THEME_URL', get_template_directory() . '/readme.txt' );
}
if ( ! defined( 'RESTAURANT_FAST_FOOD_SUPPORT_THEME_URL' ) ) {
    define( 'RESTAURANT_FAST_FOOD_SUPPORT_THEME_URL', 'https://www.themespride.com/products/wordpress-theme-bundle/' );
}


/**
 * Add theme page
 */
function restaurant_fast_food_menu() {
	add_theme_page( esc_html__( 'About Theme', 'restaurant-fast-food' ), esc_html__( 'About Theme', 'restaurant-fast-food' ), 'edit_theme_options', 'restaurant-fast-food-about', 'restaurant_fast_food_about_display' );
}
add_action( 'admin_menu', 'restaurant_fast_food_menu' );

/**
 * Display About page
 */
function restaurant_fast_food_about_display() {
	$restaurant_fast_food_theme = wp_get_theme();
	?>
	<div class="wrap about-wrap full-width-layout">
		<h1><?php echo esc_html( $restaurant_fast_food_theme ); ?></h1>
		<div class="about-theme">
			<div class="theme-description">
				<p class="about-text">
					<?php
					// Remove last sentence of description.
					$restaurant_fast_food_description = explode( '. ', $restaurant_fast_food_theme->get( 'Description' ) );

					array_pop( $restaurant_fast_food_description );

					$restaurant_fast_food_description = implode( '. ', $restaurant_fast_food_description );

					echo esc_html( $restaurant_fast_food_description . '.' );
				?></p>
				<p class="actions">
					<a target="_blank" href="<?php echo esc_url( RESTAURANT_FAST_FOOD_FREE_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Theme Info', 'restaurant-fast-food' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( RESTAURANT_FAST_FOOD_DEMO_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'View Demo', 'restaurant-fast-food' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( RESTAURANT_FAST_FOOD_DOCS_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Theme Instructions', 'restaurant-fast-food' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( RESTAURANT_FAST_FOOD_RATE_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Rate this theme', 'restaurant-fast-food' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( RESTAURANT_FAST_FOOD_PRO_THEME_URL ); ?>" class="green button button-secondary" target="_blank"><?php esc_html_e( 'Upgrade to pro', 'restaurant-fast-food' ); ?></a>
				</p>
			</div>

			<div class="theme-screenshot">
				<img src="<?php echo esc_url( $restaurant_fast_food_theme->get_screenshot() ); ?>" />
			</div>

		</div>

		<nav class="nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'restaurant-fast-food' ); ?>">
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'restaurant-fast-food-about' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['page'] ) && 'restaurant-fast-food-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'About', 'restaurant-fast-food' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'restaurant-fast-food-about', 'tab' => 'free_vs_pro' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Compare free Vs Pro', 'restaurant-fast-food' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'restaurant-fast-food-about', 'tab' => 'changelog' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Changelog', 'restaurant-fast-food' ); ?></a>
		</nav>

		<?php
			restaurant_fast_food_main_screen();

			restaurant_fast_food_changelog_screen();

			restaurant_fast_food_free_vs_pro();
		?>

		<div class="return-to-dashboard">
			<?php if ( current_user_can( 'update_core' ) && isset( $_GET['updated'] ) ) : ?>
				<a href="<?php echo esc_url( self_admin_url( 'update-core.php' ) ); ?>">
					<?php is_multisite() ? esc_html_e( 'Return to Updates', 'restaurant-fast-food' ) : esc_html_e( 'Return to Dashboard &rarr; Updates', 'restaurant-fast-food' ); ?>
				</a> |
			<?php endif; ?>
			<a href="<?php echo esc_url( self_admin_url() ); ?>"><?php is_blog_admin() ? esc_html_e( 'Go to Dashboard &rarr; Home', 'restaurant-fast-food' ) : esc_html_e( 'Go to Dashboard', 'restaurant-fast-food' ); ?></a>
		</div>
	</div>
	<?php
}

/**
 * Output the main about screen.
 */
function restaurant_fast_food_main_screen() {
	if ( isset( $_GET['page'] ) && 'restaurant-fast-food-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) {
	?>
		<div class="feature-section two-col">
			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Theme Customizer', 'restaurant-fast-food' ); ?></h2>
				<p><?php esc_html_e( 'All Theme Options are available via Customize screen.', 'restaurant-fast-food' ) ?></p>
				<p><a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Customize', 'restaurant-fast-food' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Got theme support question?', 'restaurant-fast-food' ); ?></h2>
				<p><?php esc_html_e( 'Get genuine support from genuine people. Whether it\'s customization or compatibility, our seasoned developers deliver tailored solutions to your queries.', 'restaurant-fast-food' ) ?></p>
				<p><a target="_blank" href="<?php echo esc_url( RESTAURANT_FAST_FOOD_SUPPORT_THEME_URL ); ?>" class="button button-primary"><?php esc_html_e( 'Support Forum', 'restaurant-fast-food' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Upgrade To Premium With Straight 20% OFF.', 'restaurant-fast-food' ); ?></h2>
				<p><?php esc_html_e( 'Get our amazing WordPress theme with exclusive 20% off use the coupon', 'restaurant-fast-food' ) ?>"<input type="text" value="GETPro20" id="myInput">".</p>
				<button class="button button-primary"><?php esc_html_e( 'GETPro20', 'restaurant-fast-food' ); ?></button>
			</div>
		</div>
	<?php
	}
}

/**
 * Output the changelog screen.
 */
function restaurant_fast_food_changelog_screen() {
	if ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) {
		global $wp_filesystem;
	?>
		<div class="wrap about-wrap">

			<p class="about-description"><?php esc_html_e( 'View changelog below:', 'restaurant-fast-food' ); ?></p>

			<?php
				$changelog_file = apply_filters( 'restaurant_fast_food_changelog_file', RESTAURANT_FAST_FOOD_CHANGELOG_THEME_URL );
				// Check if the changelog file exists and is readable.
				if ( $changelog_file && is_readable( $changelog_file ) ) {
					WP_Filesystem();
					$changelog = $wp_filesystem->get_contents( $changelog_file );
					$changelog_list = restaurant_fast_food_parse_changelog( $changelog );

					echo wp_kses_post( $changelog_list );
				}
			?>
		</div>
	<?php
	}
}

/**
 * Parse changelog from readme file.
 * @param  string $content
 * @return string
 */
function restaurant_fast_food_parse_changelog( $content ) {
	// Explode content with ==  to juse separate main content to array of headings.
	$content = explode ( '== ', $content );

	$changelog_isolated = '';

	// Get element with 'Changelog ==' as starting string, i.e isolate changelog.
	foreach ( $content as $key => $value ) {
		if (strpos( $value, 'Changelog ==') === 0) {
	    	$changelog_isolated = str_replace( 'Changelog ==', '', $value );
	    }
	}

	// Now Explode $changelog_isolated to manupulate it to add html elements.
	$changelog_array = explode( '= ', $changelog_isolated );

	// Unset first element as it is empty.
	unset( $changelog_array[0] );

	$changelog = '<pre class="changelog">';

	foreach ( $changelog_array as $value) {
		// Replace all enter (\n) elements with </span><span> , opening and closing span will be added in next process.
		$value = preg_replace( '/\n+/', '</span><span>', $value );

		// Add openinf and closing div and span, only first span element will have heading class.
		$value = '<div class="block"><span class="heading">= ' . $value . '</span></div>';

		// Remove empty <span></span> element which newr formed at the end.
		$changelog .= str_replace( '<span></span>', '', $value );
	}

	$changelog .= '</pre>';

	return wp_kses_post( $changelog );
}

/**
 * Import Demo data for theme using catch themes demo import plugin
 */
function restaurant_fast_food_free_vs_pro() {
	if ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) {
	?>
		<div class="wrap about-wrap">

			<p class="about-description"><?php esc_html_e( 'View Free vs Pro Table below:', 'restaurant-fast-food' ); ?></p>
			<div class="vs-theme-table">
				<table>
					<thead>
						<tr><th scope="col"></th>
							<th class="head" scope="col"><?php esc_html_e( 'Free Theme', 'restaurant-fast-food' ); ?></th>
							<th class="head" scope="col"><?php esc_html_e( 'Pro Theme', 'restaurant-fast-food' ); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><span><?php esc_html_e( 'Theme Demo Set Up', 'restaurant-fast-food' ); ?></span></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Additional Templates, Color options and Fonts', 'restaurant-fast-food' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Included Demo Content', 'restaurant-fast-food' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Section Ordering', 'restaurant-fast-food' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Multiple Sections', 'restaurant-fast-food' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Additional Plugins', 'restaurant-fast-food' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Premium Technical Support', 'restaurant-fast-food' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Access to Support Forums', 'restaurant-fast-food' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Free updates', 'restaurant-fast-food' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Unlimited Domains', 'restaurant-fast-food' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Responsive Design', 'restaurant-fast-food' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Live Customizer', 'restaurant-fast-food' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td class="feature feature--empty"></td>
							<td class="feature feature--empty"></td>
							<td headers="comp-2" class="td-btn-2"><a  href="<?php echo esc_url( RESTAURANT_FAST_FOOD_PRO_THEME_URL ); ?>" target="_blank"><?php esc_html_e( 'Go For Premium', 'restaurant-fast-food' ); ?></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	<?php
	}
}
