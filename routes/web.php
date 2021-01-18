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
App::make('files')->link(storage_path('app/public'), public_path('storage'));

Auth::routes([
	'reset' => false,
	'confirm' => false,
	'verify' =>false,
]);
Route::get('/logout','Auth\LoginController@logout')->name('get-logout');
Route::get('/orders','AdminController@adminpanel')->name('adminpanel')->middleware('auth');
Route::get('/orders/{order}','AdminController@showorder')->name('ordersshow')->middleware('auth');

Route::group(['middleware' =>'auth'],function(){
	Route::group(['middleware' => 'is_admin'], function(){
		// Route::get('/orders','HomeController@index')->name('home');

		Route::get('/admin/categories','AdminController@admincategories')->name('admincategories');
		Route::get('/admin/categories/add','AdminController@admincategories_add')->name('admincategories_add');
		Route::post('/admin/categories/add','AdminController@storecategories')->name('storecategories');
		Route::get('admin/categories/edit={id}','AdminController@editcategory')->name('editcategory');
		Route::post('/adminupdate','AdminController@updatecategory')->name('updatecategory');
		Route::post('/admindestroy','AdminController@destroycategory')->name('destroycategory');
		Route::get('/admin/categories/view={id}','AdminController@viewCategory')->name('viewcategory');

		Route::get('/admin/products','AdminController@adminproducts')->name('adminproducts');
		Route::get('/admin/products/add',"AdminController@addproducts")->name('addproducts');
		Route::post('/storeproducts',"AdminController@storeproducts")->name('storeproducts');
		Route::get('/admin/products/edit={id}','AdminController@editproduct')->name('editproduct');
		Route::post('/updateproduct','AdminController@updateproduct')->name('updateproduct');
		Route::post('/destroyproduct','AdminController@destroyproduct')->name('destroyproduct');
		Route::get('/admin/products/view={id}','AdminController@viewProduct')->name('viewproduct');
	});
});



Route::get('/','MainController@index')->name('index');
Route::get('/categories','MainController@categories')->name('categories');


Route::post('cart/add/{id}','CartController@cartAdd')->name('cart-add');
Route::group(['middleware' => 'cart_is_not_empty', 
				'prefix' => 'cart'], function(){
	Route::get('/','CartController@cart')->name('cart');
	Route::get('/place','CartController@cartPlace')->name('cartplace');
	Route::post('/remove/{id}','CartController@cartRemove')->name('cart-remove');
	Route::post('/place','CartController@cartConfirm')->name('cart-confirm');
});


Route::get('/{category}','MainController@category')->name('category');
Route::get('/{category}/{product}','MainController@product')->name('product');


Route::post('/storecomment','MainController@storeComment')->name('storecomment');







Route::get('/home', 'HomeController@index')->name('home');
