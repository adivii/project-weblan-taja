<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::index');
$routes->get('/base', 'Pages::index');
$routes->post('/verify', 'AccountController::verify');
$routes->get('/logout', 'AccountController::logout');
$routes->post('/farmer/add', 'FarmerController::farmer_add');
$routes->get('/farmer/home', 'FarmerController::index');
// $routes->get('/farmer/(:any)', 'FarmerController::show/$1');
$routes->get('/penyuluh/dashboard', 'PenyuluhController::dashboard');
$routes->get('/penyuluh/profile/(:any)', 'PenyuluhController::get_profile/$1');
$routes->post('/penyuluh/profile/(:any)/update', 'PenyuluhController::update_profile/$1');
$routes->post('/penyuluh/save', 'PenyuluhController::save');
$routes->get('/penyuluh/add', 'AdminController::penyuluh_add');
$routes->get('/admin/dashboard', 'AdminController::index');
$routes->get('/event', 'EventController::event_list');
$routes->get('/event/create', 'EventController::event_create');
$routes->get('/event/edit/(:num)', 'EventController::event_update/$1');
$routes->post('/event/update/(:num)', 'EventController::update/$1');
$routes->post('/event/save', 'EventController::save');
$routes->delete('/event/delete/(:num)', 'EventController::delete/$1');
$routes->get('/(:any)', 'Pages::show/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
