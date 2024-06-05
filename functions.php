<?php
/**
 * greentech functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package greentech
 */
$GREENTECH         = wp_get_theme();
$theme_version = $GREENTECH->get('Version');

if (WP_DEBUG) {
	$theme_version = current_time('timestamp'); //for development time only
}

define('GREENTECH_THEME_DIR', get_template_directory());
define('GREENTECH_THEME_URL', get_template_directory_uri());
define('GREENTECH_THEME_ASSETS_URI', get_template_directory_uri() . '/assets/');
define('GREENTECH_THEME_INC_DIR', get_template_directory() . '/inc/');
define('GREENTECH_THEME_LIB_DIR', get_template_directory() . '/libs/');
define('GREENTECH_THEME_VERSION', $theme_version);

// if ( ! defined( '_S_VERSION' ) ) {
// 	// Replace the version number of the theme on each release.
// 	define( '_S_VERSION', '1.0.0' );
// }

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function greentech_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on greentech, use a find and replace
		* to change 'greentech' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'greentech', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'greentech' ),
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
			'greentech_custom_background_args',
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
}
add_action( 'after_setup_theme', 'greentech_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function greentech_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'greentech_content_width', 640 );
}
add_action( 'after_setup_theme', 'greentech_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function greentech_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'greentech' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'greentech' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'greentech_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function greentech_scripts() {
	wp_enqueue_style( 'greentech-style', get_stylesheet_uri(), array(), GREENTECH_THEME_VERSION );

	wp_register_style('font_1',  'https://fonts.googleapis.com', array(), GREENTECH_THEME_VERSION);
	wp_register_style('font_2',  'https://fonts.gstatic.com', array(), GREENTECH_THEME_VERSION);
	wp_register_style('font_3',  'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap', array(), GREENTECH_THEME_VERSION);
	wp_register_style('font_awosome',  'https://use.fontawesome.com/releases/v5.15.4/css/all.css', array(), GREENTECH_THEME_VERSION);
	wp_register_style('bs_icon',  'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css', array(), GREENTECH_THEME_VERSION);
	wp_register_style('lib_lightbox',  GREENTECH_THEME_ASSETS_URI . 'lib/lightbox/css/lightbox.min.css', array(), GREENTECH_THEME_VERSION);
	wp_register_style('lib_carousel',  GREENTECH_THEME_ASSETS_URI . 'lib/owlcarousel/assets/owl.carousel.min.css', array(), GREENTECH_THEME_VERSION);
	wp_register_style('css_1', GREENTECH_THEME_ASSETS_URI . 'css/style.css', array(), GREENTECH_THEME_VERSION);
	wp_register_style('css_2', GREENTECH_THEME_ASSETS_URI . 'css/custom-style.css', array(), GREENTECH_THEME_VERSION);
	wp_register_style('bs', GREENTECH_THEME_ASSETS_URI . 'css/bootstrap.min.css', array(), GREENTECH_THEME_VERSION);
	


	wp_enqueue_style('font_1');
	wp_enqueue_style('font_2');
	wp_enqueue_style('font_3');
	wp_enqueue_style('bs_icon');
	wp_enqueue_style('lib_lightbox');
	wp_enqueue_style('lib_carousel');
	wp_enqueue_style('bs');
	wp_enqueue_style('css_1');
	wp_enqueue_style('css_2');
	wp_enqueue_style('font_awosome');

	//enqueue js


	$ajax_nonce = wp_create_nonce("GREENTECH_ajax_nonce");

	
	
	wp_register_script('bs_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"', array('jquery'), GREENTECH_THEME_VERSION, true);
	wp_register_script('easing_js', GREENTECH_THEME_ASSETS_URI . 'lib/easing/easing.min.js', array('jquery'), GREENTECH_THEME_VERSION, true);
	wp_register_script('waypoints_js', GREENTECH_THEME_ASSETS_URI . 'lib/waypoints/waypoints.min.js', array('jquery'), GREENTECH_THEME_VERSION, true);
	wp_register_script('lightbox_js', GREENTECH_THEME_ASSETS_URI . 'lib/lightbox/js/lightbox.min.js', array('jquery'), GREENTECH_THEME_VERSION, true);
	wp_register_script('carousel_js', GREENTECH_THEME_ASSETS_URI . 'lib/owlcarousel/owl.carousel.min.js', array('jquery'), GREENTECH_THEME_VERSION, true);



	wp_register_script('main_js', GREENTECH_THEME_ASSETS_URI . 'js/main.js', array('jquery'), GREENTECH_THEME_VERSION, true);

	wp_register_script('custome_js', GREENTECH_THEME_ASSETS_URI . 'js/custom.js', array('jquery'), GREENTECH_THEME_VERSION, true);

	wp_localize_script('main_js', 'action_url_ajax', array(
		'ajax_url' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('ajax-nonce')
	));

	wp_enqueue_script('bs_js');
	wp_enqueue_script('easing_js');
	wp_enqueue_script('waypoints_js');
	wp_enqueue_script('lightbox_js');
	wp_enqueue_script('carousel_js');
	wp_enqueue_script('main_js');
	wp_enqueue_script('custome_js');
	

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}





}
add_action( 'wp_enqueue_scripts', 'greentech_scripts' );



function admin_enqueue_scripts_load()
{



	wp_register_script('sweet-alert-admin', 'https://cdn.jsdelivr.net/npm/sweetalert2@11', array(), GREENTECH_THEME_VERSION, true);

	wp_enqueue_script('sweet-alert-admin');

	wp_enqueue_media();

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('admin_enqueue_scripts', 'admin_enqueue_scripts_load');

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

require get_template_directory() . '/inc/custom-post-create.php';

require get_template_directory() . '/inc/nav-menu.php';

require get_template_directory() . '/inc/settings-api.php';

function dd(...$vars) {
    foreach ($vars as $var) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }
    die();
}

