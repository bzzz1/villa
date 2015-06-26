<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use District;
use Town;



class DistrictController extends Controller {
	public function create_district() {
		$data = Request::all();
		unset($data['_token']);
		$district = District::create($data);
		return redirect()->back()->with('message', "Район \"{$district->district}\" #{$district->district_id} города {$district->town->town} добавлен успешно!");
	}

	public function admin_districts() {
		$towns = Town::with('districts')->get();
		return v()->with(compact('towns')); 
	}

	public function update_district() {
		$district_id = Request::input('district_id');
		$data = Request::all();
		unset($data['_token']);
		$district = District::with('town')->find($district_id);
		$district->update($data, 'district_id');
		return redirect()->back()->with('message', "Район \"{$district->district}\" #{$district->district_id} города {$district->town->town} изменен успешно!");
	}

	public function delete_district() {
		$district_id = Request::input('district_id');
		$district = District::find($district_id);
		$district->delete();
		return redirect()->back()->with('message', "Район \"{$district->district}\" #{$district->district_id} города {$district->town->town} удален успешно!");
	}
}