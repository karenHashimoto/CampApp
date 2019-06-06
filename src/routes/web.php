<?php

use App\Camp;
use App\Title;
use App\Point;
use App\Camp_Point;
use App\Person;
use Illuminate\Http\Request;

Route::get('/', function () {
    return '<html><body>

    <a href="questionnaire1"><img src="/image/index_camcierge.jpg" width="100%" height="max"></a>
    
    </body></html>';
});

Route::get('/questionnaire1', function () {
    return '<html><body>
    <a href="questionnaire2"><img src="/image/Q1.svg" width="100%" heigth="max"></a></body></html>';
});

Route::get('/questionnaire2', function () {
    return '<html><body>
    <a href="questionnaire3"><img src="/image/Q2.svg" width="100%" heigth="max"></a></body></html>';
});

Route::get('/questionnaire3', function () {
    return '<html><body>
    <a href="top_recommend"><img src="/image/Q3.svg" width="100%" heigth="max"></a></body></html>';
});




Route::get('/top', 'CampsController@index');

Route::get('/detail/{id}', 'DetailController@index')->name('detail');

Route::get('/test_02/{id}', 'Test_02Controller@index');

Route::resource('/photos', 'PhotosController', ['only' => ['create', 'store']]);


Route::get('/people/{id}', 'PersonController@index')->name('people');


Route::post('/date', 'DateController@index')->name('date');


Route::post('/rental_item', 'Rental_itemController@index')->name('rental_item');

Route::post('/rental_car', 'Rental_carController@index');

Route::post('/confirm', 'ConfirmController@index');

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/top_recommend', 'CampsController@recommend_index');

//以下、登録フォームのルート
Route::get('/customer', 'CustomersController@input');
Route::post('/customer/confirm', 'CustomersController@confirm');
Route::post('/customer/update', 'CustomersController@update');
Route::get('/customer/complete', 'CustomersController@complete');
