<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::post('/feedback', [\App\Http\Controllers\PagesController::class,'feedback'])->name('feedback');
Route::post('/subscribe', [\App\Http\Controllers\PagesController::class,'subscribe'])->name('subscribe');

Route::get('objects', [\App\Http\Controllers\ObjectsController::class, 'index'])->name('objects');
Route::get('/objects/{article}', [\App\Http\Controllers\ObjectsController::class, 'show'])->name('objects.show');

Route::get('products', [\App\Http\Controllers\ProductsController::class, 'index'])->name('products');
Route::get('products-category/{category}', [\App\Http\Controllers\ProductsController::class, 'cat'])->name('products.cat');
Route::get('/products/{article}', [\App\Http\Controllers\ProductsController::class, 'show'])->name('products.show');

Route::get('/{page?}',[\App\Http\Controllers\PagesController::class,'getPage'])->name('pages.get');

