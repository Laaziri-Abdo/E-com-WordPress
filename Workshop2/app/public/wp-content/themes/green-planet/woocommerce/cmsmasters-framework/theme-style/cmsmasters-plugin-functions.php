<?php
/**
 * @package 	WordPress
 * @subpackage 	Green Planet
 * @version 	1.0.5
 * 
 * WooCommerce Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts */
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/admin/plugin-settings.php');
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/admin/plugin-options.php');
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/plugin-colors.php');
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/plugin-fonts.php');
require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/plugin-template-functions.php');


if (CMSMASTERS_CONTENT_COMPOSER && class_exists('Cmsmasters_Content_Composer')) {
	require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/cmsmasters-c-c-plugin-functions.php');
	
	require_once(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/cmsmasters-c-c-plugin-shortcodes.php');
}


/* Register CSS Styles and Scripts */
function green_planet_woocommerce_register_styles_scripts() {
	// Styles
	wp_enqueue_style('green-planet-woocommerce-style', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/plugin-style.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('green-planet-woocommerce-adaptive', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/plugin-adaptive.css', array(), '1.0.0', 'screen');
	
	
	if (is_rtl()) {
		wp_enqueue_style('green-planet-woocommerce-rtl', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/plugin-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	// Scripts
	wp_enqueue_script('green-planet-woocommerce-script', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/js/jquery.plugin-script.js', array('jquery'), '1.0.0', true);
	
	
	$cart_currency_symbol = get_woocommerce_currency_symbol();
	
	$cart_currency_symbol_pos = get_option('woocommerce_currency_pos');
	
	$currency_symbol = $cart_currency_symbol;
	
	
	if ($cart_currency_symbol_pos == 'left_space') {
		$currency_symbol = $cart_currency_symbol . ' ';
	} elseif ($cart_currency_symbol_pos == 'right_space') {
		$currency_symbol = ' ' . $cart_currency_symbol;
	}
	
	
	$cmsmasters_image_sizes = green_planet_get_image_thumbnail_list();
	
	
	wp_localize_script('green-planet-woocommerce-script', 'cmsmasters_woo_script', array( 
		'currency_symbol' => 			$currency_symbol, 
		'thumbnail_image_width' => 		$cmsmasters_image_sizes['cmsmasters-small-thumb']['width'], 
		'thumbnail_image_height' => 	$cmsmasters_image_sizes['cmsmasters-small-thumb']['height'] 
	));
}

add_action('wp_enqueue_scripts', 'green_planet_woocommerce_register_styles_scripts');


/* Scripts for Admin */
function green_planet_woocommerce_admin_scripts() {
	wp_enqueue_script('green-planet-settings-toggle', get_template_directory_uri() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/admin/js/plugin-settings-toggle.js', array('jquery'), '1.0.0', true);

	wp_localize_script('green-planet-settings-toggle', 'cmsmasters_woocommerce_settings', array(
		'shortname' => 	'green-planet'
	));
}

add_action('admin_enqueue_scripts', 'green_planet_woocommerce_admin_scripts');


/* Register Default Woocommerce Theme Sidebar */
function green_planet_woocommerce_the_widgets_init() {
    if (!function_exists('register_sidebars')) {
        return;
    }
    
	register_sidebar(
		array(
			'name' => esc_html__('Shop Sidebar', 'green-planet'), 
			'id' => 'sidebar_shop', 
			'description' => esc_html__('Widgets in this area will be shown in left or right sidebar on shop page.', 'green-planet'), 
			'before_widget' => '<aside id="%1$s" class="widget %2$s">', 
			'after_widget' => '</aside>', 
			'before_title' => '<h3 class="widgettitle">', 
			'after_title' => '</h3>'
		)
	);
}

add_action('widgets_init', 'green_planet_woocommerce_the_widgets_init');



function green_planet_woocommerce_demo_store($html, $notice) {
	return '<div class="woocommerce-store-notice demo_store">' . 
		'<a href="#" class="cmsmasters_theme_icon_cancel woocommerce-store-notice__dismiss-link"></a>' . 
		'<p>' . wp_kses_post($notice) . '</p>' . 
	'</div>';
}

add_filter('woocommerce_demo_store', 'green_planet_woocommerce_demo_store', 10, 2);


function green_planet_woocommerce_support() {
    add_theme_support('woocommerce', array( 
		'thumbnail_image_width' => 540, 
		'single_image_width' => 600 
	));
}

add_action('after_setup_theme', 'green_planet_woocommerce_support');

add_filter('woocommerce_enqueue_styles', '__return_false');

