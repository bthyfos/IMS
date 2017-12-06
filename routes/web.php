<?php

Auth::routes();


Route::get('products', 'ProductsController@show');
Route::get('returns',function ()
{return view('products.returns');
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
	return view('master');
});
//Users
Route::get('settings' , 'UserController@index')->name('settings');
Route::match(['post'] , 'updateUser' , 'UserController@update');

//Products
Route::get('productList','ProductsController@getProducts')->name('productList');
Route::get('productsList', 'ProductsController@index');
Route::post('createProduct','ProductsController@create');
Route::post('addProductType','ProductTypeController@create');

//Preferences
//Route::post('preference', 'SettingsController@preference');
Route::post('preference', 'SettingController@preference');



//Admin Routes
Route::group(['middleware'=>'auth'], function()
{
    Route::get('/', 'HomeController@index');
	Route::get('dashboard','AdminController@index');
	Route::get('systemUsers','AdminController@systemUsers');
	Route::get('registration','AdminController@registration');
    Route::view('stock','AdminSide.products.list');

    Route::view('adminSettings','adminSide.settings.index');
   //Regions
    Route::get('regions','RegionController@regions');
    Route::post('addRegion','RegionController@addRegion');
    Route::get('getRegions','RegionController@getRegions')->name('getRegions');
    //ProductsInfo
    Route::view('stock','AdminSide.products.list');
    Route::view('inavailableStock','AdminSide.products.outOfStockList');

    Route::get('productsInStock','ProductsController@getProducts')->name('productsInStock');
    Route::get('inavailableStockList','ProductsController@inavailableStockList')->name('inavailableStockList');
   //Departments
    Route::view('departmentList','AdminSide.departments.departmentList');
    Route::get('departments','DepartmentsController@departments')->name('departments');
    Route::post('addDepartment','DepartmentsController@addDepartment');





});


