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
// $routes->group('login', function ($routes) {
//     $routes->get('/', 'Home::login');
//     $routes->get('admin', 'Home::login_admin');
//     $routes->post('process', 'Login::process');
// });

// $routes->get('login-halaman', 'Home::login_halaman');
$routes->get('halaman-login-pelayan', 'Home::cek_login_pelayan');
$routes->post('login-pelayan', 'Home::cek_login_pelayan');
$routes->get('login', 'Home::login');
$routes->get('logout-pelayan', 'kasir\Menukasir::logout_pelayan');

// ini kasir ya
$routes->group('dashboard', function ($routes) {
    $routes->get('/', 'kasir\Menukasir::dashboard', ['filter'=>'pelayan']);
    $routes->get('home-kasir', 'kasir\Menukasir::index', ['filter'=>'pelayan']);
    $routes->get('tambah-menu', 'kasir\Menukasir::create', ['filter'=>'pelayan']);
    $routes->post('daftarmenu', 'kasir\Menukasir::daftar', ['filter'=>'pelayan']);
    $routes->get('edit-menu/(:num)', 'kasir\Menukasir::edit/$1', ['filter'=>'pelayan']);
    $routes->post('update-menu/(:num)', 'kasir\Menukasir::update/$1', ['filter'=>'pelayan']);
    $routes->get('delete/(:any)', 'kasir\Menukasir::delete/$1', ['filter'=>'pelayan']);
    $routes->get('koki', 'koki\User_koki::index', ['filter'=>'pelayan']);
    $routes->post('koki/(:num)', 'koki\User_koki::status/$1', ['filter'=>'pelayan']);
    // ini yg js
    $routes->get('detail_pesanan', 'koki\User_koki::show', ['filter'=>'pelayan']);
    $routes->get('transaksi', 'koki\User_kasir::index', ['filter'=>'pelayan']);
    $routes->get('laporan', 'koki\User_kasir::laporan', ['filter'=>'pelayan']);
    // bagian tambah user kasir&chef
    $routes->get('tambah-user', 'Login::tambahuser', ['filter'=>'pelayan']);
    $routes->post('daftaruser', 'Login::daftaruser', ['filter'=>'pelayan']);
    $routes->get('hapus_user/(:any)', 'Login::hapus_user/$1', ['filter'=>'pelayan']);
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

// keranjang nih
$routes->get('keranjang-nih', 'Keranjang::keranjang');
$routes->get('cart/tagihan', 'Keranjang::tagihan');
$routes->get('beli/(:num)', 'Keranjang::beli/$1');
$routes->get('cart/remove/(:any)', 'Keranjang::remove/$1');
$routes->post('cart/update/', 'Keranjang::update/$1');
$routes->post('cart/simpan/', 'Keranjang::simpan/$1');
$routes->get('pencarian', 'User_koki::pencarian/$1');

$routes->get('index-keranjang', 'Keranjang::indexkeranjang');
$routes->post('shopping/tambah/(:num)', 'Keranjang::tambah/$1');


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