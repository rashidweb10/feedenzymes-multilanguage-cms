<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProductionController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Admin" middleware group. Now create something great!
|
*/

//clrearing application cache
Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth']], function(){

    Route::get('/clear-cache', function () {
        $exitCode = Artisan::call('cache:clear');
        $exitCode = Artisan::call('config:clear');
        $exitCode = Artisan::call('view:clear');
        return redirect()->back()->with('nSuccess', 'Cache cleared successfully!');
    });

});

//login module
Route::group(['prefix' => 'admin', 'middleware' => ['admin.guest']], function(){

    Route::get('/', function () {
        return redirect(route('admin.login'));
    });

    Route::get('/login', [AuthController::class, 'index'])->name('admin.login'); //named a route

    Route::post('/postLogin', [AuthController::class, 'postLogin']);   
    
});

//logout module
Route::group(['prefix' => 'admin'], function(){
    Route::get('/logout', [AuthController::class, 'Logout']);
});   

//dashboard module
Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth']], function(){ 
    Route::post('/set-language', [LanguageController::class, 'setLanguage'])->name('admin.set.language');
});

//dashboard module
Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth']], function(){ 
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');      
});

//setting module
Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth']], function(){ 
    Route::get('/settings', [SettingController::class, 'view'])->name('admin.settings'); 
    Route::post('/settings/update-setting-post', [SettingController::class, 'update']);     
});

//products categories module
Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth']], function(){ 
    Route::Resource('product-categories', ProductCategoryController::class);    
});

//products module
Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth']], function(){ 
    Route::Resource('products', ProductController::class);    
});

//enquiries module
Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth']], function(){ 
    Route::Resource('enquiries', EnquiryController::class);    
});

//pages module
Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth', "admin.check.language"]], function(){ 
    Route::Resource('pages', PageController::class);    
});

//news module
Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth', "admin.check.language"]], function(){ 
    Route::Resource('news', NewsController::class);    
});

//productions module
Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth', "admin.check.language"]], function(){ 
    Route::Resource('the-products', ProductionController::class);    
});