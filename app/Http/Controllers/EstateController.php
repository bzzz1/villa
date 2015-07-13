<?php namespace App\Http\Controllers;

use Estate;
use Request;
use Session;
use Town;
use Image;

// refactor "Объект \"{$estate->title}\" #{$estate->estate_id} удален успешно!"

class EstateController extends Controller {
	public function add_estate() {
		$towns = Town::with('districts')->get();
		return v()->with(compact('towns'));
	}
	
	public function create_estate() {
		$data = Request::all();
		unset($data['_token']);
		$estate = Estate::create($data);
		return redirect()->back()->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} добавлен успешно!");
	}

	public function admin_estates() {
		return v();
	}

	public function estates() {
		$estates_map = Estate::all()->flate();
		return v()-> with(compact('estates_map'));
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
		$estates = Estate::whereIn('estate_id', $selected)->orderBy('price', 'desc')->get();
		return v()->with(compact('estates')); 
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
		$estate->update($data);
		return redirect()->back()->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} изменен успешно!");
	}

	public function delete_estate() {
		$estate_id = Request::input('estate_id');
		$estate = Estate::find($estate_id);
		$estate->delete();
		return redirect()->route('admin_estates')->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} удален успешно!");
	}

	public function upload() {
		$file = Input::file('file');
		$filename = $file->getClientOriginalName();
		$path = 'img/upload';
		return $file->move($path, $filename);
   	 // 	$extension = File::extension($file->getClientOriginalName());
    	// $directory = 'img/profile_pics/'. Auth::user()->username;
    	// $filename =  "profile.".$extension;

    	// $upload_success = Input::file('file')->move($directory, $filename); 
	}

	// public function update_item() {
	// 	$item_id = Input::get('item_id');
	// 	$fields = Input::all();
	// 	$photo = Input::get('photo');
	// 	$old = Input::get('old');

	// 	// createnig and updting
	// 	if ($photo != 'no_photo.png'  && $photo != $old) {
	// 		if ($old != 'no_photo.png') {
	// 			$filepath = HELP::$ITEM_PHOTO_DIR.DIRECTORY_SEPARATOR.$old;
	// 			File::delete($filepath);
	// 			$fields['photo'] = 'no_photo.png';
	// 		}

	// 		$old = HELP::$ITEM_PHOTO_DIR.DIRECTORY_SEPARATOR.$photo;
	// 		$extension = File::extension($old);
	// 		$filename = 'photo_'.time().'.'.$extension;
	// 		$new = HELP::$ITEM_PHOTO_DIR.DIRECTORY_SEPARATOR.$filename;
	// 		rename($old, $new);
	// 		$fields['photo'] = $filename;
	// 	}

	// 	// deleting photo
	// 	if ($photo == 'no_photo.png' && $old != 'no_photo.png') {
	// 		$filepath = HELP::$ITEM_PHOTO_DIR.DIRECTORY_SEPARATOR.$old;
	// 		File::delete($filepath);
	// 		$fields['photo'] = 'no_photo.png';
	// 	}

	// 	if ($validator->fails()) {
	// 		return Redirect::back()->withInput()
	// 			->withErrors('Товар с таким кодом уже существует. Код должен быть уникальным!');
	// 	} else {
	// 		$item = Item::updateOrCreate(['item_id' => $item_id], $fields);
	// 	}

	// 	if ($item_id) {
	// 		$message = 'Товар '.$item->title.' изменен! <a href='.URL::to('/admin/change_item?item_id='.$item->item_id).' class="alert-link">Назад</a>';
	// 		return Redirect::back()->with('message', $message);
	// 	} else {
	// 		$message = 'Товар '.$item->title.' добавлен! <a href='.URL::to('/admin/change_item?item_id='.$item->item_id).' class="alert-link">Назад</a>';
	// 		return Redirect::back()->with('message', $message)->withInput();
	// 	}
	// }

	// public function delete_item() {
	// 	$item = Item::find(Input::get('item_id'));
	// 	if ($item->photo != 'no_photo.png') {
	// 		$filepath = HELP::$ITEM_PHOTO_DIR.DIRECTORY_SEPARATOR.$item->photo;
	// 		File::delete($filepath);
	// 	}

	// 	$contains = Str::contains(URL::previous(), '/admin/change_item');
	// 	if ($contains) {
	// 		return HELP::__delete('Item', 'Товар %s удален!', 'title', '/admin/change_item');
	// 	} else {
	// 		return HELP::__delete('Item', 'Товар %s удален!', 'title', 'back');
	// 	}
	// }
}