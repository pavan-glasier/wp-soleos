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
			'page_title' 	=> __('Theme General Options', 'glasierinc'),
			'menu_title'	=> __('Theme Options', 'glasierinc'),
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