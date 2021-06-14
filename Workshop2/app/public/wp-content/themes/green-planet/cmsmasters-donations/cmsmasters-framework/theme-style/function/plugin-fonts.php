<?php
/**
 * @package 	WordPress
 * @subpackage 	Green Planet
 * @version 	1.0.0
 * 
 * CMSMasters Donations Fonts Rules
 * Created by CMSMasters
 * 
 */


function green_planet_donations_fonts($custom_css) {
	$cmsmasters_option = green_planet_get_global_options();
	
	
	$custom_css .= "
/***************** Start CMSMasters Donations Font Styles ******************/

	/* Start Content Font */
	.cmsmasters_single_slider_campaign .cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title_wrap * {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_content_font_google_font']) . $cmsmasters_option['green-planet' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['green-planet' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['green-planet' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['green-planet' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_content_font_font_style'] . ";
	}
	
	.cmsmasters_single_slider_campaign .cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title_wrap * , 
	.cmsmasters_campaigns .campaign .cmsmasters_stat_title {
		text-transform:none;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start Navigation Title Font */
	/* Finish Navigation Title Font */
	
	
	/* Start H1 Font */
	.donations.opened-article > .donation .cmsmasters_donation_amount_currency {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_h1_font_google_font']) . $cmsmasters_option['green-planet' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['green-planet' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['green-planet' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['green-planet' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['green-planet' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['green-planet' . '_h1_font_text_decoration'] . ";
	}

	.donations.opened-article > .donation .cmsmasters_donation_amount_currency {
		font-size:" . ((int) $cmsmasters_option['green-planet' . '_h1_font_font_size'] - 2) . "px;
		font-style:" . $cmsmasters_option['green-planet' . '_h5_font_font_style'] . ";
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	/* Finish H2 Font */
	
	
	/* Start H3 Font */	
	.cmsmasters_donation_field > label, 
	.opened-article > .campaign .campaign_meta_wrap .cmsmasters_stat_title_wrap * {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_h3_font_google_font']) . $cmsmasters_option['green-planet' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['green-planet' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['green-planet' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['green-planet' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['green-planet' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['green-planet' . '_h3_font_text_decoration'] . ";
	}
	
	.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_donations_count_title, 
	.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_target_title {
		font-size:" . ((int) $cmsmasters_option['green-planet' . '_h3_font_font_size'] - 8) . "px;
	}
	
	.opened-article > .campaign .campaign_meta_wrap .cmsmasters_stat_title_wrap * {
		font-size:" . ((int) $cmsmasters_option['green-planet' . '_h3_font_font_size'] - 10) . "px;
	}
	
	@media only screen and (max-width: 600px) {
		.cmsmasters_donation_field > label {
			font-size:" . ((int) $cmsmasters_option['green-planet' . '_h3_font_font_size'] - 8) . "px;
		}
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	
	.cmsmasters_single_slider_campaign .cmsmasters_single_slider_item_title {
		font-size:" . ((int) $cmsmasters_option['green-planet' . '_h4_font_font_size'] + 2) . "px;
	}
	
	.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_donations_count_number, 
	.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_target_number {
		font-size:" . ((int) $cmsmasters_option['green-planet' . '_h4_font_font_size'] + 4) . "px;
	}
	
	.cmsmasters_featured_campaign .cmsmasters_campaign_donated_percent .cmsmasters_stat_container {
		height:" . ((int) $cmsmasters_option['green-planet' . '_h4_font_line_height'] * 2 + 220 + 56) . "px;
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.donations.opened-article > .donation .cmsmasters_donation_campaign a,
	.cmsmasters_stats .cmsmasters_stat_title_wrap span,
	.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_rest_amount  {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_h5_font_google_font']) . $cmsmasters_option['green-planet' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['green-planet' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['green-planet' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['green-planet' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['green-planet' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['green-planet' . '_h5_font_text_decoration'] . ";
	}
	
	.cmsmasters_campaign_donate_button .button {
		font-size:" . ((int) $cmsmasters_option['green-planet' . '_h5_font_font_size'] - 2) . "px;
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.donations.opened-article > .donation .cmsmasters_donation_details_item_title, 
	.donations.opened-article > .donation .cmsmasters_donation_details_item_title a, 
	.donations.opened-article > .donation .cmsmasters_donation_details_item_value, 
	.donations.opened-article > .donation .cmsmasters_donation_details_item_value a, 
	.cmsmasters_single_slider_campaign .cmsmasters_stat_subtitle, 
	.opened-article > .campaign .cmsmasters_campaign_cont_info > span * , 
	.opened-article > .campaign .cmsmasters_campaign_cont_info > span, 
	.cmsmasters_donations .donation .cmsmasters_donation_campaign a, 
	#page .cmsmasters_featured_campaign .cmsmasters_campaign_donated_percent .cmsmasters_stat_title {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_h6_font_google_font']) . $cmsmasters_option['green-planet' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['green-planet' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['green-planet' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['green-planet' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['green-planet' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['green-planet' . '_h6_font_text_decoration'] . ";		
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	.header_donation_but .cmsmasters_button {
		font-size:" . ((int) $cmsmasters_option['green-planet' . '_button_font_font_size'] - 1) . "px;
	}
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	/* Finish Small Text Font */

/***************** Finish CMSMasters Donations Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('green_planet_theme_fonts_filter', 'green_planet_donations_fonts');

