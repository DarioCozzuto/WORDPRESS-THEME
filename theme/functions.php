<?php

// ACF Theme Setting Pages 

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

    acf_add_options_page(array(
		'page_title' 	=> 'Theme Left Menu Settings',
		'menu_title'	=> 'Left Menu',
		'parent_slug'	=> 'theme-general-settings',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Block Container',
		'menu_title'	=> 'Block Container',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}




// Theme Menu

function wpb_theme_menu() {
    register_nav_menus(array(
        'header-left-menu' => __( 'Header Left Menu' ),
        'header-right-menu' => __( 'Header Right Menu' ),
        'pop-up-left-menu' => __( 'Pop up left Menu' )
      ));
  }
  add_action( 'init', 'wpb_theme_menu' );


  
?>