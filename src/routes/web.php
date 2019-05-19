<?php

use App\Camp;
use App\Title;
use App\Point;
use App\Camp_Point;
use App\Person;
use App\Number;
use Illuminate\Http\Request;


Route::get('/', 'CampsController@index');

Route::get('/detail/{id}', 'DetailController@index');

Route::get('/test_02/{id}', 'Test_02Controller@index');

Route::resource('/photos', 'PhotosController', ['only' => ['create', 'store']]);

// Route::get('/peoplaaae/{id}', 'PersonController@index')->name('aaa');

// Route::get('/peoplaaae/{id}', 'PersonController@index')->name('aaa');

Route::get('/people/{id}', 'PersonController@index');

Route::post('/people/{id}', 'PersonController@store');

Route::get('/date/{id}', 'DateController@index');
