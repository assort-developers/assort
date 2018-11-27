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
Route::get('/order/create', 'OrderController@create');
Route::get('/order/show/{id?}', 'OrderController@show');
Route::post('/order/update', 'OrderController@update');
Route::post('/order/content/update', 'OrderController@content_update');
// Route::get('/order_delete', 'OrderController@destroy');

//商品管理
// Route::get('/product_search', 'ProductsController@index');
// 	// 商品デザイン検索
// Route::get('/product_detail', 'ProductsController@show');
// 	// 商品デザイン詳細まわりのルーティング
Route::resource('product', 'ProductsController');
Route::get('product/{product_id?}/size/{size_id?}', 'ProductsController@size_show');
Route::delete('product/{product_id?}/size/{size_id?}', 'ProductsController@size_destroy');

//注文管理
Route::get('/recieved_search','RecievedController@index');

//出金管理
Route::resource('payment', 'PaymentController');
Route::get('/payment_search','PaymentController@index');
Route::get('/payment_detail','PaymentController@show');


//入金管理
Route::resource('spending', 'SpendingController');
Route::get('/spending_search','SpendingController@index');
Route::get('/spending_detail','SpendingController@show');


//売上管理
Route::get('/sales','SalesController@index');


//カテゴリ管理
Route::get('/category_search', 'CategoryController@index');
Route::get('/category/create','CategoryController@create');

//仕入先管理
Route::get('/brand_search', function () {
	return view('brand/brand_search');
});
//顧客管理
Route::resource('customer','CustomerController');
Route::get('/customer_search','CustomerController@index');
Route::get('/customer_detail','CustomerController@show');

//従業員管理
Route::resource('staff', 'StaffController');
Route::get('/staff_search','StaffController@index');
Route::get('/staff_detail','StaffController@show');

//色管理
Route::get('/color_search', function () {
	return view('color/color_search');
});
//サイズ管理
Route::get('/size_search', function () {
    return view('size/size_search');
});
//棚番号管理
Route::get('/stock_shelf_search', function () {
	return view('stock_shelf/stock_shelf_search');
});
//不良品管理
Route::resource('waste', 'WasteController');
Route::get('/waste_search','WasteController@index');
Route::get('/waste_detail','WasteController@show');

//棚卸し管理
Route::resource('inventory', 'InventoryController');
Route::get('/inventory_search','InventoryController@index');
Route::get('/inventory_detail','InventoryController@show');

//棚配置変更
Route::resource('stock_shelf_change',
                'Stock_shelf_changeController');
Route::get('/stock_shelf_change_search',
           'Stock_shelf_changeController@index');
Route::get('/stock_shelf_change_detail',
           'Stock_shelf_changeController@show');
