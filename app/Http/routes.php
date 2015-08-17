<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', 'ProductsController',
    ['only' => ['index', 'show']]);

Route::get('products/show_products/category_id/{id}', ['as' => 'category_products','uses' => 'ProductsController@show_products' , function ($id) {
    //
    return $id;
}]);