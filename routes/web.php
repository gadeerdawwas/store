<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreAuthController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/storeloginsss', function () {
    return view('store.login');
});
Route::get('/createstoresss', function () {
    return view('store.register');
});





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[StoreAuthController::class,'index']);

Route::get('storeslogin',[StoreAuthController::class,'storeslogin'])->name('storeslogin');
Route::post('storelogin',[StoreAuthController::class,'storelogin'])->name('storelogin');
Route::get('createstore',[StoreAuthController::class,'createstore'])->name('createstore');
Route::post('createstores',[StoreAuthController::class,'createstores'])->name('createstores');


Auth::routes();

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/', [HomeController::class ,'index']);
    Route::resource('stores', StoreController::class);
    Route::resource('users', UserController::class);
    Route::resource('banks', BankController::class);
});

