<?php

namespace WpifyPluginTutorial\PostTypes;

use WpifyPluginTutorial\Taxonomies\BookAuthorTaxonomy;

class BookPostType {
	const KEY = 'book';

	public function __construct() {
		add_action( 'init', array( $this, 'register' ), 0 );
	}

	public function register() {
		$labels = array(
			'name'                  => _x( 'Books', 'Post Type General Name', 'wpifypt' ),
			'singular_name'         => _x( 'Book', 'Post Type Singular Name', 'wpifypt' ),
			'menu_name'             => __( 'Books', 'wpifypt' ),
			'name_admin_bar'        => __( 'Book', 'wpifypt' ),
			'archives'              => __( 'Book Archives', 'wpifypt' ),
			'attributes'            => __( 'Book Attributes', 'wpifypt' ),
			'parent_item_colon'     => __( 'Parent Book:', 'wpifypt' ),
			'all_items'             => __( 'All Books', 'wpifypt' ),
			'add_new_item'          => __( 'Add New Book', 'wpifypt' ),
			'add_new'               => __( 'Add New', 'wpifypt' ),
			'new_item'              => __( 'New Book', 'wpifypt' ),
			'edit_item'             => __( 'Edit Book', 'wpifypt' ),
			'update_item'           => __( 'Update Book', 'wpifypt' ),
			'view_item'             => __( 'View Book', 'wpifypt' ),
			'view_items'            => __( 'View Books', 'wpifypt' ),
			'search_items'          => __( 'Search Book', 'wpifypt' ),
			'not_found'             => __( 'Not found', 'wpifypt' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'wpifypt' ),
			'featured_image'        => __( 'Featured Image', 'wpifypt' ),
			'set_featured_image'    => __( 'Set featured image', 'wpifypt' ),
			'remove_featured_image' => __( 'Remove featured image', 'wpifypt' ),
			'use_featured_image'    => __( 'Use as featured image', 'wpifypt' ),
			'insert_into_item'      => __( 'Insert into book', 'wpifypt' ),
			'uploaded_to_this_item' => __( 'Uploaded to this book', 'wpifypt' ),
			'items_list'            => __( 'Books list', 'wpifypt' ),
			'items_list_navigation' => __( 'Books list navigation', 'wpifypt' ),
			'filter_items_list'     => __( 'Filter books list', 'wpifypt' ),
		);

		$args = array(
			'label'               => __( 'Book', 'wpifypt' ),
			'description'         => __( 'Example post type Book', 'wpifypt' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'taxonomies'          => array( BookAuthorTaxonomy::KEY ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 25,
			'menu_icon'           => 'dashicons-book',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
			'show_in_rest'        => false,
		);

		register_post_type( self::KEY, $args );
	}
}
