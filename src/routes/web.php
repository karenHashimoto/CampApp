<?php
Route::get('/', 'TopController@index');

Route::get('/detail/{id}', 'InformationController@show');

Route::post('/detail/{id}', 'InformationController@show');
