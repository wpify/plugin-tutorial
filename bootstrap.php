<?php
/*
 * Plugin Name:       WPify Plugin Tutorial
 * Description:       Plugin that was made during the tutorial by WPify
 * Version:           0.1.0
 * Requires PHP:      8.0.0
 * Requires at least: 6.2.0
 * Author:            WPify
 * Author URI:        https://wpify.io/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wpifypt
 * Domain Path:       /languages
*/

use WpifyPluginTutorialDeps\DI\Container;
use WpifyPluginTutorialDeps\DI\ContainerBuilder;
use WpifyPluginTutorialDeps\DI\DependencyException;
use WpifyPluginTutorialDeps\DI\NotFoundException;
use WpifyPluginTutorial\Plugin;
use WpifyPluginTutorialDeps\Wpify\Model\Manager;

use function WpifyPluginTutorialDeps\DI\autowire;

require 'deps/scoper-autoload.php';
require 'deps/autoload.php';
require 'vendor/autoload.php';

/**
 * Creates and returns DI container.
 * If DI container is already created, returns it.
 *
 * @return Container
 * @throws Exception
 */
function wpifypt_container(): Container {
	static $container;

	if ( empty( $container ) ) {
		$containerBuilder = new ContainerBuilder();
		$containerBuilder->addDefinitions( array(
			Manager::class => autowire()->constructor( array() )
		) );
		$container = $containerBuilder->build();
	}

	return $container;
}

/**
 * Returns the main plugin class from DI container.
 *
 * @return Plugin
 * @throws DependencyException
 * @throws NotFoundException
 */
function wpifypt(): Plugin {
	return wpifypt_container()->get( Plugin::class );
}

/**
 * Method called on plugin activation.
 *
 * @param $network_wide Plugin Activated network wide.
 *
 * @return void
 * @throws DependencyException
 * @throws NotFoundException
 */
function wpifypt_activate( $network_wide ): void {
	wpifypt()->activate( $network_wide );
}

/**
 * Method called on plugin deactivation.
 *
 * @param $network_wide Plugin Deactivated network wide.
 *
 * @return void
 * @throws DependencyException
 * @throws NotFoundException
 */
function wpifypt_deactivate( $network_wide ): void {
	wpifypt()->deactivate( $network_wide );
}

/**
 * Method called on plugin uninstall.
 *
 * @return void
 * @throws DependencyException
 * @throws NotFoundException
 */
function wpifypt_uninstall(): void {
	wpifypt()->uninstall();
}

/**
 * Hook basic stuff, so the plugin can work.
 */
add_action( 'plugins_loaded', 'wpifypt' );
register_activation_hook( __FILE__, 'wpifypt_activate' );
register_deactivation_hook( __FILE__, 'wpifypt_deactivate' );
register_uninstall_hook( __FILE__, 'wpifypt_uninstall' );
