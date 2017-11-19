<?php

Auth::routes();


Route::get('products', 'ProductsController@show');

	


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
		Route::get('recipientList','HandoverController@recipients');
//Home Routes
Route::get('/home', 'HomeController@firstFunc')->name('home');
Route::get('outOfStock', 'ProductsController@outOfStock');
Route::post('/site/login',
[  
	'uses'=>'loginController@login',
	'as'  =>'app.login'
]);
	
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
Route::post('createProduct','ProductsController@create');


//Route::get('/home', 'HomeController@index')->name('home');
//Admin Routes
Route::group(['middleware'=>'auth'], function()
{
	Route::get('/admin','AdminController@index');
	Route::get('/', 'HomeController@index');
});

//Route::get('/admin/',['as' => 'regional.admin','uses' => 'AdminController@index']);
//Route::view('/master' ,'master')->name('master');