add_action('wp_ajax_case_study_load_more', 'case_study_load_more');
add_action('wp_ajax_nopriv_case_study_load_more', 'case_study_load_more');

function case_study_load_more()
{
	$offset=$_POST['offset'];
	$limit=$_POST['limit'];
	global $wpdb;
	$posttable=$wpdb->prefix.'posts';
	
	$greentech_case_study = $wpdb->get_results("SELECT * from $posttable as wp_posts where wp_posts.post_type='greentech_case_study' and wp_posts.post_status = 'publish'  ORDER BY wp_posts.menu_order, wp_posts.post_date desc limit $limit offset $offset;");
	
	$offset=$offset+6;

	$greentech_case_empty = $wpdb->get_results("SELECT * from $posttable as wp_posts where wp_posts.post_type='greentech_case_study' and wp_posts.post_status = 'publish'  ORDER BY wp_posts.menu_order, wp_posts.post_date desc limit $limit offset $offset;");
    $html='';
	foreach($greentech_case_study as $key=>$value)
	{
        $html .='<div class="col-md-6 col-lg-4 col-xl-4">
		<a class="_single_item" href="'.get_the_permalink($value->ID).'">
		  <div
			class="rounded position-relative fruite-item border border-secondary bg-light"
		  >
			<div class="fruite-img">
			  <img
				src="'.get_the_post_thumbnail_url($value->ID).'"
				class="img-fluid w-100 rounded-top"
				alt=""
			  />
			</div>
			<div
			  class="text-white bg-primary px-3 py-1 rounded position-absolute"
			  style="top: 10px; left: 10px"
			>
			  '.get_post_meta($value->ID, 'image_headings', true).'
			</div>
			<div class="p-3 rounded-bottom text-dark">
			  <h5>
				'.$value->post_title.'
			  </h5>
			  <span class="small_text">
				<i class="fas fa-map-marker-alt me-2 text-primary"></i>
				
				'.get_post_meta($value->ID, 'country', true).'
			  </span>
			  <p class="mt-2 mb-0 small_text">
			   '.$value->post_content.'
			  </p>
			</div>
		  </div>
		</a>
	  </div>';
	}
    echo json_encode(
		[
			'html'=>$html,
			'greentech_case_empty'=>empty($greentech_case_empty) ? true : false,
		]
	
	  ); 
	wp_die();
}



add_action('wp_ajax_what_we_do_load_more', 'what_we_do_load_more');
add_action('wp_ajax_nopriv_what_we_do_load_more', 'what_we_do_load_more');

function what_we_do_load_more()
{
	$offset=$_POST['offset'];
	$limit=$_POST['limit'];
	global $wpdb;
	$posttable=$wpdb->prefix.'posts';
	
	$greentech_what_we_do = $wpdb->get_results("SELECT * from $posttable as wp_posts where wp_posts.post_type='greentech_what_we_do' and wp_posts.post_status = 'publish'  ORDER BY wp_posts.menu_order, wp_posts.post_date desc limit $limit offset $offset;");
	
	$offset=$offset+6;

	$greentech_what_we_do_empty = $wpdb->get_results("SELECT * from $posttable as wp_posts where wp_posts.post_type='greentech_what_we_do' and wp_posts.post_status = 'publish'  ORDER BY wp_posts.menu_order, wp_posts.post_date desc limit $limit offset $offset;");
    $html='';
	foreach($greentech_what_we_do as $key=>$value)
	{
        $html .='<div class="col-md-6 col-lg-4">
		<div
		  class="service-item bg-primary rounded border border-secondary"
		>
		  <img
			src="'.get_the_post_thumbnail_url($value->ID).'"
			class="img-fluid rounded-top w-100"
			alt=""
		  />
		  <div class="content_column_main px-4 rounded-bottom">
			<div class="service-content bg-light text-center p-3 rounded">
			  <h3 class="mb-2 text-primary">'.$value->post_title.'</h3>
			  <p class="mb-0">
			  '.$value->post_content.'
			  </p>
			</div>
		  </div>
		</div>
	  </div>';
	}
    echo json_encode(
		[
			'html'=>$html,
			'greentech_what_we_do_empty'=>empty($greentech_what_we_do_empty) ? true : false,
		]
	
	  ); 
	wp_die();
}


function option_page_site_information()
{
	//echo "touhid";
	$security = $_POST['nonce'];
	if (!wp_verify_nonce($security, 'admin-ajax-nonce')) {
		echo 'Hei Dear, What are you looking for?';
	} else {
		$formdata = array();
		parse_str($_POST['formdata'], $formdata);
		foreach ($formdata as $key => $value) {

			update_option($key,  $value);
		}

		$resposedata = array(
			'success' => 'success'
		);
		echo json_encode($resposedata);
	}
	wp_die();
}
add_action('wp_ajax_option_page_site_information', 'option_page_site_information');

function option_page_display_options_social()
{
	$security = $_POST['nonce'];
	if (!wp_verify_nonce($security, 'admin-ajax-nonce')) {
		echo 'Hei Dear, What are you looking for?';
	} else {
		$formdata = array();
		parse_str($_POST['formdata'], $formdata);
		foreach ($formdata as $key => $value) {

			update_option($key,  esc_url($value));
		}

		$resposedata = array(
			'success' => 'success'
		);
		echo json_encode($resposedata);
	}
	wp_die();
}
add_action('wp_ajax_option_page_display_options_social', 'option_page_display_options_social');