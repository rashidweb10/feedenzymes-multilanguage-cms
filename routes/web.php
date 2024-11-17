<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
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

Route::get('/optimize-clear', function () {
    Artisan::call('optimize:clear');
    return "Optimized and cleared!";
});

Route::get('/key-generate', function () {
    Artisan::call('key:generate', ['--force' => true]);
    return "Application key generated!";
});

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return "Storage link created!";
});

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('frontend.pages.home.index');
});

Route::get('/about-us', function () {
    return view('frontend.pages.about.index');
});
Route::get('/contact-us', function () {
    return view('frontend.pages.contact.index');
});

Route::get('/category/{slug}', function () {
    return view('frontend.pages.category.index');
});

Route::get('/order', [IndexController::class, 'index'])->name('order.index');
Route::get('/order/getProducts/{category_id}', [IndexController::class, 'getProducts'])->name('order.getProducts');
Route::get('/order/getVariation/{product_id}', [IndexController::class, 'getVariation'])->name('order.getVariation');
Route::post('/order/submitForm', [IndexController::class, 'submitForm'])->name('order.submit');