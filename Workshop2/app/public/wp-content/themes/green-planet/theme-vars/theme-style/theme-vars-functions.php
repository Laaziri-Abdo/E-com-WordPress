<?php
/**
 * @package 	WordPress
 * @subpackage 	Green Planet
 * @version 	1.0.0
 * 
 * Theme Vars Functions
 * Created by CMSMasters
 * 
 */


/* Register CSS Styles */
function green_planet_vars_register_css_styles() {
	wp_enqueue_style('green-planet-theme-vars-style', get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/css/vars-style.css', array('green-planet-retina'), '1.0.0', 'screen, print');
}

add_action('wp_enqueue_scripts', 'green_planet_vars_register_css_styles');

