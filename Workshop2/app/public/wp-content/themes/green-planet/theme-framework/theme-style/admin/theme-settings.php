<?php 
/**
 * @package 	WordPress
 * @subpackage 	Green Planet
 * @version		1.0.0
 * 
 * Theme Admin Settings
 * Created by CMSMasters
 * 
 */


/* Color Settings */
function green_planet_theme_options_color_fields($options, $tab) {
	$defaults = green_planet_color_schemes_defaults();
	
	
	if ($tab != 'header' && $tab != 'navigation' && $tab != 'header_top') {
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'green-planet' . '_' . $tab . '_secondary', 
			'title' => esc_html__('Secondary Color', 'green-planet'), 
			'desc' => esc_html__('Secondary color for some elements', 'green-planet'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['secondary'] : $defaults['default']['secondary'] 
		);
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_color_fields_filter', 'green_planet_theme_options_color_fields', 10, 2);



