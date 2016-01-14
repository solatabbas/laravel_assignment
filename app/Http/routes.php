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
    ['only' => ['index', 'show','create']]);

Route::get('products/show_products/category_id/{id}', ['as' => 'category_products','uses' => 'ProductsController@show_products' , function ($id) {
    //
    return $id;
}]);

Route::get('category/create','CategoryController@create');
Route::get('category/angularjs','CategoryController@angular');
Route::post('category/store','CategoryController@post');
Route::any('category/update/{id}','CategoryController@update');
Route::get('category/edit/category_id/{id}', ['as' => 'category_edit','uses' => 'CategoryController@edit' , function ($id) {
    //
    return $id;
}]);

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);
// Products controller Routes



// end
