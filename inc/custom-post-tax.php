<?php

if ( ! function_exists('custom_post_type') ) {

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'about', 'Post Type General Name', 'kristinfast' ),
		'singular_name'         => _x( 'about', 'Post Type Singular Name', 'kristinfast' ),
		'menu_name'             => __( 'about', 'kristinfast' ),
		'name_admin_bar'        => __( 'about', 'kristinfast' ),
		'archives'              => __( 'Item Archives', 'kristinfast' ),
		'attributes'            => __( 'Item Attributes', 'kristinfast' ),
		'parent_item_colon'     => __( 'Parent Item:', 'kristinfast' ),
		'all_items'             => __( 'All Items', 'kristinfast' ),
		'add_new_item'          => __( 'Add New Item', 'kristinfast' ),
		'add_new'               => __( 'Add New', 'kristinfast' ),
		'new_item'              => __( 'New Item', 'kristinfast' ),
		'edit_item'             => __( 'Edit Item', 'kristinfast' ),
		'update_item'           => __( 'Update Item', 'kristinfast' ),
		'view_item'             => __( 'View Item', 'kristinfast' ),
		'view_items'            => __( 'View Items', 'kristinfast' ),
		'search_items'          => __( 'Search Item', 'kristinfast' ),
		'not_found'             => __( 'Not found', 'kristinfast' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'kristinfast' ),
		'featured_image'        => __( 'Featured Image', 'kristinfast' ),
		'set_featured_image'    => __( 'Set featured image', 'kristinfast' ),
		'remove_featured_image' => __( 'Remove featured image', 'kristinfast' ),
		'use_featured_image'    => __( 'Use as featured image', 'kristinfast' ),
		'insert_into_item'      => __( 'Insert into item', 'kristinfast' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'kristinfast' ),
		'items_list'            => __( 'Items list', 'kristinfast' ),
		'items_list_navigation' => __( 'Items list navigation', 'kristinfast' ),
		'filter_items_list'     => __( 'Filter items list', 'kristinfast' ),
	);
	$args = array(
		'label'                 => __( 'about', 'kristinfast' ),
		'description'           => __( 'pieces of me', 'kristinfast' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'about', $args );

  $labels = array(
    'name'                  => _x( 'Dev Projects', 'Post Type General Name', 'kristinfast' ),
    'singular_name'         => _x( 'Dev Project', 'Post Type Singular Name', 'kristinfast' ),
    'menu_name'             => __( 'Dev Projects', 'kristinfast' ),
    'name_admin_bar'        => __( 'Dev Projects', 'kristinfast' ),
    'archives'              => __( 'Dev Project Archives', 'kristinfast' ),
    'attributes'            => __( 'Dev Project Attributes', 'kristinfast' ),
    'parent_item_colon'     => __( 'Parent Project:', 'kristinfast' ),
    'all_items'             => __( 'All Dev Projects', 'kristinfast' ),
    'add_new_item'          => __( 'Add New Dev Project', 'kristinfast' ),
    'add_new'               => __( 'Add New', 'kristinfast' ),
    'new_item'              => __( 'New Dev Project', 'kristinfast' ),
    'edit_item'             => __( 'Edit Dev Project', 'kristinfast' ),
    'update_item'           => __( 'Update Dev Project', 'kristinfast' ),
    'view_item'             => __( 'View Dev Project', 'kristinfast' ),
    'view_items'            => __( 'View Dev Projects', 'kristinfast' ),
    'search_items'          => __( 'Search Dev Projects', 'kristinfast' ),
    'not_found'             => __( 'Not found', 'kristinfast' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'kristinfast' ),
    'featured_image'        => __( 'Featured Image', 'kristinfast' ),
    'set_featured_image'    => __( 'Set featured image', 'kristinfast' ),
    'remove_featured_image' => __( 'Remove featured image', 'kristinfast' ),
    'use_featured_image'    => __( 'Use as featured image', 'kristinfast' ),
    'insert_into_item'      => __( 'Insert into item', 'kristinfast' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'kristinfast' ),
    'items_list'            => __( 'Items list', 'kristinfast' ),
    'items_list_navigation' => __( 'Items list navigation', 'kristinfast' ),
    'filter_items_list'     => __( 'Filter items list', 'kristinfast' ),
  );
  $args = array(
    'label'                 => __( 'Dev Projects', 'kristinfast' ),
    'description'           => __( 'Tech Work I\'ve Done', 'kristinfast' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 10,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => false,
    'capability_type'       => 'page',
  );
  register_post_type( 'dev-projects', $args );

}
add_action( 'init', 'custom_post_type', 0 );

}

