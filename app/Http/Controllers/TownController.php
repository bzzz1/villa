<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Town;

class TownController extends Controller {
	public function create_town() {
		$data = Request::all();
		unset($data['_token']);
		Town::create($data);
		return redirect()->back()->with('message', '');
	}

	public function admin_towns() {
		return v();
	}

	public function update_town() {
		$data = Request::all();
		return redirect()->back()->with('message', '');
	}

	public function delete_town($town_id) {
		$town = Town::find($town_id);
		$town->delete();
		return redirect()->back()->with('message', "Город \"{$town->town}\" #{$town->town_id} удален успешно!");
	}
}