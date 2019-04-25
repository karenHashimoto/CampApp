<?php
Route::get('/', 'TopController@index');

Route::get('/detail/{id}', 'InformationController@show');

Route::delete('/detail/{id}', 'InformationController@show');
Route::put('/detail/{id}', 'InformationController@show');
