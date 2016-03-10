<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

 // Register Custom Taxonomy
 function register_product_type_taxonomy() {

 	$labels = array(
 		'name'                       => 'Product Types',
 		'singular_name'              => 'Product Type',
 		'menu_name'                  => 'Product Type',
 		'all_items'                  => 'All Product Types',
 		'parent_item'                => 'Parent Product Type',
 		'parent_item_colon'          => 'Parent Product Type:',
 		'new_item_name'              => 'New Product Type Name',
 		'add_new_item'               => 'Add New Product Type',
 		'edit_item'                  => 'Edit Product Type',
 		'update_item'                => 'Update Product Type',
 		'view_item'                  => 'View Product Type',
 		'separate_items_with_commas' => 'Separate items with commas',
 		'add_or_remove_items'        => 'Add or remove items',
 		'choose_from_most_used'      => 'Choose from the most used',
 		'popular_items'              => 'Popular Items',
 		'search_items'               => 'Search Product Types',
 		'not_found'                  => 'Not Found',
 		'no_terms'                   => 'No Product Types',
 		'items_list'                 => 'Product Types List',
 		'items_list_navigation'      => 'Product Types List Navigation',
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
 	register_taxonomy( 'product_type', array( 'product' ), $args );

 }
 add_action( 'init', 'register_product_type_taxonomy', 0 );

 // testimonial taxonomy
 // Register Custom Taxonomy
 function register_testimonial_taxonomy() {

 	$labels = array(
 		'name'                       => 'Testimonials',
 		'singular_name'              => 'Testimonial',
 		'menu_name'                  => 'Testimonial',
 		'all_items'                  => 'All Testimonial',
 		'parent_item'                => 'Parent Testimonial',
 		'parent_item_colon'          => 'Parent Testimonial:',
 		'new_item_name'              => 'New Testimonial Name',
 		'add_new_item'               => 'Add New Testimonial',
 		'edit_item'                  => 'Edit Testimonial',
 		'update_item'                => 'Update Testimonial',
 		'view_item'                  => 'View Testimonial',
 		'separate_items_with_commas' => 'Separate items with commas',
 		'add_or_remove_items'        => 'Add or remove items',
 		'choose_from_most_used'      => 'Choose from the most used',
 		'popular_items'              => 'Popular Items',
 		'search_items'               => 'Search Testimonials',
 		'not_found'                  => 'Not Found',
 		'no_terms'                   => 'No Testimonials',
 		'items_list'                 => 'Testimonials list',
 		'items_list_navigation'      => 'Testimonials list navigation',
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
 	register_taxonomy( 'testimonial_tax', array( 'testimonial' ), $args );

 }
 add_action( 'init', 'register_testimonial_taxonomy', 0 );
