<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Mail;
use Request;

class MainController extends Controller {
	public function how_to() {
		return v();
	}

	public function rent_sale() {
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
		$data = Request::all();
		unset($data['_token']);

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

		Mail::send('emails.feedback', $data, function ($mail) use ($data) {
			$mail->to($data['email'], $data['name'])->subject('Feedback');
		});

		return redirect()->back()->with('message', 'Ваше сообщение доставленно!');
	}

	public function order() {
		$data = Request::all();

		Mail::send('emails.order', $data, function ($mail) use ($data) {
			$mail->to($data['email'], $data['name'])->subject('');
		});

		return redirect()->back()->with('message', 'Заказ оформелн успешно!');
	}
}