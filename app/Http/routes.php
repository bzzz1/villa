<?php

// ESTATE
/*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
Route::get('/admin/add_estate', 				['as'=>'add_estate', 	'uses'=>'EstateController@add_estate', 'middleware'=>'auth']); // add_estate
Route::post('/admin/create_estate', 			['as'=>'create_estate', 'uses'=>'EstateController@create_estate', 'middleware'=>'auth']); // redirect
Route::get('/admin/estates', 					['as'=>'admin_estates', 'uses'=>'EstateController@admin_estates', 'middleware'=>'auth']); // estates (with delete form + change link)
Route::get('/ajax/{filters?}',					['as'=>'ajax_estates',  'uses'=>'EstateController@ajax_estates']); // ajax
Route::get('/', 								['as'=>'estates', 		'uses'=>'EstateController@estates']); // estates (get count(selected))
Route::get('/estates/{estate}/{estate_id}',		['as'=>'estate', 		'uses'=>'EstateController@estate']); // estate
Route::get('/selected', 						['as'=>'selected', 		'uses'=>'EstateController@selected']); // estates (selected_estates)
Route::post('/select_estate/{estate_id}', 		['as'=>'select_estate', 'uses'=>'EstateController@select_estate']); // redirect->back(estates) (by session_id)
Route::get('/admin/change_estate/{estate_id}', 	['as'=>'change_estate', 'uses'=>'EstateController@change_estate', 'middleware'=>'auth']); // estate_change++
Route::post('/admin/update_estate', 			['as'=>'update_estate', 'uses'=>'EstateController@update_estate', 'middleware'=>'auth']); // redirect
Route::post('/admin/delete_estate/{estate_id}', ['as'=>'delete_estate', 'uses'=>'EstateController@delete_estate', 'middleware'=>'auth']); // redirect->with

// ARTICLE
/*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
Route::post('/admin/add_article',					['as'=>'add_article', 	'uses'=>'ArticleController@add_article', 'middleware'=>'auth']); // redirect
Route::post('/admin/cretate_article',				['as'=>'create_article', 'uses'=>'ArticleController@create_article', 'middleware'=>'auth']); // redirect
Route::get('/admin/articles', 						['as'=>'admin_articles', 'uses'=>'ArticleController@admin_articles', 'middleware'=>'auth']); // articles (with delete form + change link)
Route::get('/articles', 							['as'=>'articles', 		 'uses'=>'ArticleController@articles']); // articles
Route::get('/articles/{article}/{article_id}', 		['as'=>'article', 		 'uses'=>'ArticleController@article']); // article
Route::post('/admin/change_article/{article_id}', 	['as'=>'change_article', 'uses'=>'ArticleController@change_article', 'middleware'=>'auth']); // article_change (links)
Route::post('/admin/update_article', 				['as'=>'update_article', 'uses'=>'ArticleController@update_article', 'middleware'=>'auth']); // redirect
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
Route::get('/contacts',  	['as'=>'contacts', 	'uses'=>'MainController@contacts']); // contacts

// INTERACTION
/*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
Route::get('/admin', 		['as'=>'admin', 	'uses'=>'MainController@admin']); // admin
Route::get('/login', 		['as'=>'login', 	'uses'=>'MainController@login']); // login
Route::post('/logging', 	['as'=>'logging', 	'uses'=>'MainController@logging']); // redirect
Route::post('/logout', 		['as'=>'logout', 	'uses'=>'MainController@logout']); // redirect
Route::post('/feedback',	['as'=>'feedback', 	'uses'=>'MainController@feedback']); // redirect with 
Route::post('/order',		['as'=>'order', 	'uses'=>'MainController@order']); // redirect with 


// App::missing(function($exception) {
// 	return Redirect::to('/');
// });

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

// Cache::forget('33b4a8c80e9d594752509c6624476a22');
// Cache::flush();

/*------------------------------------------------
| FFMPER ROUTES
------------------------------------------------*/
// ini_get()
// Cache::forget('33b4a8c80e9d594752509c6624476a22');
// Cache::flush();

