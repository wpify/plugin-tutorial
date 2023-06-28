<?php

namespace WpifyPluginTutorial\Taxonomies;

use WpifyPluginTutorial\PostTypes\BookPostType;

class BookAuthorTaxonomy {
	const KEY = 'book_author';

	public function __construct() {
		add_action( 'init', array( $this, 'register' ) );
	}

	public function register() {
		$labels  = array(
			'name'                       => _x( 'Book Authors', 'Taxonomy General Name', 'wpifypt' ),
			'singular_name'              => _x( 'Book Author', 'Taxonomy Singular Name', 'wpifypt' ),
			'menu_name'                  => __( 'Book Author', 'wpifypt' ),
			'all_items'                  => __( 'All Book Authors', 'wpifypt' ),
			'parent_item'                => __( 'Parent Book Author', 'wpifypt' ),
			'parent_item_colon'          => __( 'Parent Book Author:', 'wpifypt' ),
			'new_item_name'              => __( 'New Book Author', 'wpifypt' ),
			'add_new_item'               => __( 'Add Book Author', 'wpifypt' ),
			'edit_item'                  => __( 'Edit Book Author', 'wpifypt' ),
			'update_item'                => __( 'Update Book Author', 'wpifypt' ),
			'view_item'                  => __( 'View Book Author', 'wpifypt' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'wpifypt' ),
			'add_or_remove_items'        => __( 'Add or remove book authors', 'wpifypt' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'wpifypt' ),
			'popular_items'              => __( 'Popular Book Authors', 'wpifypt' ),
			'search_items'               => __( 'Search Book Authors', 'wpifypt' ),
			'not_found'                  => __( 'Not Found', 'wpifypt' ),
			'no_terms'                   => __( 'No Book Authors', 'wpifypt' ),
			'items_list'                 => __( 'Book Authors list', 'wpifypt' ),
			'items_list_navigation'      => __( 'Book Authors list navigation', 'wpifypt' ),
		);

		$rewrite = array(
			'slug'         => 'book-author',
			'with_front'   => true,
			'hierarchical' => false,
		);

		$args    = array(
			'labels'            => $labels,
			'hierarchical'      => false,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'rewrite'           => $rewrite,
		);

		register_taxonomy( self::KEY, array( BookPostType::KEY ), $args );
	}
}
