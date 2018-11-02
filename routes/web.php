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
//	if(DB::connection()->getDatabaseName())
//   {
     echo "connected successfully to database ".DB::connection()->getDatabaseName();
//   }

    return view('welcome');
});

//発注管理
Route::get('/order_search', 'OrderController@index');

//商品管理
Route::get('/product_search', 'ProductsController@index');
Route::get('/product_detail', 'ProductsController@product_detail');
//注文確認
Route::get('/recievde', 'RecievdController@index');


//
