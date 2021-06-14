<?php 
/**
 * @package 	WordPress
 * @subpackage 	Green Planet
 * @version 	1.0.4
 * 
 * Tribe Events Admin Settings
 * Created by CMSMasters
 * 
 */


/* General Settings */
function green_planet_tribe_events_options_general_fields($options, $tab) {
	$new_options = array();
	
	if ($tab == 'content') {
		foreach($options as $option) {
			if ($option['id'] == 'green_planet_search_layout') {
				$new_options[] = $option;
				
				$new_options[] = array( 
					'section' => 'content_section', 
					'id' => 'green-planet' . '_events_layout', 
					'title' => esc_html__('Events Calendar Layout Type', 'green-planet'), 
					'desc' => '', 
					'type' => 'radio_img', 
					'std' => 'fullwidth', 
					'choices' => array( 
						esc_html__('Right Sidebar', 'green-planet') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
						esc_html__('Left Sidebar', 'green-planet') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
						esc_html__('Full Width', 'green-planet') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
					) 
				);
			} else {
				$new_options[] = $option;
			}
		}
	} else {
		$new_options = $options;
	}
	
	
	return $new_options;
}

add_filter('cmsmasters_options_general_fields_filter', 'green_planet_tribe_events_options_general_fields', 10, 2);

