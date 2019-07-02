<?php

use App\Camp;
use App\Title;
use App\Point;
use App\Camp_Point;
use App\Person;
use Illuminate\Http\Request;

Route::get('/top', 'CampsController@index');

Route::get('/', 'CampsController@recommend_index');

Route::get('/list', 'CampsController@list');

Route::get('/detail/{id}', 'DetailController@index')->name('detail');

Route::get('/people/{id}', 'PersonController@index')->name('people');

Route::get('/date', 'DateController@review');

Route::post('/date', 'DateController@index')->name('date');

Route::post('/rental_item', 'Rental_itemController@index')->name('rental_item');

Route::post('/rental_car', 'Rental_carController@index');

Route::post('/confirm', 'ConfirmController@index');

Route::post('/customer/confirm', 'CustomersController@confirm');

Route::get('/customer/complete', 'CustomersController@complete');




//以下、登録フォームのルート
Route::get('/customer', 'CustomersController@input');
Route::post('/customer/update', 'CustomersController@update');





Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/terms', function () {
    return view('terms');
});


Route::get('log_test', 'LogTestController @index');
