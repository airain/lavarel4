## Overview

[![Build Status](https://api.travis-ci.org/DeSmart/pagination.png)](https://travis-ci.org/DeSmart/pagination)

This package is an extension for Laravel4 pagination module.

It provides new functionalities:

* route based url generator
* helpers for template render

## Installation

To `composer.json` add: `"desmart/pagination": "1.1.*"` and then run `composer update desmart/pagination`.

In `app/config/app.php` replace line `'Illuminate\Pagination\PaginationServiceProvider',` with `'DeSmart\Pagination\PaginationServiceProvider',`.

## Compatibilty

This package should not break compatibility with Laravel pagination module.

### Laravel 4.0

To use `desmart/pagination` with Laravel 4.0 switch to version `1.0.*`.

## Method overview

### General usage
* `withQuery()` - bind query parameters to url generator (by default query parameters are included). Works only for url generating from routes.
* `withoutQuery()` - don't bind query parameters
* `route($route[, array $parameters])` - use given route for generating url to pages (it can be route name, or instance of `Illuminate\Routing\Route`)
* `useCurrentRoute()` - use current (active) route for url generating

### For templates
* `pagesProximity($proximity)` - set pages proximity
* `getPagesRange()` - get list of pages to show in template (includes proximity)
* `canShowFirstPage()` - check if can show first page (returns `TRUE` when first page is not in list generated by `getPagesRange()`)
* `canShowLastPage()` - check if can show last page (returns `TRUE` when last page is not in list generated by `getPagesRange()`)

## Issues

* New Laravel UrlGenerator dropped support for extra parameters - it means that routes without `{page}` parameter won't work with pagination

## Example usage

### In controller

```php
// example route (app/routes.php)
Route::get('/products/{page}.html', array('as' => 'products.list', 'uses' => ''));

// use the current route
$list = Product::paginate(10)
  ->useCurrentRoute()
  ->pagesProximity(3);
  
// use custom route
$list = Product::paginate(10)
  ->route('products.list')
  ->pagesProximity(3);
```

### In view
```php
// app/view/products/list.blade.php

@foreach ($list as $item)
{{-- show item --}}
@endforeach

{{ $list->links('products.paginator') }}

// app/view/products/paginator.blade.php

@if ($paginator->getLastPage() > 1)
  @foreach ($paginator->getPagesRange() as $page)
    {{ $page }}
  @endforeach
@endif
```

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)