<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller {
	public function how_to() {
		return v();
	}

	public function rent_sale() {
		return v();
	}

	public function about() {
		return v();
	}

	public function contacts() {
		return v();
	}

	public function admin() {
		if (Auth::check()) {
			return v();
		} else {
			 return redirect()->route('login');
		}
	}

	public function login() {
		if (Auth::check()) {
			return redirect()->route('admin');
		} else {
			return v();
		}
	}

	public function logging() {
		$data = [
			'password'	=> Input::get('password'),
			'login' 	=> Input::get('login')
		];

		$pass = Auth::attempt($data, true);
		if ($pass) {
			return redirect()->route('admin');
		} else {
			return redirect()->route('login')->withErrors('Неверный логин или пароль!');
		}
	}

	public function logout() {
		Auth::logout();
		return redirect()->route('login');
	}

	public function feedback() {
		$data = Request::all();
		// send Email
		return redirect()->back()->with('message', '');
	}

	public function order() {
		$data = Request::all();
		// send Email
		return redirect()->back()->with('message', '');
	}
}