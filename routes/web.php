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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/menu', 'ProductController@menu')->name('web.menu');
Route::get('/categoria/{id}', 'ProductController@categoryProducts')->name('web.category');
Route::get('/', 'ProductController@aboutUs')->name('web.about');

Route::group(['middleware' => 'auth'], function ()
{
    Route::get('/productos', 'ProductController@index')->name('product.index');

    Route::get('/crear-producto', 'ProductController@create')->name('product.create');
    Route::post('/guardar-producto', 'ProductController@save')->name('product.save');
    Route::get('/configurar-producto/{id}', 'ProductController@config')->name('product.config');
    Route::post('/actualizar-producto', 'ProductController@update')->name('product.update');
    Route::get('/eliminar-producto/{id}', 'ProductController@delete')->name('product.delete');
    Route::get('/ver-producto/{id}', 'ProductController@detail')->name('product.detail');

});

