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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


// $routes->get('menu_admin', 'kasir\Tambahmenu::index');
// $routes->get('add_data_menu', 'kasir\Tambahmenu::add_tambah_menu');
// $routes->post('proses_add_menu', 'kasir\Tambahmenu::proses_add_menu');
// $routes->get('edit_data_menu/(:any)', 'kasir\Tambahmenu::edit_data_menu/$1');
// $routes->post('proses_edit_menu', 'kasir\Tambahmenu::proses_edit_menu');
// $routes->get('hapus_data_menu/(:any)', 'kasir\Tambahmenu::hapus_data_menu/$1');
// $routes->get('lihatdaftarpesanan', 'koki\User_koki::index');
$routes->group('login', function ($routes) {
    $routes->get('/', 'Home::login');
    $routes->get('admin', 'Home::login_admin');
    $routes->post('process', 'Login::process');
});
$routes->get('login/loginWithGoogle', 'Home::loginWithGoogle');
$routes->get('logout', 'Home::logout');

// ini kasir ya
$routes->group('dashboard', function ($routes) {
    $routes->get('/', 'kasir\Menukasir::dashboard');
    $routes->get('home-kasir', 'kasir\Menukasir::index');
    $routes->get('tambah-menu', 'kasir\Menukasir::create');
    $routes->post('daftarmenu', 'kasir\Menukasir::daftar');
    $routes->get('edit-menu/(:num)', 'kasir\Menukasir::edit/$1');
    $routes->post('update-menu/(:num)', 'kasir\Menukasir::update/$1');
    $routes->get('delete/(:any)', 'kasir\Menukasir::delete/$1');
    $routes->get('koki', 'koki\User_koki::index');
    $routes->get('transaksi', 'koki\User_kasir::index');
    $routes->get('laporan', 'koki\User_kasir::laporan');
    // bagian tambah user kasir&chef
    $routes->get('tambah-user', 'Login::tambahuser');
    $routes->post('daftaruser', 'Login::daftaruser');
    $routes->get('hapus_user/(:any)', 'Login::hapus_user/$1');
});

$routes->get('/', 'Home::index');
$routes->group('menu', function ($routes) {
    $routes->get('/', 'Menu::index');
    $routes->get('maincourse', 'Menu::index');
    $routes->get('uncaanmansure', 'Menu::uncaanmansure');
    $routes->get('beverages', 'Menu::beverages');
    $routes->get('pasta', 'Menu::pasta');
    $routes->get('sweetooth', 'Menu::sweetooth');
    $routes->get('snacks', 'Menu::snacks');
});
$routes->get('aboutus', 'Home::aboutus');


// $routes->get('koki', 'kasir\User_kasir::index');

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