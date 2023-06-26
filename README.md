# Example WPify Plugin tutorial

This is an example plugin to demostrate how we at WPify create plugins. 

## Installation

1. Upload the plugin to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Enjoy!

## The goal of the plugin

The aim is to create simple plugin that stores information about books and their authors. On this, we demonstrate
the advanced techniques of creating a plugin.

## Steps:

### 01 - PHP/DI

in this step, we will add PHP/DI to the plugin. This will allow us to use dependency injection in our plugin.
Also, the basic structure of the plugin will be created.

```bash
composer require php-di/php-di
```