// https://vk.com/feelingofsex?z=photo-73893816_367687823%2Falbum-73893816_00%2Frev

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);


// function get_seconds($time='00:00:00', $print=false) {
// 	$time = Carbon::parse($time);
// 	$hour = $time->hour;
// 	$minute = $time->minute;
// 	$second = $time->second;

// 	if ($print) {
// 		// return $time->format('h-m-s'); // 2:05 instead of 2:02
// 		return sprintf("%'02d", $hour).'-'.sprintf("%'02d", $minute).'-'.sprintf("%'02d", $second);
// 	} else {
// 		return $hour*3600+$minute*60+$second;
// 	}
// }

/*------------------------------------------------
| VK
------------------------------------------------*/
// $url = 'https://vk.com/login?act=mobile&hash=bacf92dc35aaaa21';

// $url_post = "https://login.vk.com/?act=login";
// $jar = new GuzzleHttp\Cookie\CookieJar;
// $client = new GuzzleHttp\Client();
// $client->setDefaultOption('verify', 'cacert.pem');
// // $client->setDefaultOption('verify', false);
// $form_data = [
// 	'act'			=> 'login',
// 	'role'			=> 'al_frame',
// 	'expire'		=> '',
// 	'captcha_sid'	=> '',
// 	'captcha_key'	=> '',
// 	'_origin'		=> 'https://vk.com',
// 	'ip_h'			=> '276aa74b0f17014d7b',
// 	'email' 		=> '+380999040348',
// 	'pass'			=> 'aspirineaspirine',
// ];

// $response = $client->post($url_post, ['body'=>$form_data, 'cookies'=>$jar]);
// $body = $response->getBody();
// File::put('vk.html', $body);

/*------------------------------------------------
| GET SINGLE PHOTO PAGE
------------------------------------------------*/

// $guzzle = new GuzzleHttp\Client();
// $guzzle->setDefaultOption('verify', 'cacert.pem');

// $client = new Goutte\Client();
// $client->setClient($guzzle);

// $url = 'https://vk.com/art_energy?z=photo-29644119_358435054%2Falbum-29644119_00%2Frev';
// $crawler = $client->request('GET', $url); 
// $src = $crawler->filter('.ph_img')->attr('src');
// $href = $crawler->filter('.thumb_item')->attr('href');
/*----------------------------------------------*/

// https://regex101.com/

/*------------------------------------------------
| GET 10 LINKS
------------------------------------------------*/
// function get_images($album, $count) {
// 	$links = [];
// 	$client = new GuzzleHttp\Client();
// 	$url_post = 'https://vk.com/al_photos.php';

// 	for ($i=0; $i<$count; $i=$i+10) {
// 		$form_data = ["list"=>$album, "act"=>"show", "al"=>"1", "direction"=>"1", "offset"=>$i];
// 		$response = $client->post($url_post, ['body'=>$form_data]);
// 		$body = $response->getBody();
// 		$filename = 'al_photos.php';
// 		File::put($filename, $body);
// 		$contents = File::get($filename);
// 		preg_match_all('/"x_src":"(.*?)\"/', $contents, $matches);
// 		foreach($matches[1] as $match) {
// 			$links[] = stripslashes($match);
// 		}
// 	}

// 	return $links;
// }
/*----------------------------------------------*/

/*------------------------------------------------
| FFMPEG
------------------------------------------------*/
// $ffmpeg = FFMpeg\FFMpeg::create([
//     'ffmpeg.binaries'  => 'E:\\Program Files\\ffmpeg\\bin\\ffmpeg.exe',
//     'ffprobe.binaries' => 'E:\\Program Files\\ffmpeg\\bin\\ffprobe.exe',
//     'timeout'          => 3600, // The timeout for the underlying process
//     'ffmpeg.threads'   => 12,   // The number of threads that FFMpeg should use
// ]);

