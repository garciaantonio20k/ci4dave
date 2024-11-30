<?php

use App\Controllers\Articles;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/articles', [App\Controllers\Articles::class,'index']);
