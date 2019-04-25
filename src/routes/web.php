<?php
Route::get('/', 'TopController@index');

Route::get('/detail/{id}', 'InformationController@show');

Route::put('/detail/{id}', 'InformationController@show');
