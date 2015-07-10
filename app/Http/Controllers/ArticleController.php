<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Article;

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
		$input = Input::all();
				$rules = array(
				    'file' => 'image|max:3000',
				);

				$validation = Validator::make($input, $rules);

				if ($validation->fails())
				{
					return Response::make($validation->errors->first(), 400);
				}

				$file = Input::file('file');

		        $extension = File::extension($file['name']);
		        $directory = path('public').'uploads/'.sha1(time());
		        $filename = sha1(time().time()).".{$extension}";

		        $upload_success = Input::upload('file', $directory, $filename);

		        if( $upload_success ) {
		        	return Response::json('success', 200);
		        } else {
		        	return Response::json('error', 400);
		        }
			
	}
}