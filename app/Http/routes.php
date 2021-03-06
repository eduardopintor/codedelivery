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

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin', 'middleware' => ['auth.checkrole:admin', 'domain' => 'localhost:8000'], 'as' => 'admin.'], function(){

    Route::group(['prefix' => 'clients', 'as' => 'clients.'], function(){
        Route::get('/', ['as' => 'index' ,'uses' =>'ClientsController@index']);
        Route::get('create', ['as' => 'create' ,'uses' => 'ClientsController@create']);
        Route::get('edit/{id}', ['as' => 'edit' ,'uses' => 'ClientsController@edit']);
        Route::post('store', ['as' => 'store' ,'uses' => 'ClientsController@store']);
        Route::post('update/{id}', ['as' => 'update' ,'uses' => 'ClientsController@update']);
    });

    Route::group(['prefix' => 'categories', 'as' => 'categories.'], function(){
        Route::get('/', ['as' => 'index' ,'uses' =>'CategoriesController@index']);
        Route::get('create', ['as' => 'create' ,'uses' => 'CategoriesController@create']);
        Route::get('edit/{id}', ['as' => 'edit' ,'uses' => 'CategoriesController@edit']);
        Route::post('store', ['as' => 'store' ,'uses' => 'CategoriesController@store']);
        Route::post('update/{id}', ['as' => 'update' ,'uses' => 'CategoriesController@update']);
    });

    Route::group(['prefix' => 'products', 'as' => 'products.'], function(){
        Route::get('/', ['as' => 'index' ,'uses' =>'ProductsController@index']);
        Route::get('create', ['as' => 'create' ,'uses' => 'ProductsController@create']);
        Route::get('edit/{id}', ['as' => 'edit' ,'uses' => 'ProductsController@edit']);
        Route::get('destroy/{id}', ['as' => 'destroy' ,'uses' => 'ProductsController@destroy']);
        Route::post('store', ['as' => 'store' ,'uses' => 'ProductsController@store']);
        Route::post('update/{id}', ['as' => 'update' ,'uses' => 'ProductsController@update']);
    });

    Route::group(['prefix' => 'orders', 'as' => 'orders.'], function(){
        Route::get('/', ['as' => 'index' ,'uses' =>'OrdersController@index']);
        Route::get('create', ['as' => 'create' ,'uses' => 'OrdersController@create']);
        Route::get('edit/{id}', ['as' => 'edit' ,'uses' => 'OrdersController@edit']);
        Route::post('store', ['as' => 'store' ,'uses' => 'OrdersController@store']);
        Route::post('update/{id}', ['as' => 'update' ,'uses' => 'OrdersController@update']);
    });

    Route::group(['prefix' => 'coupons', 'as' => 'coupons.'], function(){
        Route::get('/', ['as' => 'index' ,'uses' =>'CouponsController@index']);
        Route::get('create', ['as' => 'create' ,'uses' => 'CouponsController@create']);
        Route::get('edit/{id}', ['as' => 'edit' ,'uses' => 'CouponsController@edit']);
        Route::post('store', ['as' => 'store' ,'uses' => 'CouponsController@store']);
        Route::post('update/{id}', ['as' => 'update' ,'uses' => 'CouponsController@update']);
    });

});

Route::group(['prefix' => 'customer', 'middleware' => 'auth.checkrole:client', 'as' => 'customer.'], function() {

    Route::group(['prefix' => 'order', 'as' => 'order.'], function(){
        Route::get('/', ['as' => 'index' ,'uses' =>'CheckoutController@index']);
        Route::get('create', ['as' => 'create' ,'uses' => 'CheckoutController@create']);
        Route::post('store', ['as' => 'store' ,'uses' => 'CheckoutController@store']);
    });

});

Route::group(['prefix' => 'api', 'middleware' => 'oauth', 'as' => 'api.'], function(){
    Route::get('pedidos', function(){
        return [
            'id', '1',
            'name', 'Eduardo Pintor',
            'total', '10.00',
        ];
    });
});

Route::post('oauth/access_token', function() {
    return Response::json(Authorizer::issueAccessToken());
});
