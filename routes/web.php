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

Route::group(['prefix' => '{locale?}', 'middleware' => 'language', 'where' => ['locale' => implode('|', array_keys(getLanguageList()))]], function () {
    // Route::get('/', function () {
    //     return view('frontend.pages.home.index');
    // });
    // Route::get('/about-us', function () {
    //     return view('frontend.pages.about.index');
    // }); 
    // Route::get('/contact-us', function () {
    //     return view('frontend.pages.contact.index');
    // });       

    Route::get('/', [IndexController::class, 'index'])->name('home');
    Route::get('/about-us', [IndexController::class, 'about'])->name('about');
    Route::get('/careers', [IndexController::class, 'careers'])->name('careers');
    Route::get('/contact-us', [IndexController::class, 'contact'])->name('contact');
    Route::get('/events/{type}', [IndexController::class, 'events'])->name('events');
    Route::get('/customized-enzymes', [IndexController::class, 'customized_enzymes'])->name('customized_enzymes');
    Route::get('/indivisual-enzymes', [IndexController::class, 'indivisual_enzymes'])->name('indivisual_enzymes');
});