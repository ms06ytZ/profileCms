<?php
Route::get('/', 'IndexController@index');

Route::get('/login','Auth\LoginController@index');
Route::post('/login','Auth\LoginController@login');

Route::get('/admin_root','AdminRootController@index');
Route::post('/admin_root_update','AdminRootController@update');

Route::get('/admin_file/{fileName}','AdminRootController@responseFile');


Route::post('/contact','IndexController@contact');
