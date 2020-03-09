<?php
/*
    Plugin Name: <put name here ex. Scool Classes> - Post Types
    Plugin URI: 
    Description: Añade Post Types al sitio Gym Fitness
    Version: 1.0.0
    Author: New York Software Lab
    Author URI: https://nysoftwarelab.com/
    Text Domain: School
*/

if(!defined('ABSPATH')) die();

// For example "School Classes" Cutom Post Type 
// Use : "Classes / Class" for the folowing labels and descriptions
// Registrar Custom Post Type
function school_classes_post_type() {

	$labels = array(
		'name'                  => _x( 'Classes', 'Post Type General Name', 'school' ),
		'singular_name'         => _x( 'Class', 'Post Type Singular Name', 'school' ),
		'menu_name'             => __( 'Classes', 'school' ),
		'name_admin_bar'        => __( 'Class', 'school' ),
		'archives'              => __( 'Archive', 'school' ),
		'attributes'            => __( 'Atribute', 'school' ),
		'parent_item_colon'     => __( 'Class Parent', 'school' ),
		'all_items'             => __( 'All Classes', 'school' ),
		'add_new_item'          => __( 'Add new Class', 'school' ),
		'add_new'               => __( 'Add new Class', 'school' ),
		'new_item'              => __( 'Nueva Clase', 'school' ),
		'edit_item'             => __( 'Edit Class', 'school' ),
		'update_item'           => __( 'Update Class', 'school' ),
		'view_item'             => __( 'View Class', 'school' ),
		'view_items'            => __( 'View Class', 'school' ),
		'search_items'          => __( 'Search Class', 'school' ),
		'not_found'             => __( 'Not found', 'school' ),
		'not_found_in_trash'    => __( 'No found in trash', 'school' ),
		'featured_image'        => __( 'Featured Image', 'school' ),
		'set_featured_image'    => __( 'Set Featured Image', 'school' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'school' ),
		'use_featured_image'    => __( 'Use Featured Image', 'school' ),
		'insert_into_item'      => __( 'Insert into Class', 'school' ),
		'uploaded_to_this_item' => __( 'Upload to this Class', 'school' ),
		'items_list'            => __( 'List Classes', 'school' ),
		'items_list_navigation' => __( 'Navigate the Classes', 'school' ),
		'filter_items_list'     => __( 'Filter Classes', 'school' ),
	);
	$args = array(
		'label'                 => __( 'Class', 'school' ),
		'description'           => __( 'Classes for web', 'school' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'school_clases', $args );

}
add_action( 'init', 'school_clases_post_type', 0 );
