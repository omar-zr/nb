<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/ar', function () {
    return view('index');
});
Route::get('/tur', function () {
    return view('index1');
});
Route::get('/all', function () {
    return view('layouts/allProduct');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('admin/product', 'App\Http\Controllers\Admin\ProductController');

Route::get('/product/{id}', 'App\Http\Controllers\FrontController@index');
