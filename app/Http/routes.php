<?php
Blade::setRawTags('{{', '}}');
Blade::setEscapedContentTags('{{{', '}}}');

// ESTATE
/*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
Route::post('/admin/create_estate', 			['as'=>'create_estate', 'uses'=>'EstateController@create_estate', 'middleware'=>'auth']); // create_estate
Route::get('/admin/estates', 					['as'=>'admin_estates', 'uses'=>'EstateController@admin_estates', 'middleware'=>'auth']); // estates (with delete form + change link)
Route::get('/', 								['as'=>'estates', 		'uses'=>'EstateController@estates']); // estates (get count(selected))
Route::get('/estates/{estate}/{estate_id}',		['as'=>'estate', 		'uses'=>'EstateController@estate']); // estate
Route::get('/selected', 						['as'=>'selected', 		'uses'=>'EstateController@selected']); // estates (selected_estates)
Route::post('/select_estate/{estate_id}', 		['as'=>'select_estate', 'uses'=>'EstateController@select_estate']); // redirect->back(estates) (by session_id)
Route::post('/admin/update_estate/{estate_id}', ['as'=>'update_estate', 'uses'=>'EstateController@update_estate', 'middleware'=>'auth']); // estate_change++
Route::post('/admin/delete_estate/{estate_id}', ['as'=>'delete_estate', 'uses'=>'EstateController@delete_estate', 'middleware'=>'auth']); // redirect->with

// ARTICLE
/*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
Route::post('/admin/cretate_article',				['as'=>'create_article', 'uses'=>'ArticleController@create_article', 'middleware'=>'auth']); // article_change
Route::get('/admin/articles', 						['as'=>'admin_articles', 'uses'=>'ArticleController@admin_articles', 'middleware'=>'auth']); // articles (with delete form + change link)
Route::get('/articles', 							['as'=>'articles', 		 'uses'=>'ArticleController@articles']); // articles
Route::get('/articles/{article}/{article_id}', 		['as'=>'article', 		 'uses'=>'ArticleController@article']); // article
Route::post('/admin/update_article', 				['as'=>'update_article', 'uses'=>'ArticleController@update_article', 'middleware'=>'auth']); // article_change (links)
Route::post('/admin/delete_article/{article_id}', 	['as'=>'delete_article', 'uses'=>'ArticleController@delete_article', 'middleware'=>'auth']); // redirect->with

// TOWN
/*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
Route::post('/admin/towns/create_town', 			['as'=>'create_town', 'uses'=>'TownController@create_town', 'middleware'=>'auth']); // popup
Route::get('/admin/towns', 							['as'=>'admin_towns', 'uses'=>'TownController@admin_towns', 'middleware'=>'auth']); // towns
Route::post('/admin/towns/update_town/{town_id}', 	['as'=>'update_town', 'uses'=>'TownController@update_town', 'middleware'=>'auth']); // popup
Route::post('/admin/towns/delete_town/{town_id}', 	['as'=>'delete_town', 'uses'=>'TownController@delete_town', 'middleware'=>'auth']); // redirect->with

// DISTRICT
/*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
Route::post('/admin/districts/create_district', 				['as'=>'create_district', 'uses'=>'DistrictController@create_district', 'middleware'=>'auth']); // popup
Route::get('/admin/districts', 									['as'=>'admin_districts', 'uses'=>'DistrictController@admin_districts', 'middleware'=>'auth']); // districts
Route::post('/admin/districts/update_district/{district_id}', 	['as'=>'update_district', 'uses'=>'DistrictController@update_district', 'middleware'=>'auth']); // popup
Route::post('/admin/districts/delete_district/{district_id}', 	['as'=>'delete_district', 'uses'=>'DistrictController@delete_district', 'middleware'=>'auth']); // redirect->with

// STATIC PAGES
/*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
Route::get('/how_to', 		['as'=>'how_to', 	'uses'=>'MainController@how_to']); // how_to
Route::get('/rent_sale', 	['as'=>'rent_sale', 'uses'=>'MainController@rent_sale']); // rent_sale
Route::get('/about', 	 	['as'=>'about', 	'uses'=>'MainController@about']); // about
Route::get('/contacts',  	['as'=>'contacts', 	'uses'=>'MainController@contacts']); // contacts
Route::get('/admin', 		['as'=>'admin', 	'uses'=>'MainController@admin']); // login or admin




// App::missing(function($exception) {
// 	return Redirect::to('/');
// });

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

// Cache::forget('33b4a8c80e9d594752509c6624476a22');
// Cache::flush();