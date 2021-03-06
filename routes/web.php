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
Route::post('/order/create', 'OrderController@create');
Route::post('/order/store', 'OrderController@store');
Route::get('/order/show/{id?}', 'OrderController@show');
Route::post('/order/update', 'OrderController@update');
Route::post('/order/content/update', 'OrderController@content_update');
Route::post('/order/{id?}/content/create', 'OrderController@content_create');
Route::get('/order/{id?}/content/create', 'OrderController@content_create');
Route::post('/order/{id?}/content/store', 'OrderController@content_store');
// Route::get('/order_delete', 'OrderController@destroy');

Route::get('/arrival_search', 'ArrivalController@index');

//商品管理
// Route::get('/product_search', 'ProductsController@index');
// 	// 商品デザイン検索
// Route::get('/product_detail', 'ProductsController@show');
// 	// 商品デザイン詳細まわりのルーティング
Route::resource('product', 'ProductsController');
Route::get('product/{product_id?}/size/{size_id?}', 'ProductsController@size_show');
Route::delete('product/{product_id?}/size/{size_id?}', 'ProductsController@size_destroy');

//受注管理
Route::get('/recieved_search','RecievedController@index');
Route::post('/recieved_store','RecievedController@store');
Route::get('/recieved/show/{id?}', 'RecievedController@show');
Route::get('/recieved/create','RecievedController@create');
Route::post('/recieved/update','RecievedController@update');

Route::get('/recieved/{id?}/content_create', 'RecievedController@content_create');
Route::post('/recieved/{id?}/content/store', 'RecievedController@content_store');
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
Route::resource('category','CategoryController');
Route::get('/category_search','CategoryController@index');
Route::get('/category/show/{id?}', 'CategoryController@show');
Route::post('/category/update', 'CategoryController@update');
Route::get('/category/create', 'CategoryController@create');
Route::post('/category/store', 'CategoryController@store');

//ブランド管理
Route::resource('brand','BrandController');
Route::get('/brand_search','BrandController@index');
Route::get('/brand/show/{id?}', 'BrandController@show');
Route::post('/brand/update', 'BrandController@update');
Route::get('/brand/create', 'BrandController@create');
Route::post('/brand/store', 'BrandController@store');


//顧客管理
Route::resource('customer','CustomerController');
Route::get('/customer_search','CustomerController@index');
Route::get('/customer/show/{id?}', 'CustomerController@show');
Route::post('/customer/update', 'CustomerController@update');
Route::get('/customer/create', 'CustomerController@create');
Route::post('/customer/store', 'CustomerController@store');
Route::get('/customer_address/{customer_id?}/show/{id?}','CustomerController@address_show');
Route::post('/customer_address/update', 'CustomerController@address_update');
Route::get('/customer_address_register/{id?}','CustomerController@address_create');
Route::post('/customer_address_register/store','CustomerController@address_store');

//従業員管理
Route::resource('staff', 'StaffController');
Route::get('/staff_search','StaffController@index');
Route::get('/staff/show/{id?}','StaffController@show');
Route::post('/staff/update','StaffController@update');
Route::get('/staff/create', 'StaffController@create');
Route::post('/staff/store','StaffController@store');

//色管理
//Route::get('/color_search','ColorController@index');
//Route::get('/color/show/{id?}','ColorController@show');
//Route::post('/color/update','ColorController@update');
//Route::get('/color/create', 'ColorController@create');
//Route::post('/color/store','ColorController@store');

//サイズ管理
Route::resource('size', 'SizeController');
Route::get('/size_search','SizeController@index');
Route::get('/size/show/{id?}','SizeController@show');
Route::post('/size/update','SizeController@update');
Route::get('/size/create', 'SizeController@create');
Route::post('/size/store','SizeController@store');

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

//ユーザー権限関係
//開発者のみ許可
//ロール値が「1」のユーザのみ。
//管理者以上
//ロール値が「1～5」のユーザのみ。
//一般ユーザ以上
//ロール値が「1～10」のユーザ（現状全ユーザ）。
Auth::routes();

