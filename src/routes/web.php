<?php

use App\Camp;
use App\Title;
use App\Point;
use App\Camp_Point;
use App\Person;
use Illuminate\Http\Request;

Route::get('/',function(){
    return '<html><body>

    <a href="top"><img src="/image/index_camcierge.jpg" width="100%" height="max"></a>
    
    </body></html>';
});




Route::get('/top', 'CampsController@index');

Route::get('/detail/{id}', 'DetailController@index');

Route::get('/test_02/{id}', 'Test_02Controller@index');

Route::resource('/photos', 'PhotosController', ['only' => ['create', 'store']]);

// Route::get('/peoplaaae/{id}', 'PersonController@index')->name('aaa');

// Route::get('/peoplaaae/{id}', 'PersonController@index')->name('aaa');

Route::get('/people/{id}', 'PersonController@index');

// Route::get('/people', 'PersonController@store')->name('people');
// Route::get('/people/{id}', 'PersonController@store')->name('people');


// Route::post('/people/{id}', 'PersonController@store')->name('people');
// Route::post('/people/{id}', 'PersonController@store');

// Route::get('/date/{id}', 'PersonController@store');

Route::post('/date', 'DateController@index');

// Route::get('/date/{id}', 'DateController@store');
Route::post('/rental_item', 'Rental_itemController@index');

Route::post('/rental_car', 'Rental_carController@index');

Route::post('/confirm', 'ConfirmController@index');
