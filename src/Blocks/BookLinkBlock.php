<?php

namespace WpifyPluginTutorial\Blocks;

use WpifyPluginTutorial\Managers\BlocksManager;
use WpifyPluginTutorial\Repositories\BookRepository;
use WpifyPluginTutorialDeps\Wpify\CustomFields\CustomFields;
use WpifyPluginTutorialDeps\Wpify\Templates\TwigTemplates;
use WpifyPluginTutorialDeps\Wpify\Templates\WordPressTemplates;

class BookLinkBlock {
	const KEY = 'wpify/book-link';

	public function __construct(
		CustomFields $custom_fields,
		private BookRepository $book_repository,
		private WordPressTemplates $wp_template,
//		private TwigTemplates $twig_template,
	) {
		$custom_fields->create_gutenberg_block( array(
			'name'            => self::KEY,
			'title'           => __( 'Book link', 'wpifypt' ),
			'category'        => BlocksManager::BOOKS_KEY,
			'icon'            => 'book',
			'supports'        => array( 'anchor' => true ),
			'example'         => array( 'book_id' => 1, 'title' => 'Example book' ),
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
		// Get the book from the repository.
		$book = $this->book_repository->get( $block_attributes['book_id'] );

		// Set the attributes needed for the render.
		$block_attributes['title'] = $book->title;
		$block_attributes['isbn']  = $book->isbn;

		// return the string with the rendered block.
		return $this->wp_template->render( 'blocks/book-link', null, $block_attributes );
//		return $this->twig_template->render( 'blocks/book-link.twig', null, $block_attributes );
	}
}
