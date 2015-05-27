<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DistrictController extends Controller {
	public function create_district() {
		return redirect()->back();
	}

	public function admin_districts() {
		return v();
	}

	public function update_district() {
		$data = Request::all();
		return redirect()->back()->with('message', '');
	}

	public function delete_district($district_id) {
		$district = District::find($district_id);
		$district->delete();
		return redirect()->back()->with('message', "Район \"{$district->district}\" #{$district->district_id} города {$district->town->town} удален успешно!");
	}
}