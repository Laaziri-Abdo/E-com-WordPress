<?php
/**
 * @package 	WordPress
 * @subpackage 	Green Planet
 * @version		1.0.0
 * 
 * CMSMasters Donations Single Campaign Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = green_planet_get_global_options();


$campaign_tags = get_the_terms(get_the_ID(), 'cp-tags');


$cmsmasters_campaign_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_campaign_sharing_box', true);

$cmsmasters_campaign_author_box = get_post_meta(get_the_ID(), 'cmsmasters_campaign_author_box', true);

$cmsmasters_campaign_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_campaign_more_posts', true);

$cmsmasters_campaign_title = get_post_meta(get_the_ID(), 'cmsmasters_campaign_title', true);

?>
<!--_________________________ Start Standard Campaign _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsmasters_campaign_cont">
	<?php
		if (!post_password_required() && has_post_thumbnail()) {
			green_planet_thumb(get_the_ID(), 'post-thumbnail', false, false, true, true, true, true, false);
		}
		
		
		echo '<div class="campaign_meta_wrap">';
		
			green_planet_donations_campaign_target(get_the_ID(), true);
			
			green_planet_donations_campaign_donations_count(get_the_ID(), true);
			
			green_planet_donations_campaign_donated(get_the_ID(), 'post');
			
			green_planet_donations_campaign_donate_button(get_the_ID(), true);
			
		echo '</div>';
		
		
		if ($cmsmasters_campaign_title == 'true') {
			green_planet_donations_campaign_heading(get_the_ID(), 'h2', false);
		}
		
		
		if ( 
			$cmsmasters_option['green-planet' . '_donations_campaign_date'] || 
			$cmsmasters_option['green-planet' . '_donations_campaign_author'] || 
			$cmsmasters_option['green-planet' . '_donations_campaign_cat'] || 
			$cmsmasters_option['green-planet' . '_donations_campaign_tag'] || 
			$cmsmasters_option['green-planet' . '_donations_campaign_like'] || 
			$cmsmasters_option['green-planet' . '_donations_campaign_comment'] 
		) {
			echo '<div class="cmsmasters_campaign_cont_info entry-meta' . ((get_the_content() == '') ? ' no_bdb' : '') . '">';
				
				green_planet_donations_campaign_date('post');
				
				green_planet_donations_campaign_category(get_the_ID(), 'cp-categs', 'post');
				
				green_planet_donations_campaign_author('post');
				
				green_planet_donations_campaign_tags(get_the_ID(), 'cp-tags', 'post');
				
				if ( 
					$cmsmasters_option['green-planet' . '_donations_campaign_like'] || 
					$cmsmasters_option['green-planet' . '_donations_campaign_comment'] 
				) {
					echo '<div class="cmsmasters_campaign_meta_info">';
						
						green_planet_donations_campaign_comments('post');
						
						green_planet_donations_campaign_like('post');
						
					echo '</div>';
				}
				
			echo '</div>';
		}
		
		
		if (get_the_content() != '') {
			echo '<div class="cmsmasters_campaign_content entry-content">';
				
				the_content();
				
				
				wp_link_pages(array( 
					'before' => '<div class="subpage_nav">' . '<strong>' . esc_html__('Pages', 'green-planet') . ':</strong>', 
					'after' => '</div>', 
					'link_before' => '<span>', 
					'link_after' => '</span>'  
				));
				
			echo '<div class="cl"></div>' . 
			'</div>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Standard Campaign _________________________ -->
<?php

if ($cmsmasters_campaign_sharing_box == 'true') {
	green_planet_sharing_box(esc_html__('Share this campaign?', 'green-planet'), 'h4');
}


if ($cmsmasters_campaign_author_box == 'true') {
	green_planet_author_box(esc_html__('About author', 'green-planet'), 'h4');
}


if ($campaign_tags) {
	$tgsarray = array();
	
	foreach ($campaign_tags as $tagone) {
		$tgsarray[] = $tagone->term_id;
	}  
} else {
	$tgsarray = '';
}


if ($cmsmasters_campaign_more_posts != 'hide') {
	green_planet_donations_related( 
		'h4', 
		esc_html__('More campaigns', 'green-planet'), 
		esc_html__('No campaigns found', 'green-planet'), 
		$cmsmasters_campaign_more_posts, 
		$tgsarray, 
		$cmsmasters_option['green-planet' . '_donations_more_campaigns_count'], 
		$cmsmasters_option['green-planet' . '_donations_more_campaigns_pause'], 
		'campaign', 
		'cp-tags' 
	);
}


comments_template();

