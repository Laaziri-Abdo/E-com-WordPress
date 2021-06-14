<?php
/**
 * @package 	WordPress
 * @subpackage 	Green Planet
 * @version 	1.0.0
 * 
 * CMSMasters Donations Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts */
require_once(get_template_directory() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/plugin-colors.php');
require_once(get_template_directory() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/plugin-fonts.php');
require_once(get_template_directory() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/plugin-template-functions.php');


/* Register CSS Styles and Scripts */
function green_planet_donations_register_styles_scripts() {
	// Styles
	wp_enqueue_style('green-planet-donations-style', get_template_directory_uri() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/plugin-style.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('green-planet-donations-adaptive', get_template_directory_uri() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/plugin-adaptive.css', array(), '1.0.0', 'screen');
	
	
	if (is_rtl()) {
		wp_enqueue_style('green-planet-donations-rtl', get_template_directory_uri() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/plugin-rtl.css', array(), '1.0.0', 'screen');
	}

	// Scripts
	wp_enqueue_script('green-planet-donations-script', get_template_directory_uri() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/js/jquery.plugin-script.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'green_planet_donations_register_styles_scripts');



/* Scripts for Admin */
function green_planet_donations_admin_scripts() {
	$cmsmasters_option = green_planet_get_global_options();
	
	
	wp_enqueue_script('cmsmasters-donations-theme-settings-toggle', get_template_directory_uri() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/admin/js/plugin-settings-toggle.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('cmsmasters-donations-theme-settings-toggle', 'cmsmasters_plugin_settings', array( 
		'shortname' => 	'green-planet' 
	));
}

add_action('admin_enqueue_scripts', 'green_planet_donations_admin_scripts');


/* Register Post Types in Author & Date Archive */
function green_planet_donations_archive($post_types) {
	$post_types[] = 'campaign';
	
	
	return $post_types;
}

add_filter('post_types_archive_filter', 'green_planet_donations_archive');


/* Donation Page Layout */
function green_planet_donations_donation_page_layout($cmsmasters_layout) {
	if (is_singular('donation')) {
		$cmsmasters_layout = 'fullwidth';
	}
	
	
	return $cmsmasters_layout;
}

add_filter('cmsmasters_theme_page_layout_filter', 'green_planet_donations_donation_page_layout');

