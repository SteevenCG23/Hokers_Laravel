<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['verify' => true]); 

Route::get('/home', [HomeController::class, 'index'])->middleware('verified')->name('home');

//Administrator routes
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.index');

//Administrator-users routes
Route::get('/admin/users/usersIndex', [AdminController::class, 'usersIndex'])->name('admin.users.usersIndex');

Route::get('/admin/users/createUser', [AdminController::class, 'createUser'])->name('admin.users.createUser');
Route::post('/admin/users/storeUser', [AdminController::class, 'storeUser'])->name('admin.users.storeUser');

Route::get('/admin/users/showInactiveUsers', [AdminController::class, 'showInactiveUsers'])->name('admin.users.showInactiveUsers');

Route::get('admin/users/{id}/confirmActivateUser', [AdminController::class, 'confirmActivateUser'])->name('admin.users.confirmActivateUser');
Route::put('admin/users/{id}/activateUser', [AdminController::class, 'activateUser'])->name('admin.users.activateUser');

Route::get('/admin/users/{id}/show', [UserController::class, 'show'])->name('admin.users.show');

Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
Route::put('/admin/users/{id}/update', [UserController::class, 'update'])->name('admin.users.update');

Route::get('/admin/users/{id}/confirmDeleteUser', [AdminController::class, 'confirmDeleteUser'])->name('admin.users.confirmDeleteUser');
Route::put('/admin/users/{id}/deleteUser', [AdminController::class, 'deleteUser'])->name('admin.users.deleteUser');

Route::get('/admin/users/usersReports', [AdminController::class, 'usersReports'])->name('admin.users.usersReports');
Route::get('/admin/users/usersPdf', [AdminController::class, 'usersPdf'])->name('admin.users.usersPdf');
Route::get('/admin/users/usersPdfDates', [AdminController::class, 'usersPdfDates'])->name('admin.users.usersPdfDates');

//Administrator-sellers routes
Route::get('/admin/sellers/sellersIndex', [AdminController::class, 'sellersIndex'])->name('admin.sellers.sellersIndex');

Route::get('/admin/sellers/createSeller', [AdminController::class, 'createSeller'])->name('admin.sellers.createSeller');
Route::post('/admin/sellers/storeSeller', [AdminController::class, 'storeSeller'])->name('admin.sellers.storeSeller');

Route::get('/admin/sellers/showInactiveSellers', [AdminController::class, 'showInactiveSellers'])->name('admin.sellers.showInactiveSellers');

Route::get('admin/sellers/{id}/confirmActivateSeller', [AdminController::class, 'confirmActivateSeller'])->name('admin.sellers.confirmActivate');
Route::put('admin/sellers/{id}/activateSeller', [AdminController::class, 'activateSeller'])->name('admin.sellers.activateSeller');


Route::get('/admin/sellers/{id}/show', [SellerController::class, 'show'])->name('admin.sellers.show');

Route::get('/admin/sellers/{id}/edit', [SellerController::class, 'edit'])->name('admin.sellers.edit');
Route::put('/admin/sellers/{id}/update', [SellerController::class, 'update'])->name('admin.sellers.update');

Route::get('/admin/sellers/{id}/confirmDeleteSeller', [AdminController::class, 'confirmDeleteSeller'])->name('admin.sellers.confirmDeleteSeller');
Route::put('/admin/sellers/{id}/deleteSeller', [AdminController::class, 'deleteSeller'])->name('admin.sellers.deleteSeller');

Route::get('/admin/sellers/sellersReports', [AdminController::class, 'sellersReports'])->name('admin.sellers.sellersReports');

//Administrator-products routes
Route::get('/admin/products', [ProductController::class, 'productsList'])->name('admin.products.index');
Route::get('/admin/products/create', [ProductController::class, 'admincreateproduct'])->name('admin.products.create');

//Seller-Product routes
Route::resource('index', ProductController::class);

Route::controller(ProductController::class)->group(function () {
    Route::get('pg_vendedor', 'pg_vendedor');
    Route::get('vista_pg', 'vista_pg')->name('vista_pg');
    Route::get('vista_dn', 'vista_dn')->name('vista_dn');
    Route::get('perfil', 'perfil')->name('perfil');
    Route::get('home', 'pg_cliente');
});

//Google routes
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');
