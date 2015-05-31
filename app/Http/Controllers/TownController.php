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
		return redirect()->back()->with('message', "Город \"{$town->town}\" #{$town->town_id} добавлен успешно!");
	}

	public function admin_towns() {
		$towns = Town::all();
		return v()->with(compact('towns')); 
	}

	public function update_town() {
		$data = Request::all();
		return redirect()->back()->with('message', "Город \"{$town->town}\" #{$town->town_id} изменен успешно!");
	}

	public function delete_town($town_id) {
		$town = Town::find($town_id);
		$town->delete();
		return redirect()->back()->with('message', "Город \"{$town->town}\" #{$town->town_id} удален успешно!");
	}
}