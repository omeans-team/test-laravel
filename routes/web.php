<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;
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
    return view('auth.login');
    // return view('welcome');
});

Route::resource('products', ProductController::class);
Auth::routes();

Route::get('/productsexport', 'ProductsExportController@index');
Route::get('/productsexport/export_excel', 'ProductsExportController@export_excel');

// Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
