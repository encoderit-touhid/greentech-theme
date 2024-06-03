<?php 


function greentech_cpts()
{

	
	
	register_post_type(
		'greentech_products',
		array(
			'labels' => array(
				'name' => __('Products'),
				'singular_name' => __('Product')
			),
			'public' => true,
			'show_in_menu' => 'greentech_theme_menu_cpt',
			'has_archive' => false,
			'supports' => array('title', 'thumbnail', 'editor')
		)
	);
	register_post_type(
		'greentech_services',
		array(
			'labels' => array(
				'name' => __('Services'),
				'singular_name' => __('Service')
			),
			'public' => true,
			'show_in_menu' => 'greentech_theme_menu_cpt',
			'has_archive' => false,
			'supports' => array('title', 'thumbnail', 'editor')
		)
	);
    
	register_post_type(
		'greentech_sectors',
		array(
			'labels' => array(
				'name' => __('Sectors'),
				'singular_name' => __('Sector')
			),
			'public' => true,
			'show_in_menu' => 'greentech_theme_menu_cpt',
			'has_archive' => false,
			'supports' => array('title', 'thumbnail', 'editor')
		)
	);
	
	register_post_type(
		'greentech_reviews',
		array(
			'labels' => array(
				'name' => __('Reviews'),
				'singular_name' => __('Review')
			),
			'public' => true,
			'show_in_menu' => 'greentech_theme_menu_cpt',
			'has_archive' => false,
			'supports' => array('title', 'thumbnail', 'editor')
		)
	);
	register_post_type(
		'greentech_case_study',
		array(
			'labels' => array(
				'name' => __('Case Studies'),
				'singular_name' => __('Case Study')
			),
			'public' => true,
			'show_in_menu' => 'greentech_theme_menu_cpt',
			'has_archive' => false,
			'supports' => array('title', 'thumbnail', 'editor')
		)
	);
	register_post_type(
		'greentech_what_we_do',
		array(
			'labels' => array(
				'name' => __('What we do'),
				'singular_name' => __('What we do')
			),
			'public' => true,
			'show_in_menu' => 'greentech_theme_menu_cpt',
			'has_archive' => false,
			'supports' => array('title', 'thumbnail', 'editor')
		)
	);

}

add_action("init", "greentech_cpts");

function greentech_cpts_admin_menu() {
    add_menu_page(
        'Green Tech CPT',
        'Green Tech CPT',
        'manage_options',
        'greentech_theme_menu_cpt',
        '', 
        'dashicons-calendar',
        10
    );
}

add_action( 'admin_menu', 'greentech_cpts_admin_menu' );

