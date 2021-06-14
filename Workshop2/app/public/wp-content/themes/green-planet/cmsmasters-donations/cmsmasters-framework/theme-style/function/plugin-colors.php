<?php
/**
 * @package 	WordPress
 * @subpackage 	Green Planet
 * @version 	1.0.0
 * 
 * CMSMasters Donations Colors Rules
 * Created by CMSMasters
 * 
 */


function green_planet_donations_colors($custom_css) {
	$cmsmasters_option = green_planet_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} CMSMasters Donations Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}.cmsmasters_campaigns .cmsmasters_owl_slider .owl-buttons > div span, 
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_stat_title, 
	{$rule}.cmsmasters_donations_color,
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_stat_subtitle {
		" . cmsmasters_color_css('color', $cmsmasters_option['green-planet' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.cmsmasters_single_slider_campaign .cmsmasters_stat_subtitle, 
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_stat_subtitle, 
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_target_number, 	 	
	{$rule}.cmsmasters_donations_link {
		" . cmsmasters_color_css('color', $cmsmasters_option['green-planet' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_campaigns .cmsmasters_owl_slider .owl-buttons > div:hover, 
	{$rule}#submit-donation-form input[type='checkbox'] + .field_before:after, 
	{$rule}#submit-donation-form input[type='radio'] + .field_before:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['green-planet' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.cmsmasters_donations_hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['green-planet' . '_' . $scheme . '_hover']) . "
	}	
	
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_img_wrap .preloader:after {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['green-planet' . '_' . $scheme . '_hover']) . ", 0.85);
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.cmsmasters_donations_heading,
	{$rule}.cmsmasters_campaign_content p,
	{$rule}.cmsmasters_campaign_donate_button .button,
	{$rule}.cmsmasters_donation_details_item span,
	{$rule}.cmsmasters_stats .cmsmasters_stat_title {
		" . cmsmasters_color_css('color', $cmsmasters_option['green-planet' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.cmsmasters_campaigns .cmsmasters_owl_slider .owl-buttons > div:hover span, 
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_img_wrap .preloader, 
	{$rule}.header_donation_but > a.cmsmasters_button, 	 
	{$rule}.cmsmasters_donations_bg {
		" . cmsmasters_color_css('color', $cmsmasters_option['green-planet' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_cont_wrap, 
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_campaign_inner, 
	{$rule}.cmsmasters_featured_campaign .campaign, 
	{$rule}#submit-donation-form input[type='checkbox'] + .field_before:before, 
	{$rule}#submit-donation-form input[type='radio'] + .field_before:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['green-planet' . '_' . $scheme . '_bg']) . "
	}

	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['green-planet' . '_' . $scheme . '_bg']) . "
	}

	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.cmsmasters_donations_alternate {
		" . cmsmasters_color_css('color', $cmsmasters_option['green-planet' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsmasters_campaigns .cmsmasters_owl_slider .owl-buttons > div,
	{$rule}.header_donation_but > a.cmsmasters_button:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['green-planet' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsmasters_donations_border {
		" . cmsmasters_color_css('color', $cmsmasters_option['green-planet' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_details_item, 
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_info, 
	{$rule}#submit-donation-form input[type='checkbox'] + .field_before:before, 
	{$rule}#submit-donation-form input[type='radio'] + .field_before:before, 
	{$rule}.opened-article > .campaign .campaign_meta_wrap > div, 
	{$rule}.opened-article > .campaign .campaign_meta_wrap, 
	{$rule}.cmsmasters_donations .donation .img_placeholder, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_footer, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_cont_wrap_bottom, 
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_campaign_inner, 
	{$rule}.cmsmasters_featured_campaign .campaign {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['green-planet' . '_' . $scheme . '_border']) . "
	} 

	{$rule}.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['green-planet' . '_' . $scheme . '_border']) . "
	} 

	/* Finish Borders Color */

	/* Start Secondary Color */
	
	{$rule}.cmsmasters_campaign_header a:hover,
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_rest_amount,
	{$rule}.cmsmasters_donation_amount_currency {
		" . cmsmasters_color_css('color', $cmsmasters_option['green-planet' . '_' . $scheme . '_secondary']) . "
	}
	{$rule}.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['green-planet' . '_' . $scheme . '_secondary']) . "
	}
	{$rule}.cmsmasters_campaign_donate_button .button {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['green-planet' . '_' . $scheme . '_secondary']) . "
	}

	/* Finish Secondary Color */

/***************** Finish {$title} CMSMasters Donations Color Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('green_planet_theme_colors_secondary_filter', 'green_planet_donations_colors');

