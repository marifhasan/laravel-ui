# Laravel UI with Tailwind

<a href="https://packagist.org/packages/arifhas/ui"><img src="https://poser.pugx.org/arifhas/laravel-ui/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/arifhas/ui"><img src="https://poser.pugx.org/arifhas/laravel-ui/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/arifhas/ui"><img src="https://poser.pugx.org/arifhas/laravel-ui/license.svg" alt="License"></a>

## Introduction

This package is inspired by [Frontend preset for Tailwind CSS](https://github.com/laravel-frontend-presets/tailwindcss), integrated with [Laravel UI](https://github.com/laravel/ui). So you can run all command what laravel UI provides with tailwind scaffolding.

## Install using Composer
```
composer require arifhas/laravel-ui
```
Once the arifhas/laravel-ui package has been installed, you may install the frontend scaffolding using the ui Artisan command like Laravel UI:
```
// Generate basic scaffolding...
php artisan ui tailwindcss
php artisan ui bootstrap
php artisan ui vue
php artisan ui react

// Generate login / registration scaffolding...
php artisan ui tailwindcss --auth
php artisan ui bootstrap --auth
php artisan ui vue --auth
php artisan ui react --auth
```

## License

Laravel UI is open-sourced software licensed under the [MIT license](LICENSE.md).
