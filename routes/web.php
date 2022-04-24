<?php

use App\Http\Controllers\StoreController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('stores',[StoreController::class,'stores'])->name('stores');
Route::post('storelogin',[StoreController::class,'storelogin'])->name('storelogin');
Route::get('createstore',[StoreController::class,'createstore'])->name('createstore');
Route::post('createstores',[StoreController::class,'createstores'])->name('createstores');

