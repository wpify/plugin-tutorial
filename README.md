# Example WPify Plugin tutorial

This is an example plugin to demonstrate how we at WPify create plugins. 

## Installation

1. Upload the plugin to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Enjoy!

## The goal of the plugin

The aim is to create simple plugin that stores information about books and their authors. On this, we demonstrate
the advanced techniques of creating a plugin.

## Steps:

### 01 - PHP/DI

in this step, we will add PHP-DI to the plugin. This will allow us to use dependency injection in our plugin.
Also, the basic structure of the plugin will be created.

Links: [PHP/DI](https://php-di.org/)

```bash
composer require php-di/php-di
```

### 02 - WPify Scoper

In this step, we are adding the WPify Scoper to the plugin, so that the dependencies are not conflicting with other
plugins.

Links: [WPify Scoper](https://packagist.org/packages/wpify/scoper)

```bash
composer require wpify/scoper
```

### 03 - WPify Custom Fields

In this step, we are adding the WPify Custom Fields to the plugin, so that we can easily create custom fields for our
plugin. Custom fields are required in composer-deps.json file.

Links: [WPify Custom Fields](https://packagist.org/packages/wpify/custom-fields)

### 04 - WPify Model

We have a custom post type, taxonomy, but we have no easy way how to access data. In this step, we are adding 
WPify Models, so we can access data easily and use them wherever we need.

Links: [WPify Model](https://packagist.org/packages/wpify/model)

### 05 - WPify Templates

We want to be able to render templates easily, even in Twig. In this step, we are adding WPify Templates.
