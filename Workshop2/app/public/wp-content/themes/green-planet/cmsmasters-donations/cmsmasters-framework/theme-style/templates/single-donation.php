<?php
/**
 * @package 	WordPress
 * @subpackage 	Green Planet
 * @version		1.0.5
 * 
 * CMSMasters Donations Single Donation Template
 * Created by CMSMasters
 * 
 */

$cmsmasters_donation_nav_box = get_post_meta(get_the_ID(), 'cmsmasters_donation_nav_box', true);

?>
<!--_________________________ Start Standard Donation _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsmasters_donation_info">
		<?php
		if (!post_password_required() && has_post_thumbnail()) {
			echo '<div class="cmsmasters_donation_info_img">';
				green_planet_thumb(get_the_ID(), 'cmsmasters-square-thumb', false, 'img_' . get_the_ID(), true, true, true, true, false);
			echo '</div>';
		}
		?>
		<div class="cmsmasters_donation_info_cont">
			<?php 
			green_planet_donations_donation_heading(get_the_ID(), 'h2', false);
			
			green_planet_donations_donation_amount_currency(get_the_ID(), 'post');
			
			green_planet_donations_donation_campaign(get_the_ID(), 'post');
			?>
		</div>
	</div>
	<?php
	if (!is_anonymous_donation(get_the_ID()) && get_the_excerpt() != '') {
		echo '<div class="cmsmasters_donation_content entry-content">';
			
			the_excerpt();
			
		echo '</div>';
	}
	
	green_planet_donations_donation_details(get_the_ID(), true);
	?>
</article>
<!--_________________________ Finish Standard Donation _________________________ -->
<?php 

if ($cmsmasters_donation_nav_box == 'true') {
	green_planet_prev_next_posts();
}
