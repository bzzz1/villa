<?php namespace App\Http\Controllers;

use Estate;
use Request;
// refactor "Объект \"{$estate->title}\" #{$estate->estate_id} удален успешно!"

class EstateController extends Controller {
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
		// get current session id
		// get all selected for current user
		// $ids = [];
		// $estates = Estate::whereIn('estate_id', $ids)->get();
		// return v()->with(compact('estates')); 
	}

	public function select_estate($estate_id) {
		// get current session id
		// add $estate_id to current user $selected attribute
		// refresh page
		return redirect()->back();
	}

	public function update_estate() {
		$data = Request::all();
		unset($data['_token']);
		$estate = Estate::find($data['estate_id'])->update($data);
		return redirect()->back()->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} изменен успешно!");
	}

	public function delete_estate($estate_id) {
		$estate = Estate::find($estate_id);
		$estate->delete();
		return redirect()->back()->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} удален успешно!");
	}
}