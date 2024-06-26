<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('home', [HomeController::class, 'index'])->middleware('verified')->name('home');

Route::get('admin', [AdminController::class, 'dashboard'])->middleware('verified')->name('admin');

Route::resource('index', ProductController::class);

Route::controller(ProductController::class)->group(function () {
    Route::get('pg_vendedor', 'pg_vendedor');
    Route::get('vista_pg', 'vista_pg')->name('vista_pg');
    Route::get('vista_dn', 'vista_dn')->name('vista_dn');
    Route::get('perfil', 'perfil')->name('perfil');
});

