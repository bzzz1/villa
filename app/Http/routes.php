<?php
Blade::setRawTags('{{', '}}');
Blade::setEscapedContentTags('{{{', '}}}');

// Cache::forget('33b4a8c80e9d594752509c6624476a22');
// Cache::flush();

Route::get('/', 'MainController@estates');
// Route::get('/cron', 'MainController@cron');
// Route::post('/add_stock', 'MainController@add_stock');
// Route::post('/remove_stock/{stock_id}', 'MainController@remove_stock');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

// https://www.easycron.com/user