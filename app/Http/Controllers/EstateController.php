<?php namespace App\Http\Controllers;

use Estate;
use Request;
use Session;
use Town;
use Image;
use Validator;
use Redirect;
use Input;
use DB;

// refactor "Объект \"{$estate->title}\" #{$estate->estate_id} удален успешно!"

class EstateController extends Controller {
	public function add_estate() {
		$towns = Town::with('districts')->get();
		return v()->with(compact('towns'));
	}
	
	
	public function create_estate() {
		$data = Request::all();
		unset($data['_token']);
	 	$file = array('preview' => Input::file('preview'));
	    $destinationPath =  public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'photos'.DIRECTORY_SEPARATOR.'estates'; // upload path
     	if ($_FILES['preview']['tmp_name']) {    
	     	$extension = Input::file('preview')->getClientOriginalExtension();
	     	$fileName = rand(111111,999999).'.'.$extension; // renameing image
	     	Input::file('preview')->move($destinationPath, $fileName); 
	     	$data['preview'] = $fileName;
	     	$estate = Estate::create($data);
			return redirect()->back()->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} добавлен успешно!");
     	}
     	else {
	     	$data['preview'] = 'alien.png';
			$estate = Estate::create($data);
			return redirect()->back()->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} добавлен успешно!");	
     	}
	}

	public function admin_estates() {
		return v();
	}

	public function estates() {
		$estates_map = Estate::all()->flate();
		return v()->with(compact('estates'));
	}

	public function ajax_estates($filters='') {
		$take = Request::input('take');
		$page = Request::input('page');
		$sort = Request::input('sort');
		$order = Request::input('order');
		$skip = $take * ($page-1);

		// improve max and min for range filters
		// if ('range' == get_filter_type($filter)) {}

		// $previews = array();
		// $previews_row = Image::where('preview', 1)-> get() -> flate();
		// foreach ($estates as $estate) {
		// 	foreach ($previews_row as $preview) {
		// 		if ($preview->estate_id = $estate->estate_id) {
		// 			$estates = array_add($preview);
		// 		};
		// 	};
		// };

//		$users = DB::table('estates')->get();

		$query = Estate::joined(); // get Illuminate\Database\Eloquent\Builder
		$query = apply_filters($query, $filters); // $query = Filter::apply($query, $filters)
		$query = $query->orderBy($sort, $order);
		$estates = $query->get();
		// $estates = $query->skip($skip)->take($take)->get();
		// $estates = $query->join('images', 'estates.estate_id', '=', 'images.estate_id')->get();
		return response()->json($estates);
	}

	public function estate($estate, $estate_id) {
		$images = Image::where('estate_id', $estate_id)->get();
		return v()->with(compact(array(
									'estate_id',
									'images'
									)));
	}

	public function change_estate($estate_id) {
		return v()->with(compact('estate_id'));
	}

	public function selected() {
		$selected = array();

		$jsonFavoritesIds = $_COOKIE['favorites'];
		$decodedFavoritesIds = json_decode($jsonFavoritesIds);
		$ids = implode(', ', $decodedFavoritesIds);

		$estates = DB::select("SELECT * FROM `estates` WHERE `estate_id` IN ({$ids});");
		foreach ($estates as $estate) {
			$selected[] = $estate;
		}

//		print_r($selected);
//		$result = json_encode($result);
		//print_r(compact(array('z')));
		//return response()->json($result);
//		return v()->with(compact('selected'));

		return view('estates')->with(compact('selected'));
	}

	public function ajax_selected() {
		$result = array();
		
		$jsonFavoritesIds = $_COOKIE['favorites'];
		if ($jsonFavoritesIds) {
			$decodedFavoritesIds = json_decode($jsonFavoritesIds);
			$ids = implode(', ', $decodedFavoritesIds);
			$estates = DB::select("SELECT * FROM `estates` WHERE `estate_id` IN ( {$ids} );");
			foreach ($estates as $estate) {
				$result[] = $estate;
			}
		} 
		else {
			$result = array();
		}


		return response()->json($result);
	}

	public function ajax_select_estate($estate_id) {
		return $estate_id;
		if (Session::has('selected')) {
			$selected = Session::get('selected');
			if (! in_array($estate_id, $selected)) {
				$selected[] = $estate_id;
			} else {
				array_diff($selected, [$estate_id]);
			}
		} else {
			$selected[] = $estate_id;
		}

 		Session::put('selected', $selected);
 		return response()->json(['selected']);
	}

	public function update_estate() {
		$data = Request::all();
		unset($data['_token']);
		unset($data['old_img']);
		$estate = Estate::find($data['estate_id']);
	 	$file = array('preview' => Input::file('preview'));
	 	$old_img = Input::get('old_img');
	    $destinationPath =  public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'photos'.DIRECTORY_SEPARATOR.'estates'; // upload path
     	if ($_FILES['preview']['tmp_name']) {    
	     	$extension = Input::file('preview')->getClientOriginalExtension();
	     	$fileName = rand(111111,999999).'.'.$extension; // renameing image
	     	Input::file('preview')->move($destinationPath, $fileName); 
	     	$data['preview'] = $fileName;
	     	$estate->update($data);
			return redirect()->back()->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} изменен успешно!");	
      	}
      	else {
      		if ($old_img !== 'alien.png') {
	     		$data['preview'] = $old_img;
	     	}
	     	else {
		     	$data['preview'] = 'alien.png';
	     	}
			$estate->update($data);
			return redirect()->back()->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} изменен успешно!");	
     	}
	}

	public function delete_estate() {
		$estate_id = Request::input('estate_id');
		$estate = Estate::find($estate_id);
		$estate->delete();
		return redirect()->route('admin_estates')->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} удален успешно!");
	}
	
    public function mult_upload() {
		$data = Request::all();
		unset($data['_token']);
		$estate_id = Request::input('estate_id');
	    $destinationPath =  public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'photos'.DIRECTORY_SEPARATOR.'estates'.DIRECTORY_SEPARATOR; // upload path
	    for ($i = 0; $i < count($_FILES['images']['name']); $i++) {
			
			// $files = [];
			$file = array('image' => ($_FILES['images']['name'][$i]));
			// array_push($files, $file);
		    if ($_FILES['images']['tmp_name']) {    
		     	$extension = Input::file('images')[$i]->getClientOriginalExtension();
		     	$fileName = rand(11111111111,9999999999).'.'.$extension; // renameing image
		     	Input::file('images')[$i]->move($destinationPath, $fileName); 
		     	$data['images'][$i] = $fileName;
		     	$image = Image::create( ['image' => $data['images'][$i], 'estate_id' => $estate_id, 'preview' => 0]);
		     	// print_r($image);
		    }
	      	else {
		     	$data['image'][$i] = 'alien.png';
		     	$image = Image::create( ['image' => $data['images'][$i], 'estate_id' => $estate_id, 'preview' => 0]);
				// $image = Image::create($data, $estate);
	     	}
	    };
		return redirect()->back()->with('message', "Картинка загружина успешно!");	
		

    }

	// 	$allowed = array('png', 'jpg', 'gif','zip');
	// 	$destinationPath =  public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'upload'.DIRECTORY_SEPARATOR; // upload path
	// 	if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
	// 		$extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
	// 		if(!in_array(strtolower($extension), $allowed)){
	// 			echo '{"status":"error"}';
	// 			exit;
	// 		}

	// 		if(move_uploaded_file($_FILES['image']['tmp_name'],$destinationPath.$_FILES['image']['name'])){
	// 			echo '{"status":"success"}';
	// 			$estate_id = Request::input('estate_id');
	// 			$image = Estate::find($estate_id);

	// 		}
	// 	}
	// 	// $data = Request::all();
	// 	// unset($data['_token']);
	//  // 	$file = array('image' => Input::file('image'));
	//  //    $destinationPath =  public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'photos'.DIRECTORY_SEPARATOR.'estates'; // upload path
 //  //    	if ($_FILES['image']['tmp_name']) {    
	//  //     	$extension = Input::file('image')->getClientOriginalExtension();
	//  //     	$fileName = rand(111111,999999).'.'.$extension; // renameing image
	//  //     	Input::file('image')->move($destinationPath, $fileName); 
	//  //     	$data['image'] = $fileName;
	//  //     	$image = Image::create($data);
	// 	// 	return redirect()->back()->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} изменен успешно!");	
 //  //     	}
 //  //     	else {
	//  //     	$data['image'] = 'alien.png';
	// 	// 	$image = Image::create($data);
	// 	// 	return redirect()->back()->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} изменен успешно!");	
 //  //    	}
	// 	// $extension = Input::file('image')->getClientOriginalExtension();
	//  //     	$fileName = rand(111111,999999).'.'.$extension; // renameing image
	//  //     	Input::file('image')->move($destinationPath, $fileName); 
	//  //     	$data['image'] = $fileName;
	// 	exit;
	// 	echo '{"status":"error"}';
	// }

	// // 	unset($data['_token']);
	// // 	$file = Input::file('file');
	// // 	$destinationPath =  public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'photos'.DIRECTORY_SEPARATOR.'estates'; // upload path
	// // 	$extension = Input::file('file')->getClientOriginalExtension();
	// // 	$fileName = rand(111111,999999).'.'.$extension; // renameing image
	// // 	$upload_success = Input::file('file')->move($destinationPath, $filename);

	// // 	if( $upload_success ) {
	// // 	   return Response::json('success', 200);
	// // 	} else {
	// // 	   return Response::json('error', 400);
	// // 	}
	// // 	// $filename = $file->getClientOriginalName();
	// // 	// $path = 'img/upload/estates/';		// return $file->move($path, $filename);
	// // 	// $file = Input::file('file');
	// // 	// $extension = File::extension($file->getClientOriginalName());
	// // 	// $directory = 'img/photos/estates/'. Auth::user()->username;	
	// // }


	// 		// $data = Request::all();
	// 		// unset($data['_token']);
	// 	 // 	$file = array('preview' => Input::file('preview'));
	// 	 //    $destinationPath =  public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'photos'.DIRECTORY_SEPARATOR.'estates'; // upload path
	//   //    	if ($_FILES['preview']['tmp_name']) {    
	// 	 //     	$extension = Input::file('preview')->getClientOriginalExtension();
	// 	 //     	$fileName = rand(111111,999999).'.'.$extension; // renameing image
	// 	 //     	Input::file('preview')->move($destinationPath, $fileName); 
	// 	 //     	$data['preview'] = $fileName;
	// 	 //     	$estate = Estate::create($data);
	// 		// 	return redirect()->back()->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} добавлен успешно!");
	//   //    	}
	//   //    	else {
	// 	 //     	$data['preview'] = 'alien.png';
	// 		// 	$estate = Estate::create($data);
	// 		// 	return redirect()->back()->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} добавлен успешно!");	
	//   //    	}
}
