<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DistrictController extends Controller {
	public function create_district() {
		// popup
		return 'create_district';
	}

	public function admin_districts() {
		// districts
		return 'admin_districts';
	}

	public function update_district($district_id) {
		// popup
		return 'update_district';
	}

	public function delete_district($district_id) {
		// redirect->with
		return 'delete_district';
	}
}
