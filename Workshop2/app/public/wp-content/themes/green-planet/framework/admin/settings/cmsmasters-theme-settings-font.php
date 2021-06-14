<?php 
/**
 * @package 	WordPress
 * @subpackage 	Green Planet
 * @version		1.0.4
 * 
 * Admin Panel Fonts Options
 * Created by CMSMasters
 * 
 */


function green_planet_options_font_tabs() {
	$tabs = array();
	
	$tabs['content'] = esc_attr__('Content', 'green-planet');
	$tabs['link'] = esc_attr__('Links', 'green-planet');
	$tabs['nav'] = esc_attr__('Navigation', 'green-planet');
	$tabs['heading'] = esc_attr__('Heading', 'green-planet');
	$tabs['other'] = esc_attr__('Other', 'green-planet');
	$tabs['google'] = esc_attr__('Google Fonts', 'green-planet');
	
	return apply_filters('cmsmasters_options_font_tabs_filter', $tabs);
}


function green_planet_options_font_sections() {
	$tab = green_planet_get_the_tab();
	
	switch ($tab) {
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_html__('Content Font Options', 'green-planet');
		
		break;
	case 'link':
		$sections = array();
		
		$sections['link_section'] = esc_html__('Links Font Options', 'green-planet');
		
		break;
	case 'nav':
		$sections = array();
		
		$sections['nav_section'] = esc_html__('Navigation Font Options', 'green-planet');
		
		break;
	case 'heading':
		$sections = array();
		
		$sections['heading_section'] = esc_html__('Headings Font Options', 'green-planet');
		
		break;
	case 'other':
		$sections = array();
		
		$sections['other_section'] = esc_html__('Other Fonts Options', 'green-planet');
		
		break;
	case 'google':
		$sections = array();
		
		$sections['google_section'] = esc_html__('Serving Google Fonts from CDN', 'green-planet');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_sections_filter', $sections, $tab);
} 


function green_planet_options_font_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = green_planet_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = green_planet_settings_font_defaults();
	
	
	switch ($tab) {
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'green-planet' . '_content_font', 
			'title' => esc_html__('Main Content Font', 'green-planet'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['green-planet' . '_content_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'link':
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'green-planet' . '_link_font', 
			'title' => esc_html__('Links Font', 'green-planet'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['green-planet' . '_link_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'green-planet' . '_link_hover_decoration', 
			'title' => esc_html__('Links Hover Text Decoration', 'green-planet'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['green-planet' . '_link_hover_decoration'], 
			'choices' => green_planet_text_decoration_list() 
		);
		
		break;
	case 'nav':
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'green-planet' . '_nav_title_font', 
			'title' => esc_html__('Navigation Title Font', 'green-planet'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['green-planet' . '_nav_title_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'green-planet' . '_nav_dropdown_font', 
			'title' => esc_html__('Navigation Dropdown Font', 'green-planet'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['green-planet' . '_nav_dropdown_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		break;
	case 'heading':
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'green-planet' . '_h1_font', 
			'title' => esc_html__('H1 Tag Font', 'green-planet'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['green-planet' . '_h1_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'green-planet' . '_h2_font', 
			'title' => esc_html__('H2 Tag Font', 'green-planet'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['green-planet' . '_h2_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'green-planet' . '_h3_font', 
			'title' => esc_html__('H3 Tag Font', 'green-planet'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['green-planet' . '_h3_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'green-planet' . '_h4_font', 
			'title' => esc_html__('H4 Tag Font', 'green-planet'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['green-planet' . '_h4_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'green-planet' . '_h5_font', 
			'title' => esc_html__('H5 Tag Font', 'green-planet'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['green-planet' . '_h5_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'green-planet' . '_h6_font', 
			'title' => esc_html__('H6 Tag Font', 'green-planet'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['green-planet' . '_h6_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		break;
	case 'other':
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'green-planet' . '_button_font', 
			'title' => esc_html__('Button Font', 'green-planet'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['green-planet' . '_button_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'green-planet' . '_small_font', 
			'title' => esc_html__('Small Tag Font', 'green-planet'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['green-planet' . '_small_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'green-planet' . '_input_font', 
			'title' => esc_html__('Text Fields Font', 'green-planet'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['green-planet' . '_input_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'green-planet' . '_quote_font', 
			'title' => esc_html__('Blockquote Font', 'green-planet'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['green-planet' . '_quote_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'google':
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'green-planet' . '_google_web_fonts', 
			'title' => esc_html__('Google Fonts', 'green-planet'), 
			'desc' => '', 
			'type' => 'google_web_fonts', 
			'std' => $defaults[$tab]['green-planet' . '_google_web_fonts'] 
		);
		
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'green-planet' . '_google_web_fonts_subset', 
			'title' => esc_html__('Google Fonts Subset', 'green-planet'), 
			'desc' => '', 
			'type' => 'select_multiple', 
			'std' => '', 
			'choices' => array( 
				esc_html__('Latin Extended', 'green-planet') . '|' . 'latin-ext', 
				esc_html__('Arabic', 'green-planet') . '|' . 'arabic', 
				esc_html__('Cyrillic', 'green-planet') . '|' . 'cyrillic', 
				esc_html__('Cyrillic Extended', 'green-planet') . '|' . 'cyrillic-ext', 
				esc_html__('Greek', 'green-planet') . '|' . 'greek', 
				esc_html__('Greek Extended', 'green-planet') . '|' . 'greek-ext', 
				esc_html__('Vietnamese', 'green-planet') . '|' . 'vietnamese', 
				esc_html__('Japanese', 'green-planet') . '|' . 'japanese', 
				esc_html__('Korean', 'green-planet') . '|' . 'korean', 
				esc_html__('Thai', 'green-planet') . '|' . 'thai', 
				esc_html__('Bengali', 'green-planet') . '|' . 'bengali', 
				esc_html__('Devanagari', 'green-planet') . '|' . 'devanagari', 
				esc_html__('Gujarati', 'green-planet') . '|' . 'gujarati', 
				esc_html__('Gurmukhi', 'green-planet') . '|' . 'gurmukhi', 
				esc_html__('Hebrew', 'green-planet') . '|' . 'hebrew', 
				esc_html__('Kannada', 'green-planet') . '|' . 'kannada', 
				esc_html__('Khmer', 'green-planet') . '|' . 'khmer', 
				esc_html__('Malayalam', 'green-planet') . '|' . 'malayalam', 
				esc_html__('Myanmar', 'green-planet') . '|' . 'myanmar', 
				esc_html__('Oriya', 'green-planet') . '|' . 'oriya', 
				esc_html__('Sinhala', 'green-planet') . '|' . 'sinhala', 
				esc_html__('Tamil', 'green-planet') . '|' . 'tamil', 
				esc_html__('Telugu', 'green-planet') . '|' . 'telugu' 
			) 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_fields_filter', $options, $tab);	
}

