<?php
/**
 * Fumam functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fumam
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fumam_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Fumam, use a find and replace
		* to change 'fumam' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'fumam', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Menu Principal', 'fumam' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'fumam_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'fumam_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fumam_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fumam_content_width', 640 );
}
add_action( 'after_setup_theme', 'fumam_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fumam_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'fumam' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'fumam' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'fumam_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fumam_scripts() {
	wp_enqueue_style( 'fumam-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'fumam-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'fumam-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style('fumam-main-css', get_assets('/css/main.css'), [], _S_VERSION, 'all');
	wp_enqueue_style('fontawesome', get_assets('/css/fontawesome/css/all.min.css'), [], _S_VERSION, 'all');
	wp_enqueue_style('bootstrap-icons', get_assets('/css/bootstrap-icons/bootstrap-icons.css'), array(), _S_VERSION, 'all');

	wp_register_script('popper-js', get_assets('/js/bootstrap/popper.min.js'), array(), _S_VERSION, true);
	wp_enqueue_script('bootstrap-js', get_assets('/js/bootstrap/bootstrap.min.js'), array('jquery', 'popper-js'), _S_VERSION, true);
	wp_enqueue_script('fumam-main-js', get_assets('/js/main.js'), array(), _S_VERSION, true);
}
add_action( 'wp_enqueue_scripts', 'fumam_scripts' );

/* Image Size 
========================================================*/
add_image_size('page_banner', 1600, 320, true);

/* Menu Item Add Filter 
========================================================*/
function add_menu_item_class($classes, $item, $args, $depth) {

	if ( isset($args->li_class) ) {
		$classes[] = $args->li_class;
	}

	if ( isset($args->active_class) && in_array('current-menu-item', $classes) ) {
		$classes[] = $args->active_class;
	}

	return $classes;
}
add_filter( 'nav_menu_css_class', 'add_menu_item_class', 10, 4);

function add_menu_link_class($attrs, $item, $args, $depth) {

	if ( isset($args->link_class) ) {
		$attrs['class'] = $args->link_class;
	}

	return $attrs;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 10, 4);


/*  Cart Item Add Filter 
=========================================================*/

/**
 * Remove WooCommerce Styles
 */
add_filter( 'woocommerce_enqueue_styles', 'woocommerce_remove_styles' );
function woocommerce_remove_styles($enqueue_styles) {
	unset($enqueue_styles['woocommerce-general']);
	return $enqueue_styles;
}

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>

	<a 	href="<?php echo esc_url(wc_get_cart_url()); ?>" 
		class="cart-customlocation dropdown-toggle" 
		title="<?php echo esc_html__( 'Voir le panier' ); ?>">

		<i class="fas fa-cart-shopping cart-items-icon"></i>
		<span class="cart-items-count count header-icon-counter">
			<?php echo sprintf( '%d', $woocommerce->cart->cart_contents_count ); ?>
			<!-- <?php  echo sprintf ( _n( '%d item', '%d items', $woocommerce->cart->cart_contents_count ), $woocommerce->cart->cart_contents_count ); ?> – <?php echo $woocommerce->cart->get_cart_total(); ?> -->
		</span>
	</a>

	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Walker class.
 */
require get_template_directory() . '/classes/custom-walker-class.php';


/*
	Utils
	=======================================
*/
function get_assets($path) {
	return get_template_directory_uri() . $path;
}

function get_assets_url($path) {
	return get_template_directory_uri() . $path;
}

function assets_url($path) {
	echo get_template_directory_uri() . $path;
}


