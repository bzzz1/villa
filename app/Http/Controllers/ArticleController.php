<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Article;
use Input;

class ArticleController extends Controller {
	public function add_article() {
		return v();
	}
	
	public function create_article() {
		$data = Request::all();
		unset($data['_token']);
		$article = Article::create($data);
		return redirect()->back()->with('message', "Новость \"{$article->title}\" #{$article->article_id} добавлена успешно!");
	}

	public function admin_articles() {
		// ??? use view composer ???
		$articles = Article::all();
		return v()->with(compact('articles'));
	}

	public function articles() {
		// ??? use view composer ???
		$articles = Article::all();
		return v()->with(compact('articles'));
	}

	public function article($article, $article_id) {
		// ??? use view composer ???
		$article = Article::find($article_id);
		return v()->with(compact('article'));
	}

	public function change_article($article_id) {
		// ??? use view composer ???
		$article = Article::find($article_id);
		return v()->with(compact('article'));
	}

	public function update_article() {
		$data = Request::all();
		unset($data['_token']);
		$article = Article::find($data['article_id']);
		$article->update($data);
		return redirect()->back()->with('message', "Новость \"{$article->title}\" #{$article->article_id} изменена успешно!");
	}

	public function delete_article() {
		$article_id = Request::input('article_id');
		$article = Article::find($article_id);
		$article->delete();
		return redirect()->back()->with('message', "Новость \"{$article->title}\" #{$article->article_id} удалена успешно!");
	}

	public function upload() {
		$allowed = array('png', 'jpg', 'gif','zip');
		$destinationPath =  public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'upload'.DIRECTORY_SEPARATOR; // upload path
		if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){

			$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);

			if(!in_array(strtolower($extension), $allowed)){
				echo '{"status":"error"}';
				exit;
			}

			if(move_uploaded_file($_FILES['upl']['tmp_name'], $destinationPath.$_FILES['upl']['name'])){
				echo '{"status":"success"}';
				exit;
			}
		}

		echo '{"status":"error"}';
		exit;
		$file = Input::file('file');
		$destinationPath =  public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'photos'.DIRECTORY_SEPARATOR.'estates'; // upload path
		$extension = Input::file('file')->getClientOriginalExtension();
		$fileName = rand(111111,999999).'.'.$extension; // renameing image
		$upload_success = Input::file('file')->move($destinationPath, $filename);

		if( $upload_success ) {
		   return Response::json('success', 200);
		} else {
		   return Response::json('error', 400);
		}
	}
}