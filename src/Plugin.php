<?php

namespace WpifyPluginTutorial;

use WpifyPluginTutorial\Managers\BlocksManager;
use WpifyPluginTutorial\Managers\PostTypesManager;
use WpifyPluginTutorial\Managers\RepositoriesManager;
use WpifyPluginTutorial\Managers\TaxonomiesManager;

/**
 * Main plugin class that initializes all plugin components.
 */
class Plugin {
	/**
	 * Plugin constructor.
	 * All dependencies are injected via DI container.
	 */
	public function __construct(
		PostTypesManager $post_types_manager,
		TaxonomiesManager $taxonomies_manager,
		BlocksManager $blocks_manager,
		RepositoriesManager $repositories_manager,
		Frontend $frontend,
	) {
		// stuff to do on plugin load
	}

	/**
	 * Method called on plugin activation.
	 *
	 * @param $network_wide Plugin activated network wide.
	 *
	 * @return void
	 */
	public function activate( $network_wide ): void {
		// stuff to do on activation
	}

	/**
	 * Method called on plugin deactivation.
	 *
	 * @param $network_wide Plugin deactivated network wide.
	 *
	 * @return void
	 */
	public function deactivate( $network_wide ): void {
		// stuff to do on deactivation
	}

	/**
	 * Method called on plugin uninstall.
	 *
	 * @return void
	 */
	public function uninstall(): void {
		// stuff to do on uninstall
	}
}
