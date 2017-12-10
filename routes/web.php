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


    Route::get('/', [
            'uses' => 'HomeController@landing',
            'as' => 'root']);
    
    Route::get('/categories/{id}/', [
            'uses' => 'ProductsController@listByCategory',
            'as' => 'products.listByCategory']);
    
    Route::get('/tags/{id}/', [
            'uses' => 'ProductsController@listByTag',
            'as' => 'products.listByTag']);
            
    
    Route::get('/product/{id}/', [
            'uses' => 'ProductsController@frontView',
            'as' => 'products.frontView']);



    Route::get('/index', [
            'uses' => 'APIController@index',
            'as' => 'index']);


    Route::get('lang/{lang}', function ($lang) {
        session(['lang' => $lang]);
        return \Redirect::back();
    })->where([
        'lang' => 'en|es'
    ]);

/*
* Ruta destinada a todas las operaciones del admin
*/
    Route::group(['prefix' => 'admin'],function(){
        Route::get('/', 'AdminController@index')->name("main");
        Route::get('/minor', 'AdminController@minor')->name("minor");
        
        Route::resource('/users', 'UsersController');
        Route::get('/users/{id}/destroy', [
            'uses' => 'UsersController@destroy',
            'as' => 'users.destroy']);
            
        Route::resource('/products', 'ProductsController');
        Route::get('/products/{id}/destroy', [
            'uses' => 'ProductsController@destroy',
            'as' => 'products.destroy']);    
            
        Route::resource('categories', 'CategoriesController');
        Route::get('categories/{id}/destroy', [
            'uses' => 'CategoriesController@destroy',
            'as' => 'admin.categories.destroy']);
        
        Route::resource('/tags', 'TagsController');
        Route::get('tags/{id}/destroy', [
            'uses' => 'TagsController@destroy',
            'as' => 'tags.destroy']);
            
        Route::resource('/messages', 'MessagesController');
        Route::get('/,messages/{id}/destroy', [
            'uses' => 'MessagesController@destroy',
            'as' => 'messages.destroy']); 
        
        
        
        /*
        * Gestion de contenido
        */
        Route::resource('/footers', 'FootersController');
        Route::get('footers/{id}/destroy', [
            'uses' => 'FootersController@destroy',
            'as' => 'admin.footers.destroy']);
        
        Route::resource('contacts', 'ContactsController');
        Route::get('contacts/{id}/destroy', [
            'uses' => 'ContactsController@destroy',
            'as' => 'admin.contacts.destroy']);
        
        Route::resource('steps', 'StepsController');
        Route::get('steps/{id}/destroy', [
            'uses' => 'StepsController@destroy',
            'as' => 'admin.steps.destroy']);
            
        Route::resource('whoares', 'WhoaresController');
        Route::get('whoares/{id}/destroy', [
            'uses' => 'WhoaresController@destroy',
            'as' => 'admin.whoares.destroy']);
        
        Route::resource('benefits', 'BenefitsController');
        Route::get('benefits/{id}/destroy', [
            'uses' => 'BenefitsController@destroy',
            'as' => 'admin.benefits.destroy']);
            
    });


Route::get('api/dependent-dropdown','APIController@index');
Route::get('api/get-state-list','APIController@getStateList');
Route::get('api/get-city-list','APIController@getCityList');

Auth::routes();

