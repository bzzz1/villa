<?php namespace App\Http\Controllers;

use Estate;
use Request;
use Session;
use Town;
use Image;
use Validator;
use Redirect;
use Input;

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
		$skip = $take*($page-1);

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


		$query = Estate::joined(); // get Illuminate\Database\Eloquent\Builder
		$query = apply_filters($query, $filters); // $query = Filter::apply($query, $filters);
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
		$selected = Session::get('selected');
		if ($selected == null) {
			$estates = ['a'=>'a'];
		} else {
			$estates = Estate::whereIn('estate_id', $selected)->get();
		}

		return v()->with(compact(array(
			'estates',
			'selected'))); 
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
 		return response()->json([]);
	}

	public function update_estate() {
		$data = Request::all();
		unset($data['_token']);
		$estate = Estate::find($data['estate_id']);
	 	$file = array('preview' => Input::file('preview'));
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
	     	$data['preview'] = 'alien.png';
			$estate->update($data);
			return redirect()->back()->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} изменен успешно!");	
     	}
	}



	// 	unset($data['_token']);
	// 	$estate = Estate::find($data['estate_id']);
	//   	$file = array('preview' => Input::file('preview'));
	//   	if (!empty($file)) {    
 //      		$extension = Input::file('preview')->getClientOriginalExtension();
 //      		$fileName = rand(11111,99999).'.'.$extension; // renameing image
 //      		Input::file('preview')->move($destinationPath, $fileName); 
 //      		$estate = Estate::create($data);
	// 		return redirect()->back()->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} добавлен успешно!");
 //      	}
 //      	else {
 //      		$estate->update($data);
	// 		return redirect()->back()->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} изменен успешно!");
 //      	}
	// }

	public function delete_estate() {
		$estate_id = Request::input('estate_id');
		$estate = Estate::find($estate_id);
		$estate->delete();
		return redirect()->route('admin_estates')->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} удален успешно!");
	}


	public function upload() {
		unset($data['_token']);
		$file = Input::file('file');
		$destinationPath =  public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'photos'.DIRECTORY_SEPARATOR.'estates'; // upload path
		$extension = Input::file('preview')->getClientOriginalExtension();
		$fileName = rand(111111,999999).'.'.$extension; // renameing image
		$upload_success = Input::file('file')->move($destinationPath, $filename);

		if( $upload_success ) {
		   return Response::json('success', 200);
		} else {
		   return Response::json('error', 400);
		}
		// $filename = $file->getClientOriginalName();
		// $path = 'img/upload/estates/';		// return $file->move($path, $filename);
		// $file = Input::file('file');
		// $extension = File::extension($file->getClientOriginalName());
		// $directory = 'img/photos/estates/'. Auth::user()->username;	
	}


			// $data = Request::all();
			// unset($data['_token']);
		 // 	$file = array('preview' => Input::file('preview'));
		 //    $destinationPath =  public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'photos'.DIRECTORY_SEPARATOR.'estates'; // upload path
	  //    	if ($_FILES['preview']['tmp_name']) {    
		 //     	$extension = Input::file('preview')->getClientOriginalExtension();
		 //     	$fileName = rand(111111,999999).'.'.$extension; // renameing image
		 //     	Input::file('preview')->move($destinationPath, $fileName); 
		 //     	$data['preview'] = $fileName;
		 //     	$estate = Estate::create($data);
			// 	return redirect()->back()->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} добавлен успешно!");
	  //    	}
	  //    	else {
		 //     	$data['preview'] = 'alien.png';
			// 	$estate = Estate::create($data);
			// 	return redirect()->back()->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} добавлен успешно!");	
	  //    	}
}
// 	public function upload() {
// 		unset($data['_token']);
// 		$file = array('preview' => Input::file('preview'));
// 		$destinationPath =  public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'photos'.DIRECTORY_SEPARATOR.'estates'; // upload path
// 		$extension = Input::file('preview')->getClientOriginalExtension();
// 		$fileName = rand(111111,999999).'.'.$extension; // renameing image
// 		$upload_success = Input::file('file')->move($destinationPath, $filename);

// 		if( $upload_success ) {
// 		   return Response::json('success', 200);
// 		} else {
// 		   return Response::json('error', 400);
// 		}
// 		// $filename = $file->getClientOriginalName();
// 		// $path = 'img/upload/estates/';
// 		// return $file->move($path, $filename);
//   //  		$file = Input::file('file');
//   //  	 	$extension = File::extension($file->getClientOriginalName());
//   //   	$directory = 'img/photos/estates/'. Auth::user()->username;	
// 	}
// // }
// 	  //    	}
