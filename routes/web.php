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

Route::get('/', function () {
    return view('index');
})->name('public');

Route::group(['middleware' => ['auth', 'web','admin']], function(){
	Route::group(['prefix' => 'admin'], function(){
		Route::get('/', 'AdminController@index')->name('admin.index');
		Route::get('/manufacturer/add','ManufacturerController@add')->name('add.manufacturer');
		Route::post('/manufacturer/doAdd','ManufacturerController@doAdd')->name('post.AddManu');
		Route::get('/product','ProductController@index')->name('admin.product');
		Route::get('/product/add','ProductController@add')->name('admin.product.add');
		Route::get('/type_product/add', 'TypeProductController@add')->name('admin.typeProduct.add');
		Route::post('/type_product/doAdd', 'TypeProductController@doAdd')->name('post.AddTypeProduct');
	});
});
Route::get('/admin/login', 'AdminController@getLogin')->name('login');
Route::post('/admin/doLogin', 'AdminController@postLogin')->name('Admin.doLogin');
Route::get('/admin/logout', 'AdminController@logout')->name('Admin.Logout');