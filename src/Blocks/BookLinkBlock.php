<?php

namespace WpifyPluginTutorial\Blocks;

use WpifyPluginTutorial\Managers\BlocksManager;
use WpifyPluginTutorialDeps\Wpify\CustomFields\CustomFields;

class BookLinkBlock {
	const KEY = 'wpify/book-link';

	public function __construct( CustomFields $custom_fields ) {
		$custom_fields->create_gutenberg_block( array(
			'name'            => self::KEY,
			'title'           => __( 'Book link', 'wpifypt' ),
			'category'        => BlocksManager::BOOKS_KEY,
			'icon'            => 'book',
			'supports'        => array( 'anchor' => true ),
			'example'         => array( 'book_id' => 1 ),
			'render_callback' => array( $this, 'render' ),
			'items'           => array(
				array(
					'type' => 'hidden',
					'id'   => 'anchor',
				),
				array(
					'type'      => 'post',
					'id'        => 'book_id',
					'title'     => __( 'WPify Book', 'wpifypt' ),
					'post_type' => 'book',
					'async'     => true,
				)
			),
		) );
	}

	public function render( $block_attributes, $content ) {
		return '<h1>Book: ' . $block_attributes['book_id'] . '</h1>';
	}
}
