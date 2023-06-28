<?php

namespace WpifyPluginTutorial\Managers;

use WpifyPluginTutorial\Repositories\BookAuthorRepository;
use WpifyPluginTutorial\Repositories\BookRepository;
use WpifyPluginTutorialDeps\DI\Container;
use WpifyPluginTutorialDeps\Wpify\Model\Manager;

class RepositoriesManager {
	public function __construct(
		Manager $manager,
		Container $container,
		BookRepository $book_repository,
		BookAuthorRepository $book_author_repository,
	) {
		// This registers all build-in repositories in WPify Models to our DI container,
		// so we can use them in our plugin as constructor dependency.
		foreach ( $manager->get_repositories() as $repository ) {
			$container->set( $repository::class, $repository );
		}

		// Register all custom repositorues in WPify Models, so it knows how to use them.
		$manager->register_repository( $book_repository );
		$manager->register_repository( $book_author_repository );
	}
}
