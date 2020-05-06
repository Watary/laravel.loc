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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/backend', 'Backend\BackendController@index')->middleware('auth')->name('backend');

Route::get('/backend/users', 'Backend\BackendController@userList')->middleware('auth')->name('backend.user.list');

Route::get('/backend/menus', 'Backend\BackendController@menuList')->middleware('auth')->name('backend.menu.list');
