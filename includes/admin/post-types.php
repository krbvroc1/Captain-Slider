<?php

// Register Slides Post Type

function ctslider_register_slides_posttype() {
	$labels = array(
		'name' 				=> _x( 'Slides', 'post type general name' ),
		'singular_name'		=> _x( 'Slide', 'post type singular name' ),
		'add_new' 			=> __( 'Add New Slide', 'ctslider' ),
		'add_new_item' 		=> __( 'Slide', 'ctslider' ),
		'edit_item' 		=> __( 'Edit Slide', 'ctslider' ),
		'new_item' 			=> __( 'New Slide', 'ctslider' ),
		'view_item' 		=> __( 'View Slide', 'ctslider' ),
		'search_items' 		=> __( 'Search Slides', 'ctslider' ),
		'not_found' 		=> __( 'No Slides Found', 'ctslider' ),
		'not_found_in_trash'=> __( 'No Slides Found In Trash', 'ctslider' ),
		'parent_item_colon' => __( 'Parent Slide', 'ctslider' ),
		'menu_name'			=> __( 'All Slides', 'ctslider' )
	);

	$taxonomies = array();

	$supports = array( 'title', 'thumbnail', 'page-attributes' );
	
	$post_type_args = array(
		'labels' 			=> $labels,
		'singular_label' 	=> __( 'Slide', 'ctslider' ),
		'public' 			=> true,
		'show_ui' 			=> true,
		'publicly_queryable'=> true,
		'query_var'			=> true,
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> false,
		'rewrite' 			=> array( 'slug' => 'slides', 'with_front' => false ),
		'supports' 			=> $supports,
		'menu_position' 	=> 28,
		'menu_icon' 		=> CTSLIDER_PLUGIN_URL . 'assets/images/icon.png',
		'taxonomies'		=> $taxonomies
	 );
	 register_post_type( 'slides', $post_type_args );
}
add_action( 'init', 'ctslider_register_slides_posttype' );


// Rename Slider Main Menu Title
function ctslider_edit_admin_menus() {
	global $menu;
	global $submenu;
	$menu[28][0] = 'Captain Slider';
}
add_action( 'admin_menu', 'ctslider_edit_admin_menus' );