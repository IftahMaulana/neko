<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransaksiAdminController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('/shop', [Controller::class, 'shop'])->name('shop');
Route::get('/transaksi', [Controller::class, 'transaksi'])->name('transaksi');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/checkout', [Controller::class, 'checkout'])->name('checkout');

// Route::get('/admin', [Controller::class, 'admin'])->name('admin');
Route::get('/admin/dashboard', [Controller::class, 'admin'])->name('admin');
Route::get('/admin/product', [ProductController::class, 'index'])->name('product');
Route::get('/admin/user_management', [Controller::class, 'userManagement'])->name('userManagement');
Route::get('/admin/report', [Controller::class, 'report'])->name('report');
Route::get('/admin/addModal', [ProductController::class, 'addModal'])->name('addModal');

Route::POST('/admin/addData', [ProductController::class, 'store'])->name('addData');
Route::GET('/admin/editModal/{id}', [ProductController::class, 'show'])->name('editModal');
Route::PUT('/admin/updateData/{id}', [ProductController::class, 'update'])->name('updateData');
