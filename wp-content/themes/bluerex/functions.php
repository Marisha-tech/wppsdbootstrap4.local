<?php
/**
 * bluerex functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bluerex
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'bluerex_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bluerex_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bluerex, use a find and replace
		 * to change 'bluerex' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bluerex', get_template_directory() . '/languages' );

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
				'header_menu' => esc_html__( 'Header Menu', 'bluerex' ),
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
				'bluerex_custom_background_args',
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
				'height'      => 69,
				'width'       => 62,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'bluerex_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bluerex_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bluerex_content_width', 640 );
}
add_action( 'after_setup_theme', 'bluerex_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bluerex_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bluerex' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'bluerex' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bluerex_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bluerex_scripts() {
	wp_enqueue_style( 'bluerex-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'bluerex-boostrap-css', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css', array(), _S_VERSION );
    //wp_enqueue_style( 'bluerex-fontawesome-css', 'https://kit.fontawesome.com/7b292b2c1c.js', array(), _S_VERSION );
    wp_enqueue_style( 'bluerex-googlefonts-css', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Poppins:wght@400;600;700&display=swap', array(), _S_VERSION );
    wp_enqueue_style( 'bluerex-baguetteBox-css', get_template_directory_uri().'/assets/css/baguetteBox.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'bluerex-style-css', get_template_directory_uri().'/assets/css/style.css', array(), _S_VERSION );

    //wp_style_add_data( 'bluerex-style', 'rtl', 'replace' );

    wp_deregister_script('jquery');
    wp_register_script('jquery',get_template_directory_uri().'/assets/js/jquery-3.5.1.min.js');
    wp_enqueue_script('jquery');

	//wp_enqueue_script( 'bluerex-jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'bluerex-popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '', true );
    wp_enqueue_script( 'bluerex-bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), '', true );
    wp_enqueue_script( 'bluerex-baguetteBox-js', get_template_directory_uri() . '/assets/js/baguetteBox.min.js', array(), '', true );
    wp_enqueue_script( 'bluerex-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '', true );
    wp_enqueue_script( 'bluerex-fontawesome-js', 'https://kit.fontawesome.com/7b292b2c1c.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bluerex_scripts' );

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
//Custom code
function bluerex_debug($data)
{
    echo '<pre>'. print_r($data, 1) . '</pre>';
}

function bluerex_get_background($field, $cat = null, $cover = true)
{
    if (get_field($field, $cat))
    {
        $add_style = $cover ? 'background-size: cover' : '';
        return ' style="background: url('.get_field($field, $cat) . ') center no-repeat; '.$add_style . '"';
    }
    return null;
}
add_action( 'init', 'bluerex_reviews' );
function bluerex_reviews(){
    register_post_type( 'reviews', [
        'labels' => [
            'name'               => 'Отзывы', // основное название для типа записи
            'singular_name'      => 'Отзыв', // название для одной записи этого типа
            'add_new'            => __('Добавить новый отзыв', 'bluerex'), // для добавления новой записи
            'add_new_item'       => __('Новый отзыв', 'bluerex'), // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => __('Редактировать', 'bluerex'), // для редактирования типа записи
            'new_item'           => __('Новый отзыв', 'bluerex'), // текст новой записи
            'view_item'          => __('Посмотреть', 'bluerex'), // для просмотра записи этого типа.
            'menu_name'          => 'Отзывы клиентов', // название меню
            'all_items'          => 'Все отзывы'
        ],
        'public'              => true,
        'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'menu_icon'           => 'dashicons-universal-access',
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
    ] );
}
