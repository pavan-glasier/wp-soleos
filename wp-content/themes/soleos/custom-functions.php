<?php

/**
 * soleos custom style css adding
 *
 */

if (!function_exists('soleos_style_css')) {
	function soleos_style_css()
	{
		wp_enqueue_style('icon', get_template_directory_uri() . '/assets/css/icon.css', array(), 'all');
		wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), 'all');
		wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), 'all');
		wp_enqueue_style('owl-carousal-min', get_template_directory_uri() . '/assets/css/owl-carousal.min.css', array(), 'all');
		wp_enqueue_style('metismenu', get_template_directory_uri() . '/assets/css/metismenu.css', array(), 'all');
		wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.css', array(), 'all');
		wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 'all');
		wp_enqueue_style('style-min', get_template_directory_uri() . '/assets/css/style.css', array(), 'all');
		// wp_enqueue_style('fontAwesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');
		// wp_enqueue_style('fontsPoppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700&display=swap');
	}
	add_action('wp_head', 'soleos_style_css', 1);
}


if (!function_exists('soleos_script_js')) {
	function soleos_script_js()
	{
		wp_enqueue_script('jquery-min', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), true);
		wp_enqueue_script('modernizr-min', get_template_directory_uri() . '/assets/js/modernizr.min.js', array(), true);
		wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.js', array(), true);
		wp_enqueue_script('popper-min', get_template_directory_uri() . '/assets/js/popper.min.js', array(), true);
		wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), true);
		wp_enqueue_script('isotope-pkgd', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), true);
		wp_enqueue_script('imageload-min', get_template_directory_uri() . '/assets/js/imageload.min.js', array(), true);
		wp_enqueue_script('scrollUp-min', get_template_directory_uri() . '/assets/js/scrollUp.min.js', array(), true);
		wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), true);
		wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array(), true);
		wp_enqueue_script('counterup-min', get_template_directory_uri() . '/assets/js/counterup.min.js', array(), true);
		wp_enqueue_script('wow-min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), true);
		wp_enqueue_script('metismenu', get_template_directory_uri() . '/assets/js/metismenu.js', array(), true);
		//wp_enqueue_script('ajax-mail', get_template_directory_uri() . '/assets/js/ajax-mail.js', array(), true);
		wp_enqueue_script('active', get_template_directory_uri() . '/assets/js/active.js', array(), true);
	}
	add_action('wp_footer', 'soleos_script_js');
}



if (!function_exists('add_lang_item_to_nav_menu')) {
	add_filter('wp_nav_menu_items', 'add_lang_item_to_nav_menu', 10, 2);
	function add_lang_item_to_nav_menu($items, $args)
	{
		if ($args->theme_location == 'header-menu') {
			$items .= '<li class="languages">
							<select name="languages">
								<option value="en">EN</option>
								<option value="es">ES</option>
								<option value="pt">PT</option>
								<option value="fr">FR</option>
								<option value="zh">ZH</option>
							</select>
						</li>';
		}
		return $items;
	}
}


add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

	if (function_exists('acf_add_options_page')) {
		// Theme General Options
		$general_options   = array(
			'page_title' 	=> __('Theme General Options', 'soleos'),
			'menu_title'	=> __('Theme Options', 'soleos'),
			'menu_slug' 	=> 'theme-general-options',
			'capability'	=> 'edit_posts',
			'redirect'	=> true,
			'icon_url'      => 'dashicons-screenoptions',
    		'position'      => 2
		);
		acf_add_options_page($general_options);

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Header',
			'menu_title'	=> 'Theme Header',
			'parent_slug'	=> 'theme-general-options',
		));
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Footer',
			'menu_title'	=> 'Theme Footer',
			'parent_slug'	=> 'theme-general-options',
		));
	}

}


// add css file in admin for acf
function acf_admin_theme_style()
{
  wp_enqueue_style( 'acf-admin', get_template_directory_uri() . '/assets/css/acf-admin.css' );
}
add_action('admin_enqueue_scripts', 'acf_admin_theme_style');
add_action('login_enqueue_scripts', 'acf_admin_theme_style');


// service post type register
/**
 * Post Type: Services.
 */
function register_soleos_services() {
	$labels = [
		"name" => __( "Services", "soleos" ),
		"singular_name" => __( "Services", "soleos" ),
	];
	$args = [
		"label" => __( "Services", "soleos" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "services", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-grid-view",
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
		"show_in_graphql" => false,
	];
	register_post_type( "services", $args );
}
add_action( 'init', 'register_soleos_services' );


/**
 * Taxonomy: Service Category.
 */
function register_soleos_service_category() {
	$labels = [
		"name" => __( "Service Categories", "soleos" ),
		"singular_name" => __( "Category", "soleos" ),
	];	
	$args = [
		"label" => __( "Categories", "soleos" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'service_category', 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "service_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "service_category", [ "services" ], $args );
}
add_action( 'init', 'register_soleos_service_category' );





/**
 * Post Type: Testimonial.
 */
function register_soleos_testimonial() {
	$labels = [
		"name" => __( "Testimonial", "soleos" ),
		"singular_name" => __( "Testimonial", "soleos" ),
	];
	$args = [
		"label" => __( "Testimonial", "soleos" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "testimonial", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-editor-quote",
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
		"show_in_graphql" => false,
	];
	register_post_type( "testimonial", $args );
}
add_action( 'init', 'register_soleos_testimonial' );


/**
 * Taxonomy: Testimonial Category.
 */
function register_soleos_testi_category() {
	$labels = [
		"name" => __( "Testimonial Categories", "soleos" ),
		"singular_name" => __( "Category", "soleos" ),
	];
	$args = [
		"label" => __( "Categories", "soleos" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'testi_category', 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "testi_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "testi_category", [ "testimonial" ], $args );
}
add_action( 'init', 'register_soleos_testi_category' );




// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
	global $wp_version;
	if ( $wp_version !== '4.7.1' ) {
	   return $data;
	}
	$filetype = wp_check_filetype( $filename, $mimes );
	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
  }, 10, 4 );
  
  function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg';
	return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );
  

// active class add in current active nav item
add_filter('nav_menu_css_class' , 'special_nav_class' , 10, 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}


// add class in nav menu link in mobile menu
function add_specific_menu_location_atts( $atts, $item, $args ) {
	if( in_array('menu-item-has-children', $item->classes) ){
		if( $args->menu->name == 'MobileMenu' ) {
			$atts['class'] = 'has-arrow';
		}
	}
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );
