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

Route::get('/login', ['uses'=> 'logincontroller@index']); 
Route::get('/register', 'registercontroller@index')->name('register.index');
Route::post('/register', 'registercontroller@add')->name('register.index');
Route::post('/login', 'logincontroller@verify')->name('login.index');
Route::group(['middleware'=>['sess']], function(){
Route::get('/home', ['uses'=> 'homecontroller@index'])->name('home.index');
Route::get('/logout', ['uses'=> 'logoutcontroller@index'])->name('logout');
});