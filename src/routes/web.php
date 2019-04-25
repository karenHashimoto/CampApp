<?php
Route::get('/', 'topController@index');

Route::get('/detail/{id}', 'InformationController@show');