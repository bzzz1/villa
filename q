[1mdiff --git a/app/Http/routes.php b/app/Http/routes.php[m
[1mindex e22aa45..f3dc0af 100644[m
[1m--- a/app/Http/routes.php[m
[1m+++ b/app/Http/routes.php[m
[36m@@ -2,57 +2,57 @@[m
 [m
 // ESTATE[m
 /*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/[m
[31m-Route::get('/admin/add_estate', 				['as'=>'add_estate', 		'uses'=>'EstateController@add_estate', 'middleware'=>'auth']); // add_estate[m
[31m-Route::post('/admin/create_estate', 			['as'=>'create_estate', 	'uses'=>'EstateController@create_estate', 'middleware'=>'auth']); // redirect[m
[31m-Route::get('/admin/estates', 					['as'=>'admin_estates', 	'uses'=>'EstateController@admin_estates', 'middleware'=>'auth']); // estates (with delete form + change link)[m
[31m-Route::get('/ajax/{filters?}',					['as'=>'ajax_estates',  	'uses'=>'EstateController@ajax_estates']); // ajax[m
[31m-Route::get('/', 								['as'=>'estates', 			'uses'=>'EstateController@estates']); // estates (get count(selected))[m
[31m-Route::get('/estates/{estate}/{estate_id}',		['as'=>'estate', 			'uses'=>'EstateController@estate']); // estate[m
[31m-Route::get('/selected', 						['as'=>'selected', 			'uses'=>'EstateController@selected']); // estates (selected_estates)[m
[31m-Route::post('/ajax_select_estate/{estate_id}', 	['as'=>'ajax_select_estate','uses'=>'EstateController@ajax_select_estate']); // ajax[m
[31m-Route::get('/admin/change_estate/{estate_id}', 	['as'=>'change_estate', 	'uses'=>'EstateController@change_estate', 'middleware'=>'auth']); // estate_change++[m
[31m-Route::post('/admin/update_estate', 			['as'=>'update_estate', 	'uses'=>'EstateController@update_estate', 'middleware'=>'auth']); // redirect[m
[31m-Route::post('/admin/delete_estate/{estate_id}', ['as'=>'delete_estate', 	'uses'=>'EstateController@delete_estate', 'middleware'=>'auth']); // redirect->with[m
[32m+[m[32mRoute::get('/admin/add_estate', 				['as'=>'add_estate', 		'uses'=>'EstateController@add_estate', 'middleware'=>'auth'		]); // add_estate[m
[32m+[m[32mRoute::post('/admin/create_estate', 			['as'=>'create_estate', 	'uses'=>'EstateController@create_estate', 'middleware'=>'auth'	]); // redirect[m
[32m+[m[32mRoute::get('/admin/estates', 					['as'=>'admin_estates', 	'uses'=>'EstateController@admin_estates', 'middleware'=>'auth'	]); // estates (with delete form + change link)[m
[32m+[m[32mRoute::get('/ajax/{filters?}',					['as'=>'ajax_estates',  	'uses'=>'EstateController@ajax_estates'							]); // ajax[m
[32m+[m[32mRoute::get('/', 								['as'=>'estates', 			'uses'=>'EstateController@estates'								]); // estates (get count(selected))[m
[32m+[m[32mRoute::get('/estates/{estate}/{estate_id}',		['as'=>'estate', 			'uses'=>'EstateController@estate'								]); // estate[m
[32m+[m[32mRoute::get('/selected', 						['as'=>'selected', 			'uses'=>'EstateController@selected'								]); // estates (selected_estates)[m
[32m+[m[32mRoute::post('/ajax_select_estate/{estate_id}', 	['as'=>'ajax_select_estate','uses'=>'EstateController@ajax_select_estate'					]); // ajax[m
[32m+[m[32mRoute::get('/admin/change_estate/{estate_id}', 	['as'=>'change_estate', 	'uses'=>'EstateController@change_estate', 'middleware'=>'auth'	]); // estate_change++[m
[32m+[m[32mRoute::post('/admin/update_estate', 			['as'=>'update_estate', 	'uses'=>'EstateController@update_estate', 'middleware'=>'auth'	]); // redirect[m
[32m+[m[32mRoute::post('/admin/delete_estate/{estate_id}', ['as'=>'delete_estate', 	'uses'=>'EstateController@delete_estate', 'middleware'=>'auth'	]); // redirect->with[m
 [m
 // ARTICLE[m
 /*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/[m
[31m-Route::get('/admin/add_article',					['as'=>'add_article', 	 'uses'=>'ArticleController@add_article', 'middleware'=>'auth']); // redirect[m
[31m-Route::post('/admin/cretate_article',				['as'=>'create_article', 'uses'=>'ArticleController@create_article', 'middleware'=>'auth']); // redirect[m
[31m-Route::get('/admin/articles', 						['as'=>'admin_articles', 'uses'=>'ArticleController@admin_articles', 'middleware'=>'auth']); // articles (with delete form + change link)[m
[31m-Route::get('/articles', 							['as'=>'articles', 		 'uses'=>'ArticleController@articles']); // articles[m
[31m-Route::get('/articles/{article}/{article_id}', 		['as'=>'article', 		 'uses'=>'ArticleController@article']); // article[m
[31m-Route::post('/admin/change_article/{article_id}', 	['as'=>'change_article', 'uses'=>'ArticleController@change_article', 'middleware'=>'auth']); // article_change (links)[m
[31m-Route::post('/admin/update_article', 				['as'=>'update_article', 'uses'=>'ArticleController@update_article', 'middleware'=>'auth']); // redirect[m
[31m-Route::post('/admin/delete_article/{article_id}', 	['as'=>'delete_article', 'uses'=>'ArticleController@delete_article', 'middleware'=>'auth']); // redirect->with[m
[32m+[m[32mRoute::get('/admin/add_article',					['as'=>'add_article', 	 'uses'=>'ArticleController@add_article', 'middleware'=>'auth'		]); // redirect[m
[32m+[m[32mRoute::post('/admin/cretate_article',				['as'=>'create_article', 'uses'=>'ArticleController@create_article', 'middleware'=>'auth'	]); // redirect[m
[32m+[m[32mRoute::get('/admin/articles', 						['as'=>'admin_articles', 'uses'=>'ArticleController@admin_articles', 'middleware'=>'auth'	]); // articles (with delete form + change link)[m
[32m+[m[32mRoute::get('/articles', 							['as'=>'articles', 		 'uses'=>'ArticleController@articles'								]); // articles[m
[32m+[m[32mRoute::get('/articles/{article}/{article_id}', 		['as'=>'article', 		 'uses'=>'ArticleController@article'								]); // article[m
[32m+[m[32mRoute::post('/admin/change_article/{article_id}', 	['as'=>'change_article', 'uses'=>'ArticleController@change_article', 'middleware'=>'auth'	]); // article_change (links)[m
[32m+[m[32mRoute::post('/admin/update_article', 				['as'=>'update_article', 'uses'=>'ArticleController@update_article', 'middleware'=>'auth'	]); // redirect[m
[32m+[m[32mRoute::post('/admin/delete_article/{article_id}', 	['as'=>'delete_article', 'uses'=>'ArticleController@delete_article', 'middleware'=>'auth'	]); // redirect->with[m
 [m
 // TOWN[m
 /*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/[m
[31m-Route::post('/admin/towns/create_town', 			['as'=>'create_town', 'uses'=>'TownController@create_town', 'middleware'=>'auth']); // popup[m
[31m-Route::get('/admin/towns', 							['as'=>'admin_towns', 'uses'=>'TownController@admin_towns', 'middleware'=>'auth']); // towns[m
[31m-Route::post('/admin/towns/update_town/{town_id}', 	['as'=>'update_town', 'uses'=>'TownController@update_town', 'middleware'=>'auth']); // popup[m
[31m-Route::post('/admin/towns/delete_town/{town_id}', 	['as'=>'delete_town', 'uses'=>'TownController@delete_town', 'middleware'=>'auth']); // redirect->with[m
[32m+[m[32mRoute::post('/admin/towns/create_town', 			['as'=>'create_town', 'uses'=>'TownController@create_town', 'middleware'=>'auth'	]); // popup[m
[32m+[m[32mRoute::get('/admin/towns', 							['as'=>'admin_towns', 'uses'=>'TownController@admin_towns', 'middleware'=>'auth'	]); // towns[m
[32m+[m[32mRoute::post('/admin/towns/update_town/{town_id}', 	['as'=>'update_town', 'uses'=>'TownController@update_town', 'middleware'=>'auth'	]); // popup[m
[32m+[m[32mRoute::post('/admin/towns/delete_town/{town_id}', 	['as'=>'delete_town', 'uses'=>'TownController@delete_town', 'middleware'=>'auth'	]); // redirect->with[m
 [m
 // DISTRICT[m
 /*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/[m
[31m-Route::post('/admin/districts/create_district', 				['as'=>'create_district', 'uses'=>'DistrictController@create_district', 'middleware'=>'auth']); // popup[m
[31m-Route::get('/admin/districts', 									['as'=>'admin_districts', 'uses'=>'DistrictController@admin_districts', 'middleware'=>'auth']); // districts[m
[31m-Route::post('/admin/districts/update_district/{district_id}', 	['as'=>'update_district', 'uses'=>'DistrictController@update_district', 'middleware'=>'auth']); // popup[m
[31m-Route::post('/admin/districts/delete_district/{district_id}', 	['as'=>'delete_district', 'uses'=>'DistrictController@delete_district', 'middleware'=>'auth']); // redirect->with[m
[32m+[m[32mRoute::post('/admin/districts/create_district', 				['as'=>'create_district', 'uses'=>'DistrictController@create_district', 'middleware'=>'auth'	]); // popup[m
[32m+[m[32mRoute::get('/admin/districts', 									['as'=>'admin_districts', 'uses'=>'DistrictController@admin_districts', 'middleware'=>'auth'	]); // districts[m
[32m+[m[32mRoute::post('/admin/districts/update_district/{district_id}', 	['as'=>'update_district', 'uses'=>'DistrictController@update_district', 'middleware'=>'auth'	]); // popup[m
[32m+[m[32mRoute::post('/admin/districts/delete_district/{district_id}', 	['as'=>'delete_district', 'uses'=>'DistrictController@delete_district', 'middleware'=>'auth'	]); // redirect->with[m
 [m
 // STATIC PAGES[m
 /*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/[m
[31m-Route::get('/how_to', 		['as'=>'how_to', 	'uses'=>'MainController@how_to']); // how_to[m
[31m-Route::get('/rent_sale', 	['as'=>'rent_sale', 'uses'=>'MainController@rent_sale']); // rent_sale[m
[31m-Route::get('/contacts',  	['as'=>'contacts', 	'uses'=>'MainController@contacts']); // contacts[m
[32m+[m[32mRoute::get('/how_to', 		['as'=>'how_to', 	'uses'=>'MainController@how_to'		]); // how_to[m
[32m+[m[32mRoute::get('/rent_sale', 	['as'=>'rent_sale', 'uses'=>'MainController@rent_sale'	]); // rent_sale[m
[32m+[m[32mRoute::get('/contacts',  	['as'=>'contacts', 	'uses'=>'MainController@contacts'	]); // contacts[m
 [m
 // INTERACTION[m
 /*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/[m
[31m-Route::get('/admin', 		['as'=>'admin', 	'uses'=>'MainController@admin']); // admin[m
[31m-Route::get('/login', 		['as'=>'login', 	'uses'=>'MainController@login']); // login[m
[31m-Route::post('/logging', 	['as'=>'logging', 	'uses'=>'MainController@logging']); // redirect[m
[31m-Route::post('/logout', 		['as'=>'logout', 	'uses'=>'MainController@logout']); // redirect[m
[31m-Route::post('/feedback',	['as'=>'feedback', 	'uses'=>'MainController@feedback']); // redirect with [m
[31m-Route::post('/order',		['as'=>'order', 	'uses'=>'MainController@order']); // redirect with [m
[32m+[m[32mRoute::get('/admin', 		['as'=>'admin', 	'uses'=>'MainController@admin'		]); // admin[m
[32m+[m[32mRoute::get('/login', 		['as'=>'login', 	'uses'=>'MainController@login'		]); // login[m
[32m+[m[32mRoute::post('/logging', 	['as'=>'logging', 	'uses'=>'MainController@logging'	]); // redirect[m
[32m+[m[32mRoute::post('/logout', 		['as'=>'logout', 	'uses'=>'MainController@logout'		]); // redirect[m
[32m+[m[32mRoute::post('/feedback',	['as'=>'feedback', 	'uses'=>'MainController@feedback'	]); // redirect with[m[41m [m
[32m+[m[32mRoute::post('/order',		['as'=>'order', 	'uses'=>'MainController@order'		]); // redirect with[m[41m [m
 [m
 [m
 // App::missing(function($exception) {[m
