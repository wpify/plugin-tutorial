<?php

namespace WpifyPluginTutorial\Models;

use WpifyPluginTutorialDeps\Wpify\Model\Attributes\Meta;
use WpifyPluginTutorialDeps\Wpify\Model\Term;

class BookAuthorModel extends Term {
	#[Meta]
	public string $date_of_birth = '';

	#[Meta]
	public string $date_of_death = '';
}
