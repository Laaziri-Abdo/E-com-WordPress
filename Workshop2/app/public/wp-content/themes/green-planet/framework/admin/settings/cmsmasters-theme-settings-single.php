<?php 
/**
 * @package 	WordPress
 * @subpackage 	Green Planet
 * @version		1.0.0
 * 
 * Admin Panel Post, Project, Profile Settings
 * Created by CMSMasters
 * 
 */


function green_planet_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'green-planet');
	
	if (CMSMASTERS_PROJECT_COMPATIBLE && class_exists('Cmsmasters_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'green-planet');
	}
	
	if (CMSMASTERS_PROFILE_COMPATIBLE && class_exists('Cmsmasters_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'green-planet');
	}
	
	
	return apply_filters('cmsmasters_options_single_tabs_filter', $tabs);
}


function green_planet_options_single_sections() {
	$tab = green_planet_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'green-planet');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'green-planet');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'green-planet');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_sections_filter', $sections, $tab);
} 


function green_planet_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = green_planet_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = green_planet_settings_single_defaults();
	
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'green-planet' . '_blog_post_layout', 
			'title' => esc_html__('Layout Type', 'green-planet'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['green-planet' . '_blog_post_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'green-planet') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'green-planet') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'green-planet') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'green-planet' . '_blog_post_title', 
			'title' => esc_html__('Post Title', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_blog_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'green-planet' . '_blog_post_date', 
			'title' => esc_html__('Post Date', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_blog_post_date'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'green-planet' . '_blog_post_cat', 
			'title' => esc_html__('Post Categories', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_blog_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'green-planet' . '_blog_post_author', 
			'title' => esc_html__('Post Author', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_blog_post_author'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'green-planet' . '_blog_post_comment', 
			'title' => esc_html__('Post Comments', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_blog_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'green-planet' . '_blog_post_tag', 
			'title' => esc_html__('Post Tags', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_blog_post_tag'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'green-planet' . '_blog_post_like', 
			'title' => esc_html__('Post Likes', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_blog_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'green-planet' . '_blog_post_nav_box', 
			'title' => esc_html__('Posts Navigation Box', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_blog_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'green-planet' . '_blog_post_nav_order_cat', 
			'title' => esc_html__('Posts Navigation Order by Category', 'green-planet'), 
			'desc' => esc_html__('enable', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_blog_post_nav_order_cat'] 
		);
		
		if (class_exists('Cmsmasters_Content_Composer')) {
			$options[] = array( 
				'section' => 'post_section', 
				'id' => 'green-planet' . '_blog_post_share_box', 
				'title' => esc_html__('Sharing Box', 'green-planet'), 
				'desc' => esc_html__('show', 'green-planet'), 
				'type' => 'checkbox', 
				'std' => $defaults[$tab]['green-planet' . '_blog_post_share_box'] 
			);
		}
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'green-planet' . '_blog_post_author_box', 
			'title' => esc_html__('About Author Box', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_blog_post_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'green-planet' . '_blog_more_posts_box', 
			'title' => esc_html__('More Posts Box', 'green-planet'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['green-planet' . '_blog_more_posts_box'], 
			'choices' => array( 
				esc_html__('Show Related Posts', 'green-planet') . '|related', 
				esc_html__('Show Popular Posts', 'green-planet') . '|popular', 
				esc_html__('Show Recent Posts', 'green-planet') . '|recent', 
				esc_html__('Hide More Posts Box', 'green-planet') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'green-planet' . '_blog_more_posts_count', 
			'title' => esc_html__('More Posts Box Items Number', 'green-planet'), 
			'desc' => esc_html__('posts', 'green-planet'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['green-planet' . '_blog_more_posts_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'green-planet' . '_blog_more_posts_pause', 
			'title' => esc_html__('More Posts Slider Pause Time', 'green-planet'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'green-planet'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['green-planet' . '_blog_more_posts_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'green-planet' . '_portfolio_project_title', 
			'title' => esc_html__('Project Title', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_portfolio_project_title'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'green-planet' . '_portfolio_project_details_title', 
			'title' => esc_html__('Project Details Title', 'green-planet'), 
			'desc' => esc_html__('Enter a project details block title', 'green-planet'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['green-planet' . '_portfolio_project_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'green-planet' . '_portfolio_project_date', 
			'title' => esc_html__('Project Date', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_portfolio_project_date'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'green-planet' . '_portfolio_project_cat', 
			'title' => esc_html__('Project Categories', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_portfolio_project_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'green-planet' . '_portfolio_project_author', 
			'title' => esc_html__('Project Author', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_portfolio_project_author'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'green-planet' . '_portfolio_project_comment', 
			'title' => esc_html__('Project Comments', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_portfolio_project_comment'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'green-planet' . '_portfolio_project_tag', 
			'title' => esc_html__('Project Tags', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_portfolio_project_tag'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'green-planet' . '_portfolio_project_like', 
			'title' => esc_html__('Project Likes', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_portfolio_project_like'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'green-planet' . '_portfolio_project_link', 
			'title' => esc_html__('Project Link', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_portfolio_project_link'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'green-planet' . '_portfolio_project_share_box', 
			'title' => esc_html__('Sharing Box', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_portfolio_project_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'green-planet' . '_portfolio_project_nav_box', 
			'title' => esc_html__('Projects Navigation Box', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_portfolio_project_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'green-planet' . '_portfolio_project_nav_order_cat', 
			'title' => esc_html__('Projects Navigation Order by Category', 'green-planet'), 
			'desc' => esc_html__('enable', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_portfolio_project_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'green-planet' . '_portfolio_project_author_box', 
			'title' => esc_html__('About Author Box', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_portfolio_project_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'green-planet' . '_portfolio_more_projects_box', 
			'title' => esc_html__('More Projects Box', 'green-planet'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['green-planet' . '_portfolio_more_projects_box'], 
			'choices' => array( 
				esc_html__('Show Related Projects', 'green-planet') . '|related', 
				esc_html__('Show Popular Projects', 'green-planet') . '|popular', 
				esc_html__('Show Recent Projects', 'green-planet') . '|recent', 
				esc_html__('Hide More Projects Box', 'green-planet') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'green-planet' . '_portfolio_more_projects_count', 
			'title' => esc_html__('More Projects Box Items Number', 'green-planet'), 
			'desc' => esc_html__('projects', 'green-planet'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['green-planet' . '_portfolio_more_projects_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'green-planet' . '_portfolio_more_projects_pause', 
			'title' => esc_html__('More Projects Slider Pause Time', 'green-planet'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'green-planet'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['green-planet' . '_portfolio_more_projects_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'green-planet' . '_portfolio_project_slug', 
			'title' => esc_html__('Project Slug', 'green-planet'), 
			'desc' => esc_html__('Enter a page slug that should be used for your projects single item', 'green-planet'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['green-planet' . '_portfolio_project_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'green-planet' . '_portfolio_pj_categs_slug', 
			'title' => esc_html__('Project Categories Slug', 'green-planet'), 
			'desc' => esc_html__('Enter page slug that should be used on projects categories archive page', 'green-planet'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['green-planet' . '_portfolio_pj_categs_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'green-planet' . '_portfolio_pj_tags_slug', 
			'title' => esc_html__('Project Tags Slug', 'green-planet'), 
			'desc' => esc_html__('Enter page slug that should be used on projects tags archive page', 'green-planet'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['green-planet' . '_portfolio_pj_tags_slug'], 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'green-planet' . '_profile_post_title', 
			'title' => esc_html__('Profile Title', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_profile_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'green-planet' . '_profile_post_details_title', 
			'title' => esc_html__('Profile Details Title', 'green-planet'), 
			'desc' => esc_html__('Enter a profile details block title', 'green-planet'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['green-planet' . '_profile_post_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'green-planet' . '_profile_post_cat', 
			'title' => esc_html__('Profile Categories', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_profile_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'green-planet' . '_profile_post_comment', 
			'title' => esc_html__('Profile Comments', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_profile_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'green-planet' . '_profile_post_like', 
			'title' => esc_html__('Profile Likes', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_profile_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'green-planet' . '_profile_post_nav_box', 
			'title' => esc_html__('Profiles Navigation Box', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_profile_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'green-planet' . '_profile_post_nav_order_cat', 
			'title' => esc_html__('Profiles Navigation Order by Category', 'green-planet'), 
			'desc' => esc_html__('enable', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_profile_post_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'green-planet' . '_profile_post_share_box', 
			'title' => esc_html__('Sharing Box', 'green-planet'), 
			'desc' => esc_html__('show', 'green-planet'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['green-planet' . '_profile_post_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'green-planet' . '_profile_post_slug', 
			'title' => esc_html__('Profile Slug', 'green-planet'), 
			'desc' => esc_html__('Enter a page slug that should be used for your profiles single item', 'green-planet'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['green-planet' . '_profile_post_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'green-planet' . '_profile_pl_categs_slug', 
			'title' => esc_html__('Profile Categories Slug', 'green-planet'), 
			'desc' => esc_html__('Enter page slug that should be used on profiles categories archive page', 'green-planet'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['green-planet' . '_profile_pl_categs_slug'], 
			'class' => '' 
		);
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_fields_filter', $options, $tab);
}

