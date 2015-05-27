<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TownController extends Controller {
	public function create_town() {
		// popup
		return 'create_town';
	}

	public function admin_towns() {
		// towns
		return 'admin_towns';
	}

	public function update_town($town_id) {
		// popup
		return 'update_town';
	}

	public function delete_town($town_id) {
		// redirect->with
		return 'delete_town';
	}
}
