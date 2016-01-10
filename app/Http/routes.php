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


Route::get('/', 'HomeController@index');

Route::get('register', ['uses' => 'RegistrationController@register','as' => 'register']);

Route::post('register', ['uses' => 'RegistrationController@postRegister','as' => 'postRegister']);

Route::get('login', ['uses' => 'RegistrationController@login', 'as' => 'login']);

Route::post('login', [ 'uses' => 'RegistrationController@postLogin', 'as' => 'postLogin']);

Route::get('logout', function() {

	\Auth::logout();
	return Redirect::route('login');
});



Route::group(['prefix' => 'product', 'middleware' => ['auth']], function() {
	
	Route::get('/add', 'ProductController@index');


	Route::get('list',  ['uses' => 'ProductController@lists', 'as' => 'productList']);	

	Route::post( '/', ['uses' => 'ProductController@create', 'as' => 'postAddProduct']  );

	Route::get('{id}/edit', ['uses' => 'ProductController@edit', 'as' => 'editProduct'] );

	Route::post('{id}/save', ['uses'=> 'ProductController@update', 'as' => 'saveProduct']);	


});

Route::get('product/{id}/detail', ['uses' => 'ProductController@show', 'as' => 'productDetail']);


Route::group(['prefix' => 'api'], function( ) {

	Route::get('products', 'ApiController@products');

	Route::post('cart', 'ApiController@addToCart');

	Route::get('cart-count', 'ApiController@getCartCount');
});
