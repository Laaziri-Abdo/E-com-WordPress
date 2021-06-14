<?php 
/**
 * @package 	WordPress
 * @subpackage 	Green Planet
 * @version 	1.0.0
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function green_planet_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'green-planet');
	
	if (class_exists('Cmsmasters_Content_Composer')) {
		$tabs['icon'] = esc_attr__('Social Icons', 'green-planet');
	}
	
	$tabs['lightbox'] = esc_attr__('Lightbox', 'green-planet');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'green-planet');
	$tabs['error'] = esc_attr__('404', 'green-planet');
	$tabs['code'] = esc_attr__('Custom Codes', 'green-planet');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'green-planet');
	}
	
	return apply_filters('cmsmasters_options_element_tabs_filter', $tabs);
}


function green_planet_options_element_sections() {
	$tab = green_planet_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'green-planet');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'green-planet');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'green-planet');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'green-planet');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'green-planet');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'green-planet');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'green-planet');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_sections_filter', $sections, $tab);	
} 


function green_planet_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = green_planet_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = green_planet_settings_element_defaults();
	
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'green-planet' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'green-planet'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => $defaults[$tab]['green-planet' . '_sidebar'] 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'green-planet' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'green-planet'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => $defaults[$tab]['green-planet' . '_social_icons'] 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'green-planet' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'green-planet'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['green-planet' . '_ilightbox_skin'], 
			'choices' => array( 
				esc_html__('Dark', 'green-planet') . '|dark', 
				esc_html__('Light', 'green-planet') . '|light', 
				esc_html__('Mac', 'green-planet') . '|mac', 
				esc_html__('Metro Black', 'green-planet') . '|metro-black', 
				esc_html__('Metro White', 'green-planet') . '|metro-white', 
				esc_html__('Parade', 'green-planet') . '|parade', 
				esc_html__('Smooth', 'green-planet') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'green-planet' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'green-planet'), 
			'desc' => esc_html__('Sets path for switching windows', 'green-planet'), 
			'type' => 'radio', 
			'std' => $defaults[$tab]['green-planet' . '_ilightbox_path'], 
			'choices' => array( 
				esc_html__('Vertical', 'green-planet') . '|vertical', 
				esc_html__('Horizontal', 'green-planet') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'green-planet' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'green-planet'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_ilightbox_infinite'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'green-planet' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'green-planet'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_ilightbox_aspect_ratio'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'green-planet' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'green-planet'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_ilightbox_mobile_optimizer'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'green-planet' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'green-planet'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'green-planet'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['green-planet' . '_ilightbox_max_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'green-planet' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'green-planet'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'green-planet'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['green-planet' . '_ilightbox_min_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'green-planet' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'green-planet'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_ilightbox_inner_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'green-planet' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'green-planet'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_ilightbox_smart_recognition'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'green-planet' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'green-planet'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_ilightbox_fullscreen_one_slide'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'green-planet' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'green-planet'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'green-planet'), 
			'type' => 'select', 
			'std' => $defaults[$tab]['green-planet' . '_ilightbox_fullscreen_viewport'], 
			'choices' => array( 
				esc_html__('Center', 'green-planet') . '|center', 
				esc_html__('Fit', 'green-planet') . '|fit', 
				esc_html__('Fill', 'green-planet') . '|fill', 
				esc_html__('Stretch', 'green-planet') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'green-planet' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'green-planet'), 
			'desc' => esc_html__('Sets buttons be available or not', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_ilightbox_controls_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'green-planet' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'green-planet'), 
			'desc' => esc_html__('Enable the arrow buttons', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_ilightbox_controls_arrows'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'green-planet' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'green-planet'), 
			'desc' => esc_html__('Sets the fullscreen button', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_ilightbox_controls_fullscreen'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'green-planet' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'green-planet'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_ilightbox_controls_thumbnail'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'green-planet' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'green-planet'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_ilightbox_controls_keyboard'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'green-planet' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'green-planet'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_ilightbox_controls_mousewheel'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'green-planet' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'green-planet'), 
			'desc' => esc_html__('Sets the swipe navigation', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_ilightbox_controls_swipe'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'green-planet' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'green-planet'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_ilightbox_controls_slideshow'] 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'green-planet' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_sitemap_nav'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'green-planet' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_sitemap_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'green-planet' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_sitemap_tags'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'green-planet' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_sitemap_month'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'green-planet' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_sitemap_pj_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'green-planet' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_sitemap_pj_tags'] 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'green-planet' . '_error_color', 
			'title' => esc_html__('Text Color', 'green-planet'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['green-planet' . '_error_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'green-planet' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'green-planet'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['green-planet' . '_error_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'green-planet' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_error_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'green-planet' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'green-planet'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'green-planet'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['green-planet' . '_error_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'green-planet' . '_error_bg_rep', 
			'title' => esc_html__('Background Repeat', 'green-planet'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['green-planet' . '_error_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'green-planet') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'green-planet') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'green-planet') . '|repeat-y', 
				esc_html__('Repeat', 'green-planet') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'green-planet' . '_error_bg_pos', 
			'title' => esc_html__('Background Position', 'green-planet'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['green-planet' . '_error_bg_pos'], 
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
			'section' => 'error_section', 
			'id' => 'green-planet' . '_error_bg_att', 
			'title' => esc_html__('Background Attachment', 'green-planet'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['green-planet' . '_error_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'green-planet') . '|scroll', 
				esc_html__('Fixed', 'green-planet') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'green-planet' . '_error_bg_size', 
			'title' => esc_html__('Background Size', 'green-planet'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['green-planet' . '_error_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'green-planet') . '|auto', 
				esc_html__('Cover', 'green-planet') . '|cover', 
				esc_html__('Contain', 'green-planet') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'green-planet' . '_error_search', 
			'title' => esc_html__('Search Line', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_error_search'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'green-planet' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_error_sitemap_button'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'green-planet' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'green-planet'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['green-planet' . '_error_sitemap_link'], 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'green-planet' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'green-planet'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['green-planet' . '_custom_css'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'green-planet' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'green-planet'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['green-planet' . '_custom_js'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'green-planet' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'green-planet'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['green-planet' . '_gmap_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'green-planet' . '_api_key', 
			'title' => esc_html__('Twitter API key', 'green-planet'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['green-planet' . '_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'green-planet' . '_api_secret', 
			'title' => esc_html__('Twitter API secret', 'green-planet'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['green-planet' . '_api_secret'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'green-planet' . '_access_token', 
			'title' => esc_html__('Twitter Access token', 'green-planet'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['green-planet' . '_access_token'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'green-planet' . '_access_token_secret', 
			'title' => esc_html__('Twitter Access token secret', 'green-planet'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['green-planet' . '_access_token_secret'], 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'green-planet' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'green-planet'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['green-planet' . '_recaptcha_public_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'green-planet' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'green-planet'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['green-planet' . '_recaptcha_private_key'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_fields_filter', $options, $tab);	
}

