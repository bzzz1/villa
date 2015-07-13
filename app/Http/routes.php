<?php

// ESTATE
/*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
Route::get('/admin/add_estate', 				['as'=>'add_estate', 		'uses'=>'EstateController@add_estate', 'middleware'=>'auth'		]); // add_estate
Route::post('/admin/create_estate', 			['as'=>'create_estate', 	'uses'=>'EstateController@create_estate', 'middleware'=>'auth'	]); // redirect
Route::get('/admin/estates', 					['as'=>'admin_estates', 	'uses'=>'EstateController@admin_estates', 'middleware'=>'auth'	]); // estates (with delete form + change link)
Route::get('/ajax/{filters?}',					['as'=>'ajax_estates',  	'uses'=>'EstateController@ajax_estates'							]); // ajax
Route::get('/', 								['as'=>'estates', 			'uses'=>'EstateController@estates'								]); // estates (get count(selected))
Route::get('/estates/{estate}/{estate_id}',		['as'=>'estate', 			'uses'=>'EstateController@estate'								]); // estate
Route::get('/selected', 						['as'=>'selected', 			'uses'=>'EstateController@selected'								]); // estates (selected_estates)
Route::post('/ajax_select_estate/{estate_id}', 	['as'=>'ajax_select_estate','uses'=>'EstateController@ajax_select_estate'					]); // ajax
Route::get('/admin/change_estate/{estate_id}', 	['as'=>'change_estate', 	'uses'=>'EstateController@change_estate', 'middleware'=>'auth'	]); // estate_change++
Route::post('/admin/update_estate', 			['as'=>'update_estate', 	'uses'=>'EstateController@update_estate', 'middleware'=>'auth'	]); // redirect
Route::post('/admin/delete_estate/{estate_id}', ['as'=>'delete_estate', 	'uses'=>'EstateController@delete_estate', 'middleware'=>'auth'	]); // redirect->with
Route::post('/admin/upload/', 					['as'=>'upload', 			'uses'=>'EstateController@upload'		                        ]); // upload
// ARTICLE
/*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
Route::get('/admin/add_article',					['as'=>'add_article', 	 'uses'=>'ArticleController@add_article', 'middleware'=>'auth'		]); // redirect
Route::post('/admin/cretate_article',				['as'=>'create_article', 'uses'=>'ArticleController@create_article', 'middleware'=>'auth'	]); // redirect
Route::get('/admin/articles', 						['as'=>'admin_articles', 'uses'=>'ArticleController@admin_articles', 'middleware'=>'auth'	]); // articles (with delete form + change link)
Route::get('/articles', 							['as'=>'articles', 		 'uses'=>'ArticleController@articles'								]); // articles
Route::get('/articles/{article}/{article_id}', 		['as'=>'article', 		 'uses'=>'ArticleController@article'								]); // article
Route::get('/admin/change_article/{article_id}', 	['as'=>'change_article', 'uses'=>'ArticleController@change_article', 'middleware'=>'auth'	]); // article_change (links)
Route::post('/admin/update_article', 				['as'=>'update_article', 'uses'=>'ArticleController@update_article', 'middleware'=>'auth'	]); // redirect
Route::post('/admin/delete_article/{article_id}', 	['as'=>'delete_article', 'uses'=>'ArticleController@delete_article', 'middleware'=>'auth'	]); // redirect->with
Route::post('/admin/upload/', 						['as'=>'upload', 		 'uses'=>'ArticleController@upload'                          		]); // upload
// TOWN
/*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
Route::post('/admin/towns/create_town', 			['as'=>'create_town', 'uses'=>'TownController@create_town', 'middleware'=>'auth'	]); // popup
Route::get('/admin/towns', 							['as'=>'admin_towns', 'uses'=>'TownController@admin_towns', 'middleware'=>'auth'	]); // towns
Route::post('/admin/towns/update_town/{town_id}', 	['as'=>'update_town', 'uses'=>'TownController@update_town', 'middleware'=>'auth'	]); // popup
Route::post('/admin/towns/delete_town/{town_id}', 	['as'=>'delete_town', 'uses'=>'TownController@delete_town', 'middleware'=>'auth'	]); // redirect->with

// DISTRICT
/*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
Route::post('/admin/districts/create_district', 				['as'=>'create_district', 'uses'=>'DistrictController@create_district', 'middleware'=>'auth'	]); // popup
Route::get('/admin/districts', 									['as'=>'admin_districts', 'uses'=>'DistrictController@admin_districts', 'middleware'=>'auth'	]); // districts
Route::post('/admin/districts/update_district/{district_id}', 	['as'=>'update_district', 'uses'=>'DistrictController@update_district', 'middleware'=>'auth'	]); // popup
Route::post('/admin/districts/delete_district/{district_id}', 	['as'=>'delete_district', 'uses'=>'DistrictController@delete_district', 'middleware'=>'auth'	]); // redirect->with

// STATIC PAGES
/*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
Route::get('/how_to', 		['as'=>'how_to', 	'uses'=>'MainController@how_to'		]); // how_to
Route::get('/rent_sale', 	['as'=>'rent_sale', 'uses'=>'MainController@rent_sale'	]); // rent_sale
Route::get('/contacts',  	['as'=>'contacts', 	'uses'=>'MainController@contacts'	]); // contacts

// INTERACTION
/*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
Route::get('/admin', 		['as'=>'admin', 	'uses'=>'MainController@admin'		]); // admin
Route::get('/login', 		['as'=>'login', 	'uses'=>'MainController@login'		]); // login
Route::post('/logging', 	['as'=>'logging', 	'uses'=>'MainController@logging'	]); // redirect
Route::post('/logout', 		['as'=>'logout', 	'uses'=>'MainController@logout'		]); // redirect
Route::post('/feedback',	['as'=>'feedback', 	'uses'=>'MainController@feedback'	]); // redirect with 
Route::post('/order',		['as'=>'order', 	'uses'=>'MainController@order'		]); // redirect with 


// App::missing(function($exception) {
// 	return Redirect::to('/');
// });