// // $path = 'E:\\X-Files\\Courses\\vids\\sex_party.mp4';
// // $path = 'http://www.hdzog.com/get_file/1/7ed8cf2a850c93bdd2ae8c4c1d2f3d95/1000/1980/1980.mp4';
// // $path = urldecode('http%3A%2F%2Fwww.hdzog.com%2Fget_file%2F1%2F7e7d31de7749aaef7f894d4fbeac7a99%2F1000%2F1655%2F1655.mp4');
// $path = urldecode('http%3A%2F%2Fwww.hdzog.com%2Fget_file%2F1%2F7ed8cf2a850c93bdd2ae8c4c1d2f3d95%2F1000%2F1980%2F1980.mp4');
// $vid = $ffmpeg->open($path);

// $time = '00:02:02';
// $frame = $vid->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(get_seconds($time)));

// $title = get_seconds($time, true);
// $frame->save("{$title}.jpg");
/*----------------------------------------------*/

/*------------------------------------------------
| FFPROBE
------------------------------------------------*/
// $ffprobe = FFMpeg\FFProbe::create([
//     'ffprobe.binaries' => 'E:\\Program Files\\ffmpeg\\bin\\ffprobe.exe',
// ]);

// $path = 'http://www.hdzog.com/get_file/1/7ed8cf2a850c93bdd2ae8c4c1d2f3d95/1000/1980/1980.mp4';
// $duration = $ffprobe->format($path)->get('duration');
// $ffprobe->streams($path)->videos()->first()->get('codec_name');
/*----------------------------------------------*/

/*------------------------------------------------
| MANDRILL AUTH ERORR
------------------------------------------------*/
// $test_key = 'km_WR2OZpBvqgxTs7tXdOQ';
// $mandrill = new Mandrill($test_key);
// $mandrill->users->info();
/*----------------------------------------------*/

// function send_mail() {
// 	return Mail::send('emails/test', [], function($message) {
// 		$message->from('me@mailgun.org', 'Laravel');
// 		$message->to('beststrelok@gmail.com', 'Yaroslav Zdanovskiy')->subject('Mailgun');

// 		// $message->attach($pathToFile);
// 		// $message->attach($pathToFile, ['as' => $display, 'mime' => $mime]);
// 		// <img src="{{ $message->embed($pathToFile) }}">
// 		// <img src="{{ $message->embedData($data, $name) }}">
// 	});
// }

