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

### 01 - Basic concepts - OOP, Namespaces, Composer, Dependency Injection

Let's start with building the basic plugin structure using OOP, Namespaces, Composer and Dependency Injection.

Links:

* [Object oriented programming - OOP](https://www.phptutorial.net/php-oop/)
* [Namespaces](https://www.phptutorial.net/php-oop/php-namespace/)
* [Composer](https://getcomposer.org/doc/01-basic-usage.md)
* [Understanding Dependency Injection](https://php-di.org/doc/understanding-di.html)
* DI Containers - [PHP/DI](https://php-di.org/), [Symfony DI](https://symfony.com/doc/current/components/dependency_injection.html), [League](https://container.thephpleague.com/), [Nette](https://doc.nette.org/en/dependency-injection/container), [Dice](https://github.com/Level-2/Dice)

```bash
composer require php-di/php-di
```

[Next step >>>](https://github.com/wpify/plugin-tutorial/tree/02-scoper)
