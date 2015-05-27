<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use District;

class DistrictController extends Controller {
	public function create_district() {
		$data = Request::all();
		unset($data['_token']);
		District::create($data);
		return redirect()->back()->with('message', "Район \"{$district->district}\" #{$district->district_id} города {$district->town->town} добавлен успешно!");
	}

	public function admin_districts() {
		$districts = District::all();
		return v()->with(compact('districts')); 
	}

	public function update_district() {
		$data = Request::all();
		return redirect()->back()->with('message', "Район \"{$district->district}\" #{$district->district_id} города {$district->town->town} изменен успешно!");
	}

	public function delete_district($district_id) {
		$district = District::find($district_id);
		$district->delete();
		return redirect()->back()->with('message', "Район \"{$district->district}\" #{$district->district_id} города {$district->town->town} удален успешно!");
	}
}