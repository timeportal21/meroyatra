<?php

Route::fallback(function () {
	return response()->json(['error' => 'Not Found!'], 404);
});

Route::post('/login', 'Api\V1\AuthController@login');

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1', 'middleware' => ['auth:api']], function () {
	Route::get('logout', 'AuthController@logout');
});



