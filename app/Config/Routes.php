<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;
use App\Controllers\PenjualController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/admin', [AdminController::class, 'index']);
$routes->get('/admin/toko', [AdminController::class, 'toko']);
$routes->get('/admin/transaksi', [AdminController::class, 'transaksi']);
$routes->get('/admin/pengembalian', [AdminController::class, 'pengembalian']);

$routes->get('/penjual', [PenjualController::class, 'index']);
$routes->get('/penjual/pesanan', [PenjualController::class, 'pesanan']);
$routes->get('/penjual/transaksi', [PenjualController::class, 'transaksi']);