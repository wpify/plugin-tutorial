<?php

namespace WpifyPluginTutorial\Managers;

use WpifyPluginTutorial\Blocks\BookLinkBlock;

class BlocksManager {
	const BOOKS_KEY = 'wpify-books';

	public function __construct(
		BookLinkBlock $book_link_block,
	) {
		add_filter( 'block_categories_all', array( $this, 'block_categories_all' ) );
	}

	public function block_categories_all( $categories ) {
		$categories[] = array(
			'slug'  => self::BOOKS_KEY,
			'title' => __( 'WPify Books', 'wpifypt' ),
			'icon'  => 'books',
		);

		return $categories;
	}
}
