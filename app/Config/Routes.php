<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/promo_tiles', 'PromoTilesController::index');
$routes->get('/promo_tiles/create', 'PromoTilesController::create');
$routes->post('/promo_tiles/create', 'PromoTilesController::store');    
$routes->get('/promo_tiles/edit/(:num)', 'PromoTilesController::edit/$1');
$routes->post('/promo_tiles/edit/(:num)', 'PromoTilesController::update/$1');
$routes->get('promo_tiles/delete/(:num)', 'PromoTilesController::delete/$1'); // Handle deletion

$routes->post('promo_tiles/store', 'PromoTilesController::store'); // Handle create form submission
$routes->get('promo-tiles/edit/(:num)', 'PromoTilesController::edit/$1'); // Show edit form
$routes->post('promo-tiles/update/(:num)', 'PromoTilesController::update/$1'); // Handle edit form submission
$routes->get('promo-tiles/delete/(:num)', 'PromoTilesController::delete/$1'); // Handle deletion


