<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/pages/about', 'Pages::about');
$routes->get('/pages/contact', 'Pages::contact');
$routes->get('/komik', 'Komik::index');
$routes->get('/komik/create', 'Komik::create');
$routes->post('/komik/save', 'Komik::save');
$routes->get('/komik/(:segment)', 'Komik::detail/$1');
