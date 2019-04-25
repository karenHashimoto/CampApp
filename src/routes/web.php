<?php
Route::get('/', 'TopController@index');

Route::get('/detail/{id}', 'InformationController@show');

<<<<<<< HEAD
Route::put('/detail/{id}', 'InformationController@show');
=======
Route::delete('/detail/{id}', 'InformationController@show');
>>>>>>> 20377a8b798d5d87d72f08531ef900a8bdfd99f5
