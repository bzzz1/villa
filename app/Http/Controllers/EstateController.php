<?php namespace App\Http\Controllers;

use Estate;
use Request;
use Session;
use Town;

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
		return v();
	}

	public function ajax_estates($filters='') {
		$take = Request::input('take');
		$page = Request::input('page');
		$sort = Request::input('sort');
		$order = Request::input('order');
		$skip = $take*($page-1);

		// improve max and min for range filters
		// if ('range' == get_filter_type($filter)) {}

		$query = Estate::joined(); // get Illuminate\Database\Eloquent\Builder
		$query = apply_filters($query, $filters); // $query = Filter::apply($query, $filters);
		$query = $query->orderBy($sort, $order);
		$estates = $query->skip($skip)->take($take)->get();

		return response()->json($estates);
	}

	public function estate($estate, $estate_id) {
		return v()->with(compact('estate_id'));
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
		$estate = Estate::find($data['estate_id'])->update($data);
		return redirect()->back()->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} изменен успешно!");
	}

	public function delete_estate() {
		$estate_id = Request::input('estate_id');
		$estate = Estate::find($estate_id);
		$estate->delete();
		return redirect()->route('admin_estates')->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} удален успешно!");
	}
}