<?php 
/**
 * @package 	WordPress
 * @subpackage 	Green Planet
 * @version		1.0.5
 * 
 * Theme Settings Defaults
 * Created by CMSMasters
 * 
 */


/* Theme Settings General Default Values */
if (!function_exists('green_planet_settings_general_defaults')) {

function green_planet_settings_general_defaults($id = false) {
	$settings = array( 
		'general' => array( 
			'green-planet' . '_theme_layout' => 			'liquid', 
			'green-planet' . '_logo_type' => 			'image', 
			'green-planet' . '_logo_url' => 				'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo.png', 
			'green-planet' . '_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_retina.png', 
			'green-planet' . '_logo_title' => 			get_bloginfo('name') ? get_bloginfo('name') : 'Green Planet', 
			'green-planet' . '_logo_subtitle' => 		'', 
			'green-planet' . '_logo_custom_color' => 	0, 
			'green-planet' . '_logo_title_color' => 		'', 
			'green-planet' . '_logo_subtitle_color' => 	'' 
		), 
		'bg' => array( 
			'green-planet' . '_bg_col' => 			'#ffffff', 
			'green-planet' . '_bg_img_enable' => 	0, 
			'green-planet' . '_bg_img' => 			'', 
			'green-planet' . '_bg_rep' => 			'no-repeat', 
			'green-planet' . '_bg_pos' => 			'top center', 
			'green-planet' . '_bg_att' => 			'scroll', 
			'green-planet' . '_bg_size' => 			'cover' 
		), 
		'header' => array( 
			'green-planet' . '_fixed_header' => 					1, 
			'green-planet' . '_header_overlaps' => 				1, 
			'green-planet' . '_header_top_line' => 				0, 
			'green-planet' . '_header_top_height' => 			'40', 
			'green-planet' . '_header_top_line_short_info' => 	'', 
			'green-planet' . '_header_top_line_add_cont' => 		'social', 
			'green-planet' . '_header_styles' => 				'default', 
			'green-planet' . '_header_mid_height' => 			'120', 
			'green-planet' . '_header_bot_height' => 			'68', 
			'green-planet' . '_header_search' => 				0, 
			'green-planet' . '_header_add_cont' => 				'social', 
			'green-planet' . '_header_add_cont_cust_html' => 	'',
			'green-planet' . '_woocommerce_cart_dropdown' => 	0
		), 
		'content' => array( 
			'green-planet' . '_layout' => 					'r_sidebar', 
			'green-planet' . '_archives_layout' => 			'r_sidebar', 
			'green-planet' . '_search_layout' => 			'r_sidebar', 
			'green-planet' . '_other_layout' => 			'r_sidebar', 
			'green-planet' . '_heading_alignment' => 		'center', 
			'green-planet' . '_heading_scheme' => 			'default', 
			'green-planet' . '_heading_bg_image_enable' => 	1, 
			'green-planet' . '_heading_bg_image' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/headline_bg.jpg', 
			'green-planet' . '_heading_bg_repeat' => 		'no-repeat', 
			'green-planet' . '_heading_bg_attachment' => 	'scroll', 
			'green-planet' . '_heading_bg_size' => 			'cover', 
			'green-planet' . '_heading_bg_color' => 			'', 
			'green-planet' . '_heading_height' => 			'430', 
			'green-planet' . '_breadcrumbs' => 				1, 
			'green-planet' . '_bottom_scheme' => 			'footer', 
			'green-planet' . '_bottom_sidebar' => 			0, 
			'green-planet' . '_bottom_sidebar_layout' => 	'14141414' 
		), 
		'footer' => array( 
			'green-planet' . '_footer_scheme' => 				'footer', 
			'green-planet' . '_footer_type' => 					'small', 
			'green-planet' . '_footer_additional_content' => 	'social', 
			'green-planet' . '_footer_logo' => 					1, 
			'green-planet' . '_footer_logo_url' => 				'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer.png', 
			'green-planet' . '_footer_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer_retina.png', 
			'green-planet' . '_footer_nav' => 					1, 
			'green-planet' . '_footer_social' => 				1, 
			'green-planet' . '_footer_html' => 					'', 
			'green-planet' . '_footer_copyright' => 				'Green Planet' . ' &copy; ' . date('Y') . ' / ' . esc_html__('All Rights Reserved', 'green-planet') 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Theme Settings Fonts Default Values */
if (!function_exists('green_planet_settings_font_defaults')) {

function green_planet_settings_font_defaults($id = false) {
	$settings = array( 
		'content' => array( 
			'green-planet' . '_content_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Hind:300,400,500,600,700', 
				'font_size' => 			'18', 
				'line_height' => 		'26', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			) 
		), 
		'link' => array( 
			'green-planet' . '_link_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Merriweather+Sans:300,300i,400,400i,700,700i,800,800i', 
				'font_size' => 			'16', 
				'line_height' => 		'24', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'green-planet' . '_link_hover_decoration' => 	'none' 
		), 
		'nav' => array( 
			'green-planet' . '_nav_title_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Hind:300,400,500,600,700', 
				'font_size' => 			'16', 
				'line_height' => 		'20', 
				'font_weight' => 		'600', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'green-planet' . '_nav_dropdown_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Merriweather:300,300i,400,400i,700,700i,900,900i', 
				'font_size' => 			'14', 
				'line_height' => 		'22', 
				'font_weight' => 		'bold', 
				'font_style' => 		'italic', 
				'text_transform' => 	'none' 
			) 
		), 
		'heading' => array( 
			'green-planet' . '_h1_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Merriweather:300,300i,400,400i,700,700i,900,900i', 
				'font_size' => 			'36', 
				'line_height' => 		'44', 
				'font_weight' => 		'900', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'green-planet' . '_h2_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Merriweather:300,300i,400,400i,700,700i,900,900i', 
				'font_size' => 			'28', 
				'line_height' => 		'36', 
				'font_weight' => 		'900', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'green-planet' . '_h3_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Merriweather+Sans:300,300i,400,400i,700,700i,800,800i', 
				'font_size' => 			'20', 
				'line_height' => 		'26', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'green-planet' . '_h4_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Merriweather+Sans:300,300i,400,400i,700,700i,800,800i', 
				'font_size' => 			'18', 
				'line_height' => 		'24', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'green-planet' . '_h5_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Merriweather:300,300i,400,400i,700,700i,900,900i', 
				'font_size' => 			'16', 
				'line_height' => 		'22', 
				'font_weight' => 		'bold', 
				'font_style' => 		'italic', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'green-planet' . '_h6_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Merriweather+Sans:300,300i,400,400i,700,700i,800,800i', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			) 
		), 
		'other' => array( 
			'green-planet' . '_button_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Merriweather+Sans:300,300i,400,400i,700,700i,800,800i', 
				'font_size' => 			'16', 
				'line_height' => 		'40', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'green-planet' . '_small_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Merriweather+Sans:300,300i,400,400i,700,700i,800,800i', 
				'font_size' => 			'11', 
				'line_height' => 		'20', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'green-planet' . '_input_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Hind:300,400,500,600,700', 
				'font_size' => 			'16', 
				'line_height' => 		'24', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			), 
			'green-planet' . '_quote_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Merriweather:300,300i,400,400i,700,700i,900,900i', 
				'font_size' => 			'24', 
				'line_height' => 		'36', 
				'font_weight' => 		'bold', 
				'font_style' => 		'italic' 
			) 
		), 
		'google' => array( 
			'green-planet' . '_google_web_fonts' => array( 
				'Titillium+Web:300,300italic,400,400italic,600,600italic,700,700italic|Titillium Web', 
				'Roboto:300,300italic,400,400italic,500,500italic,700,700italic|Roboto', 
				'Roboto+Condensed:400,400italic,700,700italic|Roboto Condensed', 
				'Open+Sans:300,300italic,400,400italic,700,700italic|Open Sans', 
				'Open+Sans+Condensed:300,300italic,700|Open Sans Condensed', 
				'Droid+Sans:400,700|Droid Sans', 
				'Droid+Serif:400,400italic,700,700italic|Droid Serif', 
				'PT+Sans:400,400italic,700,700italic|PT Sans', 
				'PT+Sans+Caption:400,700|PT Sans Caption', 
				'PT+Sans+Narrow:400,700|PT Sans Narrow', 
				'PT+Serif:400,400italic,700,700italic|PT Serif', 
				'Ubuntu:400,400italic,700,700italic|Ubuntu', 
				'Ubuntu+Condensed|Ubuntu Condensed', 
				'Headland+One|Headland One', 
				'Source+Sans+Pro:300,300italic,400,400italic,700,700italic|Source Sans Pro', 
				'Lato:400,400italic,700,700italic|Lato', 
				'Cuprum:400,400italic,700,700italic|Cuprum', 
				'Oswald:300,400,700|Oswald', 
				'Yanone+Kaffeesatz:300,400,700|Yanone Kaffeesatz', 
				'Lobster|Lobster', 
				'Lobster+Two:400,400italic,700,700italic|Lobster Two', 
				'Questrial|Questrial', 
				'Raleway:300,400,500,600,700|Raleway', 
				'Dosis:300,400,500,700|Dosis', 
				'Cutive+Mono|Cutive Mono', 
				'Quicksand:300,400,700|Quicksand', 
				'Montserrat:400,700|Montserrat', 
				'Hind:300,400,500,600,700|Hind',
				'Merriweather+Sans:300,300i,400,400i,700,700i,800,800i|Merriweather Sans',
				'Merriweather:300,300i,400,400i,700,700i,900,900i|Merriweather',
				'Cookie|Cookie' 
			) 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {

function cmsmasters_color_picker_palettes() {
	$palettes = array( 
		'#7d7d7d', 
		'#2e404b', 
		'#6d7c84', 
		'#254151', 
		'#fdfbf8', 
		'#fffef7', 
		'#e4e4e3', 
		'#efc94c' 
	);
	
	
	return $palettes;
}

}



// Theme Settings Color Schemes Default Colors
if (!function_exists('green_planet_color_schemes_defaults')) {

function green_planet_color_schemes_defaults($id = false) {
	$settings = array( 
		'default' => array( // content default color scheme
			'color' => 		'#7d7d7d', 
			'link' => 		'#2e404b', 
			'hover' => 		'#6d7c84', 
			'heading' => 	'#254151', 
			'bg' => 		'#fdfbf8', 
			'alternate' => 	'#fffef7', 
			'border' => 	'#e4e4e3', 
			'secondary' => 	'#efc94c' 
		), 
		'header' => array( // Header color scheme
			'mid_color' => 		'rgba(255,255,255,0.6)', 
			'mid_link' => 		'rgba(255,255,255,0.7)', 
			'mid_hover' => 		'#ffffff', 
			'mid_bg' => 		'rgba(255,255,255,0)', 
			'mid_bg_scroll' => 	'#223139', 
			'mid_border' => 	'rgba(255,255,255,0.25)', 
			'bot_color' => 		'rgba(255,255,255,0.6)', 
			'bot_link' => 		'rgba(255,255,255,0.7)', 
			'bot_hover' => 		'#ffffff', 
			'bot_bg' => 		'rgba(255,255,255,0)', 
			'bot_bg_scroll' => 	'#223139', 
			'bot_border' => 	'rgba(255,255,255,0.3)' 
		), 
		'navigation' => array( // Navigation color scheme
			'title_link' => 			'#e3e2db', 
			'title_link_hover' => 		'#fffef7', 
			'title_link_current' => 	'#fffef7', 
			'title_link_subtitle' => 	'rgba(255,255,255,0.65)', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_bg_current' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_text' => 			'rgba(255,255,255,0.3)', 
			'dropdown_bg' => 			'#3b4850', 
			'dropdown_border' => 		'#3b4850', 
			'dropdown_link' => 			'rgba(255,255,255,0.6)', 
			'dropdown_link_hover' => 	'#ffffff', 
			'dropdown_link_subtitle' => 'rgba(255,255,255,0.3)', 
			'dropdown_link_highlight' => 'rgba(241,80,57,0)', 
			'dropdown_link_border' => 	'#3b4850' 
		), 
		'header_top' => array( // Header Top color scheme
			'color' => 					'rgba(255,255,255,0.3)', 
			'link' => 					'rgba(255,255,255,0.6)', 
			'hover' => 					'#ffffff', 
			'bg' => 					'#1d2023', 
			'border' => 				'#1d2023', 
			'title_link' => 			'rgba(255,255,255,0.6)', 
			'title_link_hover' => 		'#ffffff', 
			'title_link_bg' => 			'#1d2023', 
			'title_link_bg_hover' => 	'#1d2023', 
			'title_link_border' => 		'#1d2023', 
			'dropdown_bg' => 			'#2e3035', 
			'dropdown_border' => 		'#2e3035', 
			'dropdown_link' => 			'rgba(255,255,255,0.5)', 
			'dropdown_link_hover' => 	'#ffffff', 
			'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
			'dropdown_link_border' => 	'#2e3035' 
		), 
		'footer' => array( // Footer color scheme
			'color' => 		'#7d7d7d', 
			'link' => 		'#73787b', 
			'hover' => 		'#254151', 
			'heading' => 	'#254151', 
			'bg' => 		'#ece7df', 
			'alternate' => 	'#ece7df', 
			'border' => 	'#dcd6cd', 
			'secondary' => 	'#73787b' 
		), 
		'first' => array( // custom color scheme 1
			'color' => 		'#7d7d7d', 
			'link' => 		'#2e404b', 
			'hover' => 		'#ffd444', 
			'heading' => 	'#254151', 
			'bg' => 		'#fdfbf8', 
			'alternate' => 	'#fffef7', 
			'border' => 	'#e4e4e3', 
			'secondary' => 	'#ffd444' 
		), 
		'second' => array( // custom color scheme 2
			'color' => 		'#7d7d7d', 
			'link' => 		'#ffffff', 
			'hover' => 		'#6d7c84', 
			'heading' => 	'#fffef7', 
			'bg' => 		'rgba(255,255,255,0)', 
			'alternate' => 	'#fffef7', 
			'border' => 	'#e4e4e3', 
			'secondary' => 	'#ffd444' 
		), 
		'third' => array( // custom color scheme 3
			'color' => 		'rgba(255,255,255,0.9)', 
			'link' => 		'#2e404b', 
			'hover' => 		'#6d7c84', 
			'heading' => 	'#fffef7', 
			'bg' => 		'rgba(255,255,255,0)', 
			'alternate' => 	'#fffef7', 
			'border' => 	'#e4e4e3', 
			'secondary' => 	'#ffd444' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Elements Default Values
if (!function_exists('green_planet_settings_element_defaults')) {

function green_planet_settings_element_defaults($id = false) {
	$settings = array( 
		'sidebar' => array( 
			'green-planet' . '_sidebar' => 	'' 
		), 
		'icon' => array( 
			'green-planet' . '_social_icons' => array( 
				'cmsmasters-icon-facebook-1|#|' . esc_html__('Facebook', 'green-planet') . '|true||',
				'cmsmasters-icon-twitter|#|' . esc_html__('Twitter', 'green-planet') . '|true||',
				'cmsmasters-icon-youtube-play|#|' . esc_html__('YouTube', 'green-planet') . '|true||',
				'cmsmasters-icon-instagram|#|' . esc_html__('Instagram', 'green-planet') . '|true||', 
				
				
			) 
		), 
		'lightbox' => array( 
			'green-planet' . '_ilightbox_skin' => 					'dark', 
			'green-planet' . '_ilightbox_path' => 					'vertical', 
			'green-planet' . '_ilightbox_infinite' => 				0, 
			'green-planet' . '_ilightbox_aspect_ratio' => 			1, 
			'green-planet' . '_ilightbox_mobile_optimizer' => 		1, 
			'green-planet' . '_ilightbox_max_scale' => 				1, 
			'green-planet' . '_ilightbox_min_scale' => 				0.2, 
			'green-planet' . '_ilightbox_inner_toolbar' => 			0, 
			'green-planet' . '_ilightbox_smart_recognition' => 		0, 
			'green-planet' . '_ilightbox_fullscreen_one_slide' => 	0, 
			'green-planet' . '_ilightbox_fullscreen_viewport' => 	'center', 
			'green-planet' . '_ilightbox_controls_toolbar' => 		1, 
			'green-planet' . '_ilightbox_controls_arrows' => 		0, 
			'green-planet' . '_ilightbox_controls_fullscreen' => 	1, 
			'green-planet' . '_ilightbox_controls_thumbnail' => 		1, 
			'green-planet' . '_ilightbox_controls_keyboard' => 		1, 
			'green-planet' . '_ilightbox_controls_mousewheel' => 	1, 
			'green-planet' . '_ilightbox_controls_swipe' => 			1, 
			'green-planet' . '_ilightbox_controls_slideshow' => 		0 
		), 
		'sitemap' => array( 
			'green-planet' . '_sitemap_nav' => 			1, 
			'green-planet' . '_sitemap_categs' => 		1, 
			'green-planet' . '_sitemap_tags' => 			1, 
			'green-planet' . '_sitemap_month' => 		1, 
			'green-planet' . '_sitemap_pj_categs' => 	1, 
			'green-planet' . '_sitemap_pj_tags' => 		1 
		), 
		'error' => array( 
			'green-planet' . '_error_color' => 				'#313131', 
			'green-planet' . '_error_bg_color' => 			'#ffffff', 
			'green-planet' . '_error_bg_img_enable' => 		0, 
			'green-planet' . '_error_bg_image' => 			'', 
			'green-planet' . '_error_bg_rep' => 				'no-repeat', 
			'green-planet' . '_error_bg_pos' => 				'top center', 
			'green-planet' . '_error_bg_att' => 				'scroll', 
			'green-planet' . '_error_bg_size' => 			'cover', 
			'green-planet' . '_error_search' => 				1, 
			'green-planet' . '_error_sitemap_button' =>		1, 
			'green-planet' . '_error_sitemap_link' => 		'' 
		), 
		'code' => array( 
			'green-planet' . '_custom_css' => 			'', 
			'green-planet' . '_custom_js' => 			'', 
			'green-planet' . '_gmap_api_key' => 			'', 
			'green-planet' . '_api_key' => 				'', 
			'green-planet' . '_api_secret' => 			'', 
			'green-planet' . '_access_token' => 			'', 
			'green-planet' . '_access_token_secret' => 	'' 
		), 
		'recaptcha' => array( 
			'green-planet' . '_recaptcha_public_key' => 		'', 
			'green-planet' . '_recaptcha_private_key' => 	'' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Single Posts Default Values
if (!function_exists('green_planet_settings_single_defaults')) {

function green_planet_settings_single_defaults($id = false) {
	$settings = array( 
		'post' => array( 
			'green-planet' . '_blog_post_layout' => 		'r_sidebar', 
			'green-planet' . '_blog_post_title' => 			1, 
			'green-planet' . '_blog_post_date' => 			1, 
			'green-planet' . '_blog_post_cat' => 			1, 
			'green-planet' . '_blog_post_author' => 		1, 
			'green-planet' . '_blog_post_comment' => 		1, 
			'green-planet' . '_blog_post_tag' => 			1, 
			'green-planet' . '_blog_post_like' => 			1, 
			'green-planet' . '_blog_post_nav_box' => 		1, 
			'green-planet' . '_blog_post_nav_order_cat' => 	0, 
			'green-planet' . '_blog_post_share_box' => 		1, 
			'green-planet' . '_blog_post_author_box' => 	1, 
			'green-planet' . '_blog_more_posts_box' => 		'popular', 
			'green-planet' . '_blog_more_posts_count' => 	'3', 
			'green-planet' . '_blog_more_posts_pause' => 	'5' 
		), 
		'project' => array( 
			'green-planet' . '_portfolio_project_title' => 			1, 
			'green-planet' . '_portfolio_project_details_title' => 	esc_html__('Project details', 'green-planet'), 
			'green-planet' . '_portfolio_project_date' => 			1, 
			'green-planet' . '_portfolio_project_cat' => 			1, 
			'green-planet' . '_portfolio_project_author' => 		1, 
			'green-planet' . '_portfolio_project_comment' => 		0, 
			'green-planet' . '_portfolio_project_tag' => 			0, 
			'green-planet' . '_portfolio_project_like' => 			1, 
			'green-planet' . '_portfolio_project_link' => 			0, 
			'green-planet' . '_portfolio_project_share_box' => 		1, 
			'green-planet' . '_portfolio_project_nav_box' => 		1, 
			'green-planet' . '_portfolio_project_nav_order_cat' => 	0, 
			'green-planet' . '_portfolio_project_author_box' => 	1, 
			'green-planet' . '_portfolio_more_projects_box' => 		'popular', 
			'green-planet' . '_portfolio_more_projects_count' => 	'4', 
			'green-planet' . '_portfolio_more_projects_pause' => 	'5', 
			'green-planet' . '_portfolio_project_slug' => 			'project', 
			'green-planet' . '_portfolio_pj_categs_slug' => 		'pj-categs', 
			'green-planet' . '_portfolio_pj_tags_slug' => 			'pj-tags' 
		), 
		'profile' => array( 
			'green-planet' . '_profile_post_title' => 			1, 
			'green-planet' . '_profile_post_details_title' => 	esc_html__('Profile details', 'green-planet'), 
			'green-planet' . '_profile_post_cat' => 			1, 
			'green-planet' . '_profile_post_comment' => 		1, 
			'green-planet' . '_profile_post_like' => 			1, 
			'green-planet' . '_profile_post_nav_box' => 		1, 
			'green-planet' . '_profile_post_nav_order_cat' => 	0, 
			'green-planet' . '_profile_post_share_box' => 		1, 
			'green-planet' . '_profile_post_slug' => 			'profile', 
			'green-planet' . '_profile_pl_categs_slug' => 		'pl-categs' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Project Puzzle Proportion */
if (!function_exists('green_planet_project_puzzle_proportion')) {

function green_planet_project_puzzle_proportion() {
	return 0.7069;
}

}


/* Project Puzzle Proportion */
if (!function_exists('green_planet_project_puzzle_large_gar_parameters')) {

function green_planet_project_puzzle_large_gar_parameters() {
	$parameter = array ( 
		'container_width' 		=> 1160, 
		'bottomStaticPadding' 	=> 2 
	);
	
	
	return $parameter;
}

}


/* Theme Image Thumbnails Size */
if (!function_exists('green_planet_get_image_thumbnail_list')) {

function green_planet_get_image_thumbnail_list() {
	$list = array( 
		'cmsmasters-small-thumb' => array( 
			'width' => 		75, 
			'height' => 	75, 
			'crop' => 		true 
		), 
		'cmsmasters-square-thumb' => array( 
			'width' => 		300, 
			'height' => 	300, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Square', 'green-planet') 
		), 
		'cmsmasters-blog-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	366, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Masonry Blog', 'green-planet') 
		), 
		'cmsmasters-project-thumb' => array( 
			'width' => 		580, 
			'height' => 	410, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project', 'green-planet') 
		), 
		'cmsmasters-project-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Project', 'green-planet') 
		), 
		'post-thumbnail' => array( 
			'width' => 		860, 
			'height' => 	575, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Featured', 'green-planet') 
		), 
		'cmsmasters-masonry-thumb' => array( 
			'width' => 		860, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry', 'green-planet') 
		), 
		'cmsmasters-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	770, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Full', 'green-planet') 
		), 
		'cmsmasters-project-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	820, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project Full', 'green-planet') 
		), 
		'cmsmasters-full-masonry-thumb' => array( 
			'width' => 		1160, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Full', 'green-planet') 
		) 
	);
	
	
	return $list;
}

}



/* Project Post Type Registration Rename */
if (!function_exists('green_planet_project_labels')) {

function green_planet_project_labels() {
	return array( 
		'name' => 					esc_html__('Projects', 'green-planet'), 
		'singular_name' => 			esc_html__('Project', 'green-planet'), 
		'menu_name' => 				esc_html__('Projects', 'green-planet'), 
		'all_items' => 				esc_html__('All Projects', 'green-planet'), 
		'add_new' => 				esc_html__('Add New', 'green-planet'), 
		'add_new_item' => 			esc_html__('Add New Project', 'green-planet'), 
		'edit_item' => 				esc_html__('Edit Project', 'green-planet'), 
		'new_item' => 				esc_html__('New Project', 'green-planet'), 
		'view_item' => 				esc_html__('View Project', 'green-planet'), 
		'search_items' => 			esc_html__('Search Projects', 'green-planet'), 
		'not_found' => 				esc_html__('No projects found', 'green-planet'), 
		'not_found_in_trash' => 	esc_html__('No projects found in Trash', 'green-planet') 
	);
}

}

// add_filter('cmsmasters_project_labels_filter', 'green_planet_project_labels');


if (!function_exists('green_planet_pj_categs_labels')) {

function green_planet_pj_categs_labels() {
	return array( 
		'name' => 					esc_html__('Project Categories', 'green-planet'), 
		'singular_name' => 			esc_html__('Project Category', 'green-planet') 
	);
}

}

// add_filter('cmsmasters_pj_categs_labels_filter', 'green_planet_pj_categs_labels');


if (!function_exists('green_planet_pj_tags_labels')) {

function green_planet_pj_tags_labels() {
	return array( 
		'name' => 					esc_html__('Project Tags', 'green-planet'), 
		'singular_name' => 			esc_html__('Project Tag', 'green-planet') 
	);
}

}

// add_filter('cmsmasters_pj_tags_labels_filter', 'green_planet_pj_tags_labels');



/* Profile Post Type Registration Rename */
if (!function_exists('green_planet_profile_labels')) {

function green_planet_profile_labels() {
	return array( 
		'name' => 					esc_html__('Profiles', 'green-planet'), 
		'singular_name' => 			esc_html__('Profiles', 'green-planet'), 
		'menu_name' => 				esc_html__('Profiles', 'green-planet'), 
		'all_items' => 				esc_html__('All Profiles', 'green-planet'), 
		'add_new' => 				esc_html__('Add New', 'green-planet'), 
		'add_new_item' => 			esc_html__('Add New Profile', 'green-planet'), 
		'edit_item' => 				esc_html__('Edit Profile', 'green-planet'), 
		'new_item' => 				esc_html__('New Profile', 'green-planet'), 
		'view_item' => 				esc_html__('View Profile', 'green-planet'), 
		'search_items' => 			esc_html__('Search Profiles', 'green-planet'), 
		'not_found' => 				esc_html__('No Profiles found', 'green-planet'), 
		'not_found_in_trash' => 	esc_html__('No Profiles found in Trash', 'green-planet') 
	);
}

}

// add_filter('cmsmasters_profile_labels_filter', 'green_planet_profile_labels');


if (!function_exists('green_planet_pl_categs_labels')) {

function green_planet_pl_categs_labels() {
	return array( 
		'name' => 					esc_html__('Profile Categories', 'green-planet'), 
		'singular_name' => 			esc_html__('Profile Category', 'green-planet') 
	);
}

}

// add_filter('cmsmasters_pl_categs_labels_filter', 'green_planet_pl_categs_labels');