//一般以上test3
Route::group(['middleware' => ['auth', 'can:user-higher']], function () {
     
    
    //発注管理
    Route::get('/order_search', 'OrderController@index');
    Route::get('/order/create', 'OrderController@create');
    Route::post('/order/create', 'OrderController@create');
    Route::post('/order/store', 'OrderController@store');
    Route::get('/order/show/{id?}', 'OrderController@show');
    Route::post('/order/update', 'OrderController@update');
    Route::post('/order/content/update', 'OrderController@content_update');
    Route::post('/order/{id?}/content/create', 'OrderController@content_create');
    Route::get('/order/{id?}/content/create', 'OrderController@content_create');
    Route::post('/order/{id?}/content/store', 'OrderController@content_store');
    // Route::get('/order_delete', 'OrderController@destroy');

    Route::get('/arrival_search', 'ArrivalController@index');

    //商品管理
    // Route::get('/product_search', 'ProductsController@index');
    // 	// 商品デザイン検索
    // Route::get('/product_detail', 'ProductsController@show');
    // 	// 商品デザイン詳細まわりのルーティング
    Route::resource('product', 'ProductsController');
    Route::get('product/{product_id?}/size/{size_id?}', 'ProductsController@size_show');
    Route::delete('product/{product_id?}/size/{size_id?}', 'ProductsController@size_destroy');


    //不良品管理
    Route::resource('waste', 'WasteController');
    Route::get('/waste_search','WasteController@index');
    Route::get('/waste_detail','WasteController@show');

    //棚卸し管理
    Route::resource('inventory', 'InventoryController');
    Route::get('/inventory_search','InventoryController@index');
    Route::get('/inventory_detail','InventoryController@show');

    //棚配置変更
    Route::resource('stock_shelf_change','Stock_shelf_changeController');
    Route::get('/stock_shelf_change_search','Stock_shelf_changeController@index');
    Route::get('/stock_shelf_change_detail','Stock_shelf_changeController@show');

    //注文管理
    Route::get('/recieved_search','RecievedController@index');

    //入金管理
    Route::resource('spending', 'SpendingController');
    Route::get('/spending_search','SpendingController@index');
    Route::get('/spending_detail','SpendingController@show');

    //出金管理
    Route::resource('payment', 'PaymentController');
    Route::get('/payment_search','PaymentController@index');
    Route::get('/payment_detail','PaymentController@show');

    //売上管理
    Route::get('/sales','SalesController@index');

    //カテゴリ管理
    Route::get('/category_search','CategoryController@index');
    Route::get('/category/show/{id?}', 'CategoryController@show');

    //ブランド管理
    Route::get('/brand_search','BrandController@index');
    Route::get('/brand/show/{id?}', 'BrandController@show');

    //顧客管理
    Route::resource('customer','CustomerController');
    Route::get('/customer_search','CustomerController@index');
    Route::get('/customer_detail','CustomerController@show');

    //従業員管理
    Route::get('/staff_search','StaffController@index');
    Route::get('/staff/show/{id?}','StaffController@show');

    //色詳細閲覧
    Route::get('/color_search','ColorController@index');
    Route::get('/color/show/{id?}','ColorController@show');

    //サイズ管理
    Route::get('/size_search','SizeController@index');
    Route::get('/color/show/{id?}','ColorController@show');

    //棚番号管理
    Route::get('/stock_shelf_search', function () {
        return view('stock_shelf/stock_shelf_search');
    });
    

});

//管理者以上test2
Route::group(['middleware' => ['auth', 'can:admin-higher']], function () {
    

    //カテゴリ管理
    Route::post('/category/update', 'CategoryController@update');
    Route::get('/category/create', 'CategoryController@create');
    Route::post('/category/store', 'CategoryController@store');

    //ブランド管理
    Route::post('/brand/update', 'BrandController@update');
    Route::get('/brand/create', 'BrandController@create');
    Route::post('/brand/store', 'BrandController@store');

    //従業員管理
    Route::post('/staff/update','StaffController@update');
    Route::get('/staff/create', 'StaffController@create');
    Route::post('/staff/store','StaffController@store');

    //色管理
    Route::post('/color/update','ColorController@update');
    Route::get('/color/create', 'ColorController@create');
    Route::post('/color/store','ColorController@store');

    //サイズ管理
    Route::post('/size/update','SizeController@update');
    Route::get('/size/create', 'SizeController@create');
    Route::post('/size/store','SizeController@store');
    

    //ユーザー登録
    Route::post('/register', 'Auth\RegisterController@register');
});
  
  // 開発者管理者のみtest1
Route::group(['middleware' => ['auth', 'can:system-only']], function () {

});
