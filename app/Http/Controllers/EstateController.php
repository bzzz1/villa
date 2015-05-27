<?php namespace App\Http\Controllers;

class EstateController extends Controller {
	public function create_estate() {
		// create_estate
		return 'create_estate';
	}

	public function admin_estates() {
		// estates (with delete form + change link)
		return 'admin_estates';
	}

	public function estates() {
		// estates (get count(selected))
		return view('estates');
	}

	public function estate($estate, $estate_id) {
		// estate
		return 'estate';
	}

	public function selected() {
		// estates (selected_estates)
		return 'selected';
	}

	public function select_estate($estate_id) {
		// redirect->back(estates) (by session_id)
		return 'select_estate';
	}

	public function update_estate($estate_id) {
		// estate_change++
		return 'update_estate';
	}

	public function delete_estate($estate_id) {
		// redirect->with
		return 'delete_estate';
	}
}