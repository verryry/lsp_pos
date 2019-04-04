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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/inventory','inventory.index');
Route::resource('/inventory/category','CategoryController');
Route::resource('/inventory/curr','CurrController');
Route::resource('/inventory/unit','UnitController');
Route::resource('/inventory/persen-keuntungan','PerkenController');
Route::resource('/inventory/bahan','BahanController');
Route::resource('/inventory/product','ProductController');
Route::resource('/inventory/barang-masuk','BarangController');
Route::resource('/inventory/barang-keluar','BarangKeluarController');
Route::get('/inventory/barang-masuk/keluar/{id}','BarangController@keluar')->name('barang-masuk.keluar');
Route::post('/inventory/barang-masuk/update-keluar/{id}','BarangController@updateKeluar')->name('barang-masuk.updateKeluar');


Route::resource('/master/users','UsersController');
Route::resource('/master/profile','ProfileController');
Route::resource('/pos','PosController');

// Route::middleware(['kasir'] || ['superadmin'])->group(function() {
// 	Route::prefix('pos')->group(function(){
// 		Route::get('/index', 'PosController@indexpos')->name('pos.index');
// 		Route::get('/indexsementara', 'PosController@indexpaymentsementara')->name('pos.paymentsementara-index');
// 		Route::post('pembayaran', 'PosController@transaksi')->name('pos.transaksi');
// 		Route::post('/paymentsementara', 'PosController@paymentsementarapos')->name('pos.paymentsementara');
// 		Route::get('/paymentsementara/delete/{id}', 'PosController@deletepaymentsementarapos')->name('pos.deletepaymentsementara');
// 		Route::get('/payment/delete/{id}', 'PosController@deletepaymentpos')->name('pos.deletepayment');
// 		Route::post('/payment/deletesemua', 'PosController@deletesemuapaymentpos')->name('pos.deletesemuapayment');
// 	});
// });
