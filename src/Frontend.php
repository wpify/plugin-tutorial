<?php

namespace WpifyPluginTutorial;

use WpifyPluginTutorialDeps\Wpify\Asset\AssetFactory;
use WpifyPluginTutorialDeps\Wpify\PluginUtils\PluginUtils;

class Frontend {
	public function __construct( PluginUtils $utils, AssetFactory $asset ) {
		$asset->wp_script( $utils->get_plugin_path( 'build/plugin-tutorial.js' ) );
		$asset->wp_script( $utils->get_plugin_path( 'build/plugin-tutorial.css' ) );
	}
}
