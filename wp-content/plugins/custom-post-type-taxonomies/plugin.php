<?php
/*
Plugin Name: Custom Post Types & Taxonomies
Plugin URI:
Description: Adds all the custom post types & taxonomies being used on site
Author: AnattaDesign
Version: 1.0
Author URI: http://anattadesign.com/
*/

class Custom_Post_Types_Taxonomies {

	public function __construct() {
		add_action( 'init', array( $this, 'register_post_types' ) );
	}

	public function register_post_types() {

		$labels = array(
			'name'               => _x( 'Team Members', 'Team Member', 'dh_cpt' ),
			'singular_name'      => _x( 'Team Member', 'Team Member', 'dh_cpt' ),
			'menu_name'          => _x( 'Team Members', 'Team Member', 'dh_cpt' ),
			'name_admin_bar'     => _x( 'Team Member', 'Team Member', 'dh_cpt' ),
			'add_new'            => _x( 'Add New', 'Team Member', 'dh_cpt' ),
			'add_new_item'       => __( 'Add New Team Member', 'dh_cpt' ),
			'new_item'           => __( 'New Team Member', 'dh_cpt' ),
			'edit_item'          => __( 'Edit Team Member', 'dh_cpt' ),
			'view_item'          => __( 'View Team Member', 'dh_cpt' ),
			'all_items'          => __( 'All Team Members', 'dh_cpt' ),
			'search_items'       => __( 'Search Team Members', 'dh_cpt' ),
			'parent_item_colon'  => __( 'Parent Team Members:', 'dh_cpt' ),
			'not_found'          => __( 'No team members found.', 'dh_cpt' ),
			'not_found_in_trash' => __( 'No team members found in Trash.', 'dh_cpt' ),
		);

		$args = array(
			'labels'            => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'query_var'          => true,
			'rewrite'            => array(
				'slug'       => 'team',
				'with_front' => true
			),
			'capability_type'    => 'post',
			'hierarchical'       => false,
			'menu_position'      => 5,
			'supports'           => array(
				'title',
				'editor',
				'page-attributes'
			),
			'has_archive'        => 'team'
		);

		register_post_type( 'team_member', $args );
	}
}

$custom_post_types_taxonomies = new Custom_Post_Types_Taxonomies();