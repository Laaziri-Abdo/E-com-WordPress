<?php
/**
 * @package 	WordPress
 * @subpackage 	Green Planet
 * @version		1.0.0
 * 
 * Posts Slider Post Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_post_metadata);


$title = in_array('title', $cmsmasters_metadata) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_metadata) && green_planet_slider_post_check_exc_cont('post')) ? true : false;
$date = in_array('date', $cmsmasters_metadata) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_metadata))) ? true : false;
$author = in_array('author', $cmsmasters_metadata) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_metadata))) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;
$more = in_array('more', $cmsmasters_metadata) ? true : false;


$cmsmasters_post_format = get_post_format();

?>
<!--_________________________ Start Posts Slider Post Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_slider_post'); ?>>
	<div class="cmsmasters_slider_post_outer">
	<?php
		echo '<div class="cmsmasters_slider_post_date_img_wrap">';
		
			green_planet_thumb_rollover(get_the_ID(), 'cmsmasters-blog-masonry-thumb', false, false, false, false, false, false, false, false, true, false, false);
		
		echo '</div>';
		
		
		if ($title || $categories || $comments  || $likes|| $excerpt || $more || $date || $author) {
			echo '<div class="cmsmasters_slider_post_inner">';

				if ($date || $author) {
					echo '<div class="cmsmasters_slider_post_cont_info entry-meta">';
					
						$date ? green_planet_get_slider_post_date('post') : '';
						
						$author ? green_planet_get_slider_post_author('post') : '';
						
					echo '</div>';
				}
				
				$title ? green_planet_slider_post_heading(get_the_ID(), 'post', 'h2') : '';
				
				
				if ($categories || $comments || $likes) {
					echo '<footer class="cmsmasters_slider_post_footer entry-meta' . (($likes || $comments) ? ' enable_post_meta' : '') . '">';
						
						$categories ? green_planet_get_slider_post_category(get_the_ID(), 'category', 'post') : '';
								
						
					echo '</footer>';
				}
				
				
				$excerpt ? green_planet_slider_post_exc_cont('post') : '';

					
				
				if ($more) {
					if ($comments || $likes) {
						echo '<div class="cmsmasters_slider_post_meta_info">';
							
							$comments ? green_planet_get_slider_post_comments('post') : '';
							
							$likes ? green_planet_slider_post_like('post') : '';
							
						echo '</div>';
					}
				
					$more ? green_planet_slider_post_more(get_the_ID()) : '';
				} else {
					if ($comments || $likes) {
						echo '<div class="cmsmasters_slider_post_meta_info cmsmasters_fln">';
							
							$comments ? green_planet_get_slider_post_comments('post') : '';
							
							$likes ? green_planet_slider_post_like('post') : '';
							
						echo '</div>';
					}
				}
				
				
			echo '</div>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Posts Slider Post Article _________________________ -->

