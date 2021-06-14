<?php 
/**
 * @package 	WordPress
 * @subpackage 	Green Planet
 * @version 	1.0.5
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function green_planet_options_general_tabs() {
	$cmsmasters_option = green_planet_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'green-planet');
	
	if ($cmsmasters_option['green-planet' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'green-planet');
	}
	
	if (CMSMASTERS_THEME_STYLE_COMPATIBILITY) {
		$tabs['theme_style'] = esc_attr__('Theme Style', 'green-planet');
	}
	
	$tabs['header'] = esc_attr__('Header', 'green-planet');
	$tabs['content'] = esc_attr__('Content', 'green-planet');
	$tabs['footer'] = esc_attr__('Footer', 'green-planet');
	
	return apply_filters('cmsmasters_options_general_tabs_filter', $tabs);
}


function green_planet_options_general_sections() {
	$tab = green_planet_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'green-planet');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'green-planet');
		
		break;
	case 'theme_style':
		$sections = array();
		
		$sections['theme_style_section'] = esc_attr__('Theme Design Style', 'green-planet');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'green-planet');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'green-planet');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'green-planet');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_sections_filter', $sections, $tab);
} 


function green_planet_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = green_planet_get_the_tab();
	}
	
	$options = array();
	
	
	$defaults = green_planet_settings_general_defaults();
	
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'green-planet' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'green-planet'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['green-planet' . '_theme_layout'], 
			'choices' => array( 
				esc_html__('Liquid', 'green-planet') . '|liquid', 
				esc_html__('Boxed', 'green-planet') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'green-planet' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'green-planet'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['green-planet' . '_logo_type'], 
			'choices' => array( 
				esc_html__('Image', 'green-planet') . '|image', 
				esc_html__('Text', 'green-planet') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'green-planet' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'green-planet'), 
			'desc' => esc_html__('Choose your website logo image.', 'green-planet'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['green-planet' . '_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'green-planet' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'green-planet'), 
			'desc' => esc_html__('Choose logo image for retina displays. Logo for Retina displays should be twice the size of the default one.', 'green-planet'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['green-planet' . '_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'green-planet' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'green-planet'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['green-planet' . '_logo_title'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'green-planet' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'green-planet'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['green-planet' . '_logo_subtitle'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'green-planet' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'green-planet'), 
			'desc' => esc_html__('enable', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_logo_custom_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'green-planet' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'green-planet'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['green-planet' . '_logo_title_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'green-planet' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'green-planet'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['green-planet' . '_logo_subtitle_color'] 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'green-planet' . '_bg_col', 
			'title' => esc_html__('Background Color', 'green-planet'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => $defaults[$tab]['green-planet' . '_bg_col'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'green-planet' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'green-planet' . '_bg_img', 
			'title' => esc_html__('Background Image', 'green-planet'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'green-planet'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['green-planet' . '_bg_img'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'green-planet' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'green-planet'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['green-planet' . '_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'green-planet') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'green-planet') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'green-planet') . '|repeat-y', 
				esc_html__('Repeat', 'green-planet') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'green-planet' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'green-planet'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['green-planet' . '_bg_pos'], 
			'choices' => array( 
				esc_html__('Top Left', 'green-planet') . '|top left', 
				esc_html__('Top Center', 'green-planet') . '|top center', 
				esc_html__('Top Right', 'green-planet') . '|top right', 
				esc_html__('Center Left', 'green-planet') . '|center left', 
				esc_html__('Center Center', 'green-planet') . '|center center', 
				esc_html__('Center Right', 'green-planet') . '|center right', 
				esc_html__('Bottom Left', 'green-planet') . '|bottom left', 
				esc_html__('Bottom Center', 'green-planet') . '|bottom center', 
				esc_html__('Bottom Right', 'green-planet') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'green-planet' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'green-planet'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['green-planet' . '_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'green-planet') . '|scroll', 
				esc_html__('Fixed', 'green-planet') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'green-planet' . '_bg_size', 
			'title' => esc_html__('Background Size', 'green-planet'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['green-planet' . '_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'green-planet') . '|auto', 
				esc_html__('Cover', 'green-planet') . '|cover', 
				esc_html__('Contain', 'green-planet') . '|contain' 
			) 
		);
		
		break;
	case 'theme_style':
		$options[] = array( 
			'section' => 'theme_style_section', 
			'id' => 'green-planet' . '_theme_style', 
			'title' => esc_html__('Choose Theme Style', 'green-planet'), 
			'desc' => '', 
			'type' => 'select_theme_style', 
			'std' => '', 
			'choices' => green_planet_all_theme_styles() 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'green-planet' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'green-planet'), 
			'desc' => esc_html__('enable', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_fixed_header'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'green-planet' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content by Default', 'green-planet'), 
			'desc' => esc_html__('enable', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_header_overlaps'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'green-planet' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_header_top_line'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'green-planet' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'green-planet'), 
			'desc' => esc_html__('pixels', 'green-planet'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['green-planet' . '_header_top_height'], 
			'min' => '10' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'green-planet' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'green-planet'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'green-planet') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['green-planet' . '_header_top_line_short_info'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'green-planet' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'green-planet'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['green-planet' . '_header_top_line_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'green-planet') . '|none', 
				esc_html__('Top Line Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'green-planet') . '|social', 
				esc_html__('Top Line Navigation (will be shown if set in Appearance - Menus tab)', 'green-planet') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'green-planet' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'green-planet'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['green-planet' . '_header_styles'], 
			'choices' => array( 
				esc_html__('Default Style', 'green-planet') . '|default', 
				esc_html__('Compact Style Left Navigation', 'green-planet') . '|l_nav', 
				esc_html__('Compact Style Right Navigation', 'green-planet') . '|r_nav', 
				esc_html__('Compact Style Center Navigation', 'green-planet') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'green-planet' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'green-planet'), 
			'desc' => esc_html__('pixels', 'green-planet'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['green-planet' . '_header_mid_height'], 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'green-planet' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'green-planet'), 
			'desc' => esc_html__('pixels', 'green-planet'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['green-planet' . '_header_bot_height'], 
			'min' => '20' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'green-planet' . '_header_search', 
			'title' => esc_html__('Header Search', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_header_search'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'green-planet' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'green-planet'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['green-planet' . '_header_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'green-planet') . '|none', 
				esc_html__('Header Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'green-planet') . '|social', 
				esc_html__('Header Custom HTML', 'green-planet') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'green-planet' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'green-planet'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'green-planet') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['green-planet' . '_header_add_cont_cust_html'], 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'green-planet' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'green-planet'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'green-planet'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['green-planet' . '_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'green-planet') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'green-planet') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'green-planet') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'green-planet' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'green-planet'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Archive Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'green-planet'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['green-planet' . '_archives_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'green-planet') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'green-planet') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'green-planet') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'green-planet' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'green-planet'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Search Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'green-planet'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['green-planet' . '_search_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'green-planet') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'green-planet') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'green-planet') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'green-planet' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'green-planet'), 
			'desc' => esc_html__('Layout for pages of non-listed types. Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'green-planet'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['green-planet' . '_other_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'green-planet') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'green-planet') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'green-planet') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'green-planet' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'green-planet'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['green-planet' . '_heading_alignment'], 
			'choices' => array( 
				esc_html__('Left', 'green-planet') . '|left', 
				esc_html__('Right', 'green-planet') . '|right', 
				esc_html__('Center', 'green-planet') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'green-planet' . '_heading_scheme', 
			'title' => esc_html__('Heading Color Scheme by Default', 'green-planet'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['green-planet' . '_heading_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'green-planet' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_heading_bg_image_enable'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'green-planet' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'green-planet'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'green-planet'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['green-planet' . '_heading_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'green-planet' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'green-planet'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['green-planet' . '_heading_bg_repeat'], 
			'choices' => array( 
				esc_html__('No Repeat', 'green-planet') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'green-planet') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'green-planet') . '|repeat-y', 
				esc_html__('Repeat', 'green-planet') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'green-planet' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'green-planet'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['green-planet' . '_heading_bg_attachment'], 
			'choices' => array( 
				esc_html__('Scroll', 'green-planet') . '|scroll', 
				esc_html__('Fixed', 'green-planet') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'green-planet' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'green-planet'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['green-planet' . '_heading_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'green-planet') . '|auto', 
				esc_html__('Cover', 'green-planet') . '|cover', 
				esc_html__('Contain', 'green-planet') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'green-planet' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'green-planet'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => $defaults[$tab]['green-planet' . '_heading_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'green-planet' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'green-planet'), 
			'desc' => esc_html__('pixels', 'green-planet'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['green-planet' . '_heading_height'], 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'green-planet' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_breadcrumbs'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'green-planet' . '_bottom_scheme', 
			'title' => esc_html__('Bottom Color Scheme', 'green-planet'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['green-planet' . '_bottom_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'green-planet' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet') . '<br><br>' . esc_html__('Please make sure to add widgets in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_bottom_sidebar'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'green-planet' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'green-planet'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['green-planet' . '_bottom_sidebar_layout'], 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'green-planet' . '_footer_scheme', 
			'title' => esc_html__('Footer Color Scheme', 'green-planet'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['green-planet' . '_footer_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'green-planet' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'green-planet'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['green-planet' . '_footer_type'], 
			'choices' => array( 
				esc_html__('Default', 'green-planet') . '|default', 
				esc_html__('Small', 'green-planet') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'green-planet' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'green-planet'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['green-planet' . '_footer_additional_content'], 
			'choices' => array( 
				esc_html__('None', 'green-planet') . '|none', 
				esc_html__('Footer Navigation (will be shown if set in Appearance - Menus tab)', 'green-planet') . '|nav', 
				esc_html__('Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'green-planet') . '|social', 
				esc_html__('Custom HTML', 'green-planet') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'green-planet' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_footer_logo'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'green-planet' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'green-planet'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'green-planet'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['green-planet' . '_footer_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'green-planet' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'green-planet'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'green-planet'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['green-planet' . '_footer_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'green-planet' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_footer_nav'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'green-planet' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_footer_social'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'green-planet' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'green-planet'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'green-planet') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['green-planet' . '_footer_html'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'green-planet' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'green-planet'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['green-planet' . '_footer_copyright'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_fields_filter', $options, $tab);
}

