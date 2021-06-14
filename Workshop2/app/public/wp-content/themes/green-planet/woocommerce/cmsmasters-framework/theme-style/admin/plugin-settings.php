<?php
/**
 * @package 	WordPress
 * @subpackage 	Green Planet
 * @version 	1.0.5
 *
 * CMSMasters WooCommerce Admin Settings
 * Created by CMSMasters
 *
 */


/* Single Settings */
function green_planet_woocommerce_options_general_fields($options, $tab) {
	$defaults = green_planet_settings_general_defaults();

	if ($tab == 'header') {
		$options[] = array(
			'section' => 'header_section',
			'id' => 'green-planet' . '_woocommerce_cart_dropdown',
			'title' => esc_html__('Disable WooCommerce Cart', 'green-planet'),
			'desc' => esc_html__('show', 'green-planet'),
			'type' => 'checkbox',
			'std' => $defaults[$tab]['green-planet' . '_woocommerce_cart_dropdown']
		);
	}

	return $options;
}

add_filter('cmsmasters_options_general_fields_filter', 'green_planet_woocommerce_options_general_fields', 10, 2);