if ( ! function_exists( 'custom_taxonomy' ) ) {

// Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Interests', 'Taxonomy General Name', 'kristinfast' ),
		'singular_name'              => _x( 'Interest', 'Taxonomy Singular Name', 'kristinfast' ),
		'menu_name'                  => __( 'Taxonomy', 'kristinfast' ),
		'all_items'                  => __( 'All Items', 'kristinfast' ),
		'parent_item'                => __( 'Parent Item', 'kristinfast' ),
		'parent_item_colon'          => __( 'Parent Item:', 'kristinfast' ),
		'new_item_name'              => __( 'New Item Name', 'kristinfast' ),
		'add_new_item'               => __( 'Add New Item', 'kristinfast' ),
		'edit_item'                  => __( 'Edit Item', 'kristinfast' ),
		'update_item'                => __( 'Update Item', 'kristinfast' ),
		'view_item'                  => __( 'View Item', 'kristinfast' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'kristinfast' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'kristinfast' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'kristinfast' ),
		'popular_items'              => __( 'Popular Items', 'kristinfast' ),
		'search_items'               => __( 'Search Items', 'kristinfast' ),
		'not_found'                  => __( 'Not Found', 'kristinfast' ),
		'no_terms'                   => __( 'No items', 'kristinfast' ),
		'items_list'                 => __( 'Items list', 'kristinfast' ),
		'items_list_navigation'      => __( 'Items list navigation', 'kristinfast' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'interests', array( 'about' ), $args );

  	$labels = array(
  		'name'                       => _x( 'Project Types', 'Taxonomy General Name', 'kristinfast' ),
  		'singular_name'              => _x( 'Project Type', 'Taxonomy Singular Name', 'kristinfast' ),
  		'menu_name'                  => __( 'Project Type', 'kristinfast' ),
  		'all_items'                  => __( 'All Project Types', 'kristinfast' ),
  		'parent_item'                => __( 'Parent Type', 'kristinfast' ),
  		'parent_item_colon'          => __( 'Parent Type:', 'kristinfast' ),
  		'new_item_name'              => __( 'New Item Type', 'kristinfast' ),
  		'add_new_item'               => __( 'Add New Type', 'kristinfast' ),
  		'edit_item'                  => __( 'Edit Project Type', 'kristinfast' ),
  		'update_item'                => __( 'Update Project Type', 'kristinfast' ),
  		'view_item'                  => __( 'View Project Type', 'kristinfast' ),
  		'separate_items_with_commas' => __( 'Separate items with commas', 'kristinfast' ),
  		'add_or_remove_items'        => __( 'Add or remove items', 'kristinfast' ),
  		'choose_from_most_used'      => __( 'Choose from the most used', 'kristinfast' ),
  		'popular_items'              => __( 'Popular Types', 'kristinfast' ),
  		'search_items'               => __( 'Search Types', 'kristinfast' ),
  		'not_found'                  => __( 'Not Found', 'kristinfast' ),
  		'no_terms'                   => __( 'No items', 'kristinfast' ),
  		'items_list'                 => __( 'Items list', 'kristinfast' ),
  		'items_list_navigation'      => __( 'Items list navigation', 'kristinfast' ),
  	);
  	$args = array(
  		'labels'                     => $labels,
  		'hierarchical'               => true,
  		'public'                     => true,
  		'show_ui'                    => true,
  		'show_admin_column'          => true,
  		'show_in_nav_menus'          => true,
  		'show_tagcloud'              => true,
  	);
  	register_taxonomy( 'project-types', array( 'dev-projects' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );

}

?>
