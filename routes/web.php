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

Route::get('/', 'HomeController@index')->name('index');

//Group Route Admin
Route::group(['middleware' => ['auth', 'web','admin']], function(){
	Route::group(['prefix' => 'admin'], function(){
		Route::get('/', 'AdminController@index')->name('admin.index');
		
		//Route Manufacturers
		Route::get('/manufacturer/', 'ManufacturerController@list')->name('admin.manufacturer');
		Route::get('/manufacturer/add','ManufacturerController@add')->name('admin.manufacturer.add');
		Route::post('/manufacturer/doAdd','ManufacturerController@doAdd')->name('admin.manufacturer.doAdd');
		//End Route Manufacturer

		//Route Products
		Route::get('/product','ProductController@index')->name('admin.product');
		Route::get('/product/{id}/list_product', 'ProductController@list')->name('admin.product.list');
		Route::get('/product/{id}/add','ProductController@add')->name('admin.product.add');
		Route::post('/product/{id}/add','ProductController@doAdd')->name('admin.product.doAdd');
		Route::get('/product/{id}/edit', 'ProductController@edit')->name('admin.product.edit');
		Route::post('product/{id}/update', 'ProductController@update')->name('admin.product.update');
		Route::get('/product/{id_manu}/{id}/delete', 'ProductController@delete')->name('admin.product.delete');
		//End Route Products

		//Route Type Products
		Route::get('/type_product', 'TypeProductController@show')->name('admin.typeProduct');
		Route::get('/type_product/add', 'TypeProductController@add')->name('admin.typeProduct.add');
		Route::post('/type_product/doAdd', 'TypeProductController@doAdd')->name('post.AddTypeProduct');
		//End Route Type Product

		//Route Posts
		Route::get('/post/list')->name('admin.post.list');
		Route::get('/post/add', 'PostController@add')->name('admin.post.add');
		//End Route Post
	});
});
//End Group Route Admin

// Route Authencation
Route::get('/admin/login', 'AdminController@getLogin')->name('login');
Route::post('/admin/doLogin', 'AdminController@postLogin')->name('Admin.doLogin');
Route::get('/admin/logout', 'AdminController@logout')->name('Admin.Logout');
Route::get('/admin/register', 'AdminController@register')->name('admin.register');
Route::post('/admin/doRegister', 'AdminController@doRegister')->name('admin.doRegister');
//End Route Authencation

//Route Menu
Route::get('/type_product/{id}', 'HomeController@menu_typeProduct')->name('menu.typeProduct');

//End Route Menu

//Route Product
Route::get('/product/detail/{id}', 'HomeController@product_detail')->name('product.detail');
//End Route Product

//Route ListCart
Route::get('/listCart/{id}', 'ListCartController@add')->name('listCart.add');
//End ListCart