<?php
/**
 * @package 	WordPress
 * @subpackage 	Green Planet
 * @version		1.0.0
 * 
 * CMSMasters Donations Campaign Vertical Format
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_campaign_metadata);

$image = in_array('image', $cmsmasters_metadata) ? true : false;
$link = in_array('link', $cmsmasters_metadata) ? true : false;
$rest_amount = in_array('rest_amount', $cmsmasters_metadata) ? true : false;
$donated_percent = in_array('donated_percent', $cmsmasters_metadata) ? true : false;
$excerpt = in_array('excerpt', $cmsmasters_metadata) ? true : false;
$donation_but = in_array('donation_but', $cmsmasters_metadata) ? true : false;


global $post;

$camp = $post;
?>
<!--_________________________ Start Vertical Campaign _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
	if ($image) {
		echo '<div class="cmsmasters_campaign_wrap_img">';
			green_planet_thumb_rollover($camp->ID, 'cmsmasters-square-thumb', false, $link, false, false, false, false, false, false, true, false, false);
		echo '</div>';
	}
	
	
	if ($donated_percent) {
		green_planet_donations_campaign_donated($camp->ID, 'page', 'vertical');
	}
	?>
	<div class="cmsmasters_campaign_cont">
		<div class="cmsmasters_campaign_wrap_heading">
			<?php 

			if ($rest_amount) {
				green_planet_donations_campaign_rest_amount($camp->ID);
			}

			green_planet_donations_campaign_heading($camp->ID, 'h2', $link);
			
			
			?>
		</div>
		<?php
		if ($excerpt) {
			if ($camp->post_excerpt != '') {
				$cmsmasters_content = $camp->post_excerpt;
			} else {
				$cmsmasters_content = $camp->post_content;
			}
			
			
			green_planet_donations_campaign_exc_cont($cmsmasters_content);
		}
		
		
		if ($donation_but) {
			green_planet_donations_campaign_donate_button($camp->ID);
		}
		?>
	</div>
</article>
<!--_________________________ Finish Vertical Campaign _________________________ -->

