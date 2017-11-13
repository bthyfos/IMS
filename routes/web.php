<?php

Auth::routes();
Route::get('/', 'HomeController@index');

Route::get('products',  function ()
{
	return view('products.index');
});


// Route::get('register', function()
// {
// 	return view('register');

// })->name('register');

Route::get('returns',  function ()
{
	return view('products.returns');
});

// Handover Routes

Route::get('handover','HandoverController@index');
Route::get('handoverList','HandoverController@getHandovers')
		->name('handoverList');
//Home Routes
Route::get('/home', 'HomeController@firstFunc')->name('home');

Route::get('outOfStock', 'ProductsController@outOfStock');
	


Route::get('admin',  function ()
{
	return view('admin.index');
});

Route::get('settings', function()
{
	return view('settings.index');

});

//Products
Route::get('productList','ProductsController@getProducts')->name('productList');
Route::get('productsList', 'ProductsController@index');


//Route::get('/home', 'HomeController@index')->name('home');
//Admin Routes
Route::get('/master' ,function()
{
	return view('master');
});
