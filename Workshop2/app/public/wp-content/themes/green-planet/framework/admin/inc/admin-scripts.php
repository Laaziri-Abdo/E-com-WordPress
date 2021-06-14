<?php
/**
 * @package 	WordPress
 * @subpackage 	Green Planet
 * @version 	1.0.9
 * 
 * Admin Panel Scripts & Styles
 * Created by CMSMasters
 * 
 */


function green_planet_admin_register($hook) {
	global $pagenow;
	
	$screen = get_current_screen();
	
	
	wp_enqueue_style('wp-color-picker');
	
	wp_enqueue_script('wp-color-picker');

	wp_localize_script( 'wp-color-picker', 'wpColorPickerL10n', array(
		'clear' => 				esc_attr__('Clear', 'green-planet'),
		'clearAriaLabel' => 	esc_attr__('Clear color', 'green-planet'),
		'defaultLabel' => 		esc_attr__('Color value', 'green-planet'),
		'defaultString' => 		esc_attr__('Default', 'green-planet'),
		'defaultAriaLabel' => 	esc_attr__('Select default color', 'green-planet'),
		'pick' => 				esc_attr__('Select Color', 'green-planet'),
	) ); 
	
	wp_enqueue_script('wp-color-picker-alpha', get_template_directory_uri() . '/framework/admin/inc/js/wp-color-picker-alpha.js', array('jquery', 'wp-color-picker'), '2.1.4', true);
	
	
	wp_enqueue_style('green-planet-admin-icons-font', get_template_directory_uri() . '/framework/admin/inc/css/admin-icons-font.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('green-planet-lightbox', get_template_directory_uri() . '/framework/admin/inc/css/jquery.cmsmastersLightbox.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('green-planet-lightbox-rtl', get_template_directory_uri() . '/framework/admin/inc/css/jquery.cmsmastersLightbox-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	wp_enqueue_script('green-planet-uploader-js', get_template_directory_uri() . '/framework/admin/inc/js/jquery.cmsmastersUploader.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('green-planet-uploader-js', 'cmsmasters_admin_uploader', array( 
		'choose' => 				esc_attr__('Choose image', 'green-planet'), 
		'insert' => 				esc_attr__('Insert image', 'green-planet'), 
		'remove' => 				esc_attr__('Remove', 'green-planet'), 
		'edit_gallery' => 			esc_attr__('Edit gallery', 'green-planet') 
	));
	
	
	wp_enqueue_script('green-planet-lightbox-js', get_template_directory_uri() . '/framework/admin/inc/js/jquery.cmsmastersLightbox.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('green-planet-lightbox-js', 'cmsmasters_admin_lightbox', array( 
		'cancel' => 				esc_attr__('Cancel', 'green-planet'), 
		'insert' => 				esc_attr__('Insert', 'green-planet'), 
		'deselect' => 				esc_attr__('Deselect', 'green-planet'), 
		'choose_icon' => 			esc_attr__('Choose Icon', 'green-planet'), 
		'find_icons' => 			esc_attr__('Find icons', 'green-planet'), 
		'min_length' => 			esc_attr__('min 2 symbols', 'green-planet'), 
		'choose_font' => 			esc_attr__('Choose icons font', 'green-planet'), 
		'error_on_page' => 			esc_attr__("Error on page!\nReload page and try again.", 'green-planet') 
	));
	
	
	if ( 
		$hook == 'post.php' || 
		$hook == 'post-new.php' || 
		$hook == 'widgets.php' || 
		$hook == 'term.php' || 
		$hook == 'edit-tags.php' || 
		$hook == 'nav-menus.php' || 
		str_replace('cmsmasters-settings-element', '', $screen->id) != $screen->id 
	) {
		wp_enqueue_style('green-planet-icons', get_template_directory_uri() . '/css/fontello.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('green-planet-icons-custom', get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/css/fontello-custom.css', array(), '1.0.0', 'screen');
	}
	
	
	if ( 
		$hook == 'widgets.php' || 
		$hook == 'nav-menus.php' 
	) {
		wp_enqueue_media();
	}
	
	
	wp_enqueue_style('green-planet-admin-styles', get_template_directory_uri() . '/framework/admin/inc/css/admin-theme-styles.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('green-planet-admin-styles-rtl', get_template_directory_uri() . '/framework/admin/inc/css/admin-theme-styles-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	wp_enqueue_script('green-planet-admin-scripts', get_template_directory_uri() . '/framework/admin/inc/js/admin-theme-scripts.js', array('jquery'), '1.0.0', true);
	
	
	if ($hook == 'widgets.php') {
		wp_enqueue_style('green-planet-widgets-styles', get_template_directory_uri() . '/framework/admin/inc/css/widgets-styles.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_script('green-planet-widgets-scripts', get_template_directory_uri() . '/framework/admin/inc/js/widgets-scripts.js', array('jquery'), '1.0.0', true);
	}
}

add_action('admin_enqueue_scripts', 'green_planet_admin_register');

add_action('admin_enqueue_scripts', 'cmsmasters_composer_icons');

