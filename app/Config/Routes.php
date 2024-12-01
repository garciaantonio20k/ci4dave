<?php

use App\Controllers\Articles;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/articles', [App\Controllers\Articles::class,'index']);
$routes->get('/articles/(:num)',[Articles::class,'show/$1']);
$routes->get('/articles/new',[Articles::class,'new']);
$routes->post('/articles/create',[Articles::class,'create']);
