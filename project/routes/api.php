<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/add_client', 'ClientController@addClient');
Route::put('/update_client', 'ClientController@updateClient');
Route::post('/add_category', 'AdminController@addCategory');
Route::put('/update_category', 'AdminController@updateCategory');
Route::post('/add_cat_detail', 'AdminController@addCatDetail');
Route::put('/update_cat_detail', 'AdminController@updateCatDetail');
Route::post('/add_cart', 'CartController@addCart');
Route::delete('/delete_cart', 'CartController@deleteCart');
Route::post('/add_item', 'ItemController@addItem');
Route::put('/update_item', 'ItemController@updateItem');
Route::post('/add_customer', 'HistoryController@addCustomer'); // harusnya ini otomatis ke isi klo purchase itu status nya delivered
Route::put('/update_customer', 'HistoryController@updateCustomer');
Route::post('/add_customer_item', 'HistoryController@addCustomerItem'); //sama ^
Route::put('/update_customer_item', 'HistoryController@updateCustomerItem');
Route::post('/add_item_detail', 'ItemController@addItemDetail');//kata sir hantze misal key di table category detail
                                                                //nambah dia langsung copy ke table key item detail item tersebut
Route::put('/update_item_detail', 'ItemController@updateItemDetail');
Route::post('/add_promo', 'AdminController@addPromo');
Route::put('/update_promo', 'AdminController@updatePromo');
Route::post('/add_status', 'AdminController@addStatus');
Route::put('/update_status', 'AdminController@updateStatus');
Route::post('/add_payment_method', 'ClientController@addPaymentMethod');
Route::put('/update_payment_method', 'ClientController@updatePaymentMethod');
Route::post('/add_purchase', 'HistoryController@addPurchase');
Route::put('/update_purchase', 'HistoryController@updatePurchase');
Route::post('/add_purchase_list', 'HistoryController@addPurchaseList');
Route::put('/update_purchase_list', 'HistoryController@updatePurchaseList');

Route::get('/get_client', 'ClientController@getClient');
Route::get('/get_item_detail/{id}', 'ItemController@getItemDetail');
Route::get('/get_item_by_genre/{genre}', 'ItemController@getItemByGenre');


