<?php

use App\Camp;
use App\Title;
use App\Point;
use App\Camp_Point;
use App\Person;
use App\Number;
use Illuminate\Http\Request;


Route::get('/', 'CampsController@index');

Route::get('/test_detail/{id}', 'Test_DetailController@index');

Route::get('/test_02/{id}', 'Test_02Controller@index');

Route::resource('/photos', 'PhotosController', ['only' => ['create', 'store']]);

Route::get('/peoplaaae/{id}', 'PersonController@index')->name('aaa');

Route::get('/number', 'NumberController@index');
Route::post('/number', 'NumberController@confirm');
Route::post('/number/complete', 'NumberController@complete');
