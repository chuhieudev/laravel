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

Route::prefix('login')->group(function()
{
    Route::middleware('check')->group(function(){
        Route::get('/', function () {
            return view('Login.login');
        })->name('login');
        Route::post('/process','LoginController@check')->name('login.check');
        Route::get('/register',function(){
            return view ('Login.register');
        })->name('login.register');
        Route::post('/register/process','LoginController@processregister')->name('login.register.process');
    });
    Route::get('/logout/process','LoginController@processlogout')->name('logout');
});
Route::middleware('UserRole')->group(function(){
    Route::get('/products','products@index')->name('product');
Route::get('/news','news@index')->name('new');
Route::get('/', function () {
    return view('Home.index');
})->name('home');
Route::get('category/{slug}','Categories@view')->name('category');
// Route::namespace('new')->group(function(){
//     route::get('/',function(){
// 	});
// });
Route::get('/product/{slug}','products@show');
// Route::get('/products')
Route::prefix('cart')->group(function () {
    Route::get('/','CartController@index')->name('cart.index');
    Route::post('store/{productId}','CartController@store')->name('cart.store');
    Route::put('update/{id}','CartController@update')->name('cart.update');
    Route::get('detroy/{id}','CartController@detroy')->name('cart.delete');
});
});
