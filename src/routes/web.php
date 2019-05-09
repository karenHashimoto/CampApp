<?php

use App\Camp;
use App\Title;
use App\Point;
use App\Camp_Point;
use Illuminate\Http\Request;


Route::get('/test_top', 'Test_TopController@index');

Route::get('/detail/{id}', 'Test_DetailController@index');

Route::get('/test_02/{id}', 'Test_02Controller@index');

Route::resource('/photos', 'PhotosController', ['only' => ['create', 'store']]);