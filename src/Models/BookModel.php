<?php

namespace WpifyPluginTutorial\Models;

use WpifyPluginTutorialDeps\Wpify\Model\Attributes\Meta;
use WpifyPluginTutorialDeps\Wpify\Model\Post;

class BookModel extends Post {
	#[Meta]
	public string $isbn = '';

	#[Meta]
	public string $first_published = '';
}
