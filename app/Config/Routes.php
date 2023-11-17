<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;

use App\Controllers\PenjualController;

use App\Controllers\Pembeli;


/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index'); 
$routes->get('/home', 'Home::index');
$routes->get('/newarrival', 'Home::newarrival');   
$routes->get('/shop', 'Home::shop');   
$routes->get('/collection', 'Home::collection');      


$routes->get('/admin', [AdminController::class, 'index'], ['filter' => 'role:admin']);
$routes->get('/admin/index', [AdminController::class, 'index'], ['filter' => 'role:admin']);
$routes->get('/admin/toko', [AdminController::class, 'toko'], ['filter' => 'role:admin']);
$routes->get('/admin/transaksi', [AdminController::class, 'transaksi'], ['filter' => 'role:admin']);
$routes->get('/admin/pengembalian', [AdminController::class, 'pengembalian'], ['filter' => 'role:admin']);


$routes->get('/penjual', [PenjualController::class, 'index']);
$routes->get('/penjual/pesanan', [PenjualController::class, 'pesanan']);
$routes->get('/penjual/produk', [PenjualController::class, 'produk']);
$routes->get('/penjual/transaksi', [PenjualController::class, 'transaksi']);
$routes->post('/penjual/create', [PenjualController::class, 'create']);
$routes->put('/penjual/(:any)', [PenjualController::class, 'update']);
$routes->delete('/penjual/(:any)', [PenjualController::class, 'destroy']);

$routes->get('/user', [Pembeli::class, 'user']);
$routes->get('/user/keranjang', [Pembeli::class, 'keranjang']);
$routes->get('/user/pembelian', [Pembeli::class, 'pemesanan']);
$routes->get('/user/pengembalian', [Pembeli::class, 'pengembalian']);
$routes->get('/user/profile', [Pembeli::class, 'profile']);
