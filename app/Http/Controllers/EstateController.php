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
		// filters
		return v();
	}

	public function estates($filters='') {
		return v()->with(compact('filters'));
	}

	public function ajax_estates($filters='') {
		$take = Request::input('take');
		$page = Request::input('page');
		$sort = Request::input('sort');
		$order = Request::input('order');
		$skip = $take*($page-1);

		// $take = '10';
		// $skip = '0';
		// $sort = 'title';
		// $order = 'asc';
		// $filters = 'type=flat&town_id=&district_id=&period=hourly&ho…9500;173000&rooms=2;12&sea_dist=50;750';
		$query = Estate::joined(); // get Illuminate\Database\Eloquent\Builder
		$query = apply_filters($query, $filters); // $query = Filter::apply($query, $filters);
		$query = $query->orderBy($sort, $order);
		$estates = $query->skip($skip)->take($take)->get();

		$extremes = [
			'price_min' 		=> $estates->min('price'),
			'price_max' 		=> $estates->max('price'),
			'sea_dist_min' 		=> $estates->min('sea_dist'),
			'sea_dist_max' 		=> $estates->max('sea_dist'),
			'house_area_min' 	=> $estates->min('house_area'),
			'house_area_max' 	=> $estates->max('house_area'),
			'rooms_min'			=> $estates->min('rooms'),
			'rooms_max'			=> $estates->max('rooms'),
			'yard_area_min'	 	=> $estates->min('yard_area'),
			'yard_area_max' 	=> $estates->max('yard_area'),
		];

		return response()->json([$estates, $extremes]);
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