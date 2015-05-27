<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller {
	public function how_to() {
		// how_to
		return 'how_to';
	}
	public function rent_sale() {
		// rent_sale
		return 'rent_sale';
	}
	public function about() {
		// about
		return 'about';
	}
	public function contacts() {
		// contacts
		return 'contacts';
	}
	public function admin() {
		// login or admin
		return 'admin';
	}
}
