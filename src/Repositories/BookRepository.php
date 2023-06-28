<?php

namespace WpifyPluginTutorial\Repositories;

use WpifyPluginTutorial\Models\BookModel;
use WpifyPluginTutorial\PostTypes\BookPostType;
use WpifyPluginTutorialDeps\Wpify\Model\PostRepository;

class BookRepository extends PostRepository {
	public function model(): string {
		return BookModel::class;
	}

	public function post_types(): array {
		return array( BookPostType::KEY );
	}
}