/*------------------------------------------------
| FILTERS
------------------------------------------------*/
function filters() {
	// Filter Class
	// $this->query = Estate::joined();
	// public function __construct() {
	// 	$this->boot();
	// }
	// private $extremes
	// private $filter_types

	// TODO
	// return rent/sale default
	// trim first &
	// extract Estate->join to method on Estate joined()
	// update seed period =  ['hourly', 'daily', 'monthly']
	
	// NOW
	// create relations for dependencies
	// get $extremes from $filter_types
	
	// ELOQUENT
	// create town relation for estate for $relation='town' to work
	// ->hasMany('Bundle', 'parent_item_id', 'item_id')->join('items', 'bundle.child_item_id','=', 'items.item_id')
	
	// REFACTOR
	// extract all to service provider FilterServiceProvider $query = Filter::apply('Estate', $filters)
	// cretate custom Pagination
	// read API for Pagination http://laravel.com/api/5.0/Illuminate/Database/Eloquent/Builder.html

	// return $extremes = [
	// 	'price_min' 		=> Estate::min('price'),
	// 	'price_max' 		=> Estate::max('price'),
	// 	'sea_dist_min' 		=> Estate::min('sea_dist'),
	// 	'sea_dist_max' 		=> Estate::max('sea_dist'),
	// 	'house_area_min' 	=> Estate::min('house_area'),
	// 	'house_area_max' 	=> Estate::max('house_area'),
	// 	'rooms_min'			=> Estate::min('rooms'),
	// 	'rooms_max'			=> Estate::max('rooms'),
	// 	'yard_area_min'	 	=> Estate::min('yard_area'),
	// 	'yard_area_max' 	=> Estate::max('yard_area'),
	// ];

	// js_filters_form

	// js_select_town
	// js_select_district
	// js_select_type
	// js_select_period
	// js_range_house_area_from
	// js_range_house_area_to
	// js_range_yard_area_from
	// js_range_yard_area_to
	// js_range_price_from
	// js_range_price_to

	// js_range_sea_dist_from
	// js_range_rooms_from

	$take = 10;
	$sort = 'title';
	$order = 'asc';
	$filters = 'house_area=120;380&district_id=2&town_id=3&pool=bool&producer=[asus;acer;lenovo;toshiba;sony]&price=10000;160000&yard_area=100;800&commercial=rent&period=daily&type=cottage&rooms=3;7';

	// $query = Estate::join('districts', 'estates.district_id', '=', 'districts.district_id')->join('towns', 'towns.town_id', '=', 'districts.town_id'); // get Illuminate\Database\Eloquent\Builder
	$query = Estate::joined(); // get Illuminate\Database\Eloquent\Builder
	$query = apply_filters($query, $filters); // $query = Filter::apply($query, $filters);
	$query = $query->orderBy($sort, $order);
	try {
		$estates = $query->skip($skip)->take($take)->get();
	} catch (Exception $e) {
		return redirect()->back();
	}
}
/*------------------------------------------------
| FRONTEND
------------------------------------------------*/
// href='{{ filter('type', 'cottage') }}' // or Filter::make()
// href='{{ filter('producer', '[asus]') }}'
// href='{{ filter('pool', 'bool') }}'
// href='{{ filter('price', '10000;160000') }}'
/*----------------------------------------------*/
function filter($filter, $value, $filters='') {
	parse_str($filters, $filters);

	// resetting dependencies
	// if ('type'==$filter or 'commercial'==$filter) {
	// 	$filters = reset_dependencies($filters);
	// }

	$type = detect_filter_type($value);

	if ('check'==$type) {
		$is_on = array_key_exists($filter, $filters);
		unset($filters[$filter]);
		$filter_query = implode_assoc('&', $filters);
		if ($is_on) {
			return $filter_query;
		} else {
			return $filter_query."&{$filter}={$value}";
		}
	} else if ('list'==$type) {
		// $filters[$filter] = [asus;acer;lenovo;toshiba;sony];
		// $value 			 = [asus]
		// $result 			 = [acer;lenovo;toshiba;sony]
		$value = trim($value, '[]');
		$old_filter = trim($filters[$filter], '[]');
		$items = explode(';', $old_filter);

		$is_on = in_array($value, $items);
		$clear_filter = array_values(array_diff($items,[$value]));
		$clear_filter_str = implode(';', $clear_filter);

		unset($filters[$filter]);
		$filter_query = implode_assoc('&', $filters);
		if ($is_on) {
			return $filter_query."&{$filter}=[{$clear_filter_str}]";
		} else {
			return $filter_query."&{$filter}=[{$clear_filter_str};{$value}]";
		}
	} else if ('range'==$type) {
		unset($filters[$filter]);
		$filter_query = implode_assoc('&', $filters);
		return $filter_query."&{$filter}={$value}";
	} else if ('type'==$type) { 
		$is_on = (array_key_exists($filter, $filters) and ($filters[$filter] == $value)); // important parenthesis
		unset($filters[$filter]);
		$filter_query = implode_assoc('&', $filters);
		if ($is_on) {
			return $filter_query;
		} else {
			return $filter_query."&{$filter}={$value}";
		}
	}
}

function implode_assoc($glue, $array) {
	return implode('&', array_map(function($v, $k) { return $k.'='.$v; }, $array, array_keys($array)));
}

