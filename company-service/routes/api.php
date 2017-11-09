<?php

use Illuminate\Http\Request;

Route::get('/v1/company', 'CompanyController@index');
Route::post('/v1/company', 'CompanyController@create');
Route::put('/v1/company/{id}', 'CompanyController@update');
Route::get('/v1/company/{id}', 'CompanyController@get');
Route::delete('/v1/company/{id}', 'CompanyController@delete');