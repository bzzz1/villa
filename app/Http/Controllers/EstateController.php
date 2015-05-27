<?php namespace App\Http\Controllers;

class EstateController extends Controller {
	public function create_estate() {
		return v();
	}

	public function admin_estates() {
		return v();
	}

	public function estates() {
		return v(); 
	}

	public function estate($estate, $estate_id) {
		return v();
	}

	public function selected() {
		return v();
	}

	public function select_estate($estate_id) {
		return redirect()->back(); // redirect->back(estates) (by session_id);
	}

	public function change_estate($estate_id) {
		return v();
	}

	public function update_estate() {
		$data = Request::all();
		return redirect()->back()->with('message', '');
	}

	public function delete_estate($estate_id) {
		$estate = Estate::find($estate_id);
		$estate->delete();
		return redirect()->back()->with('message', "Объект \"{$estate->title}\" #{$estate->estate_id} удален успешно!");
	}
}