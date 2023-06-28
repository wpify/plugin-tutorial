<?php

namespace WpifyPluginTutorial\Repositories;

use WpifyPluginTutorial\Models\BookAuthorModel;
use WpifyPluginTutorial\Taxonomies\BookAuthorTaxonomy;
use WpifyPluginTutorialDeps\Wpify\Model\TermRepository;

class BookAuthorRepository extends TermRepository {
	public function model(): string {
		return BookAuthorModel::class;
	}

	public function taxonomy(): string {
		return BookAuthorTaxonomy::KEY;
	}
}
