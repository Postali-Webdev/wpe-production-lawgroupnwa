<?php
/**
 * Custom Espanol Posts 
 *
 * @package Postali Parent
 * @author Postali LLC
 */

function create_custom_post_type_espanol_blogs() {

// set up labels
	$labels = array(
 		'name' => 'Espanol Blogs',
    	'singular_name' => 'Espanol Blog',
    	'add_new' => 'Add New Espanol Blog',
    	'add_new_item' => 'Add New Espanol Blog',
    	'edit_item' => 'Edit Espanol Blog',
    	'new_item' => 'New Espanol Blog',
    	'all_items' => 'All Espanol Blogs',
    	'view_item' => 'View Espanol Blogs',
    	'search_items' => 'Search Espanol Blogs',
    	'not_found' =>  'No Espanol Blogs Found',
    	'not_found_in_trash' => 'No Espanol Blogs found in Trash', 
    	'parent_item_colon' => '',
    	'menu_name' => 'Espanol Blogs',
    );
    //register post type
	register_post_type( 'Espanol Blogs', array(
		'labels' => $labels,
        'menu_icon' => 'dashicons-admin-post',
		'has_archive' => true,
 		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail'),	
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => '/espanol/blog', 'with_front' => true ),
		)
	);

}

// Register Custom Taxonomy
function espanol_blog_category() {

	$labels = array(
		'name'                       => _x( 'Espanol Blog Category', 'Espanol Blog Categories' ),
		'singular_name'              => _x( 'Espanol Blog Category', 'Espanol Blog Category' ),
		'menu_name'                  => __( 'Espanol Blog Category' ),
		'all_items'                  => __( 'All Espanol Blog Categories' ),
		'new_item_name'              => __( 'New Espanol Blog Category' ),
		'add_new_item'               => __( 'Add Espanol Blog Category' ),
		'edit_item'                  => __( 'Edit Espanol Blog Category' ),
		'update_item'                => __( 'Update Espanol Blog Category' ),
		'view_item'                  => __( 'View Espanol Blog Category' ),
		'separate_items_with_commas' => __( 'Separate Espanol Blog Categories with commas' ),
		'add_or_remove_items'        => __( 'Add or remove Espanol Blog Categories' ),
		'popular_items'              => __( 'Popular Espanol Blog Categories' ),
		'search_items'               => __( 'Search Espanol Blog Categories' ),
		'not_found'                  => __( 'Not Found' ),
		'no_terms'                   => __( 'No Espanol Blog Categories' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite' => array( 'slug' => '/espanol/category', 'with_front' => false ),
	);
	register_taxonomy( 'espanol_blog_category', array( 'espanolblogs' ), $args );

}
add_action( 'init', 'espanol_blog_category', 0 );
add_action( 'init', 'create_custom_post_type_espanol_blogs' );