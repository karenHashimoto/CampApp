<?php
Route::get('/', 'TopController@index');

Route::get('/detail/{id}', 'InformationController@show');
