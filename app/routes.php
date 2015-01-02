<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$products = Product::all();
	return View::make('products.index')->with('products', $products);
});


Route::group(array('prefix' => 'admin'), function()
{

    Route::get('/', function()
    {
       return View::make('admin.dashboard');
    });

    Route::resource('products', 'ProductController');
    Route::resource('categories', 'CategoryController');

});



