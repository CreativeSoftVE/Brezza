<?php

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
        return view('landing.index');
    });


/*
* Ruta destinada a todas las operaciones del admin
*/
    Route::group(['prefix' => 'admin'],function(){
        Route::get('/', 'AdminController@index')->name("main");
        Route::get('/minor', 'AdminController@minor')->name("minor");
        Route::resource('/users', 'UsersController');
        Route::resource('/messages', 'MessagesController');
        
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
