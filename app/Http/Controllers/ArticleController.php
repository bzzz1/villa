<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller {
	public function create_article() {
		return v();
	}

	public function admin_articles() {
		return v();
	}

	public function articles() {
		return v();
	}

	public function article($article, $article_id) {
		return v();
	}

	public function change_article($article_id) {
		return v();
	}

	public function update_article() {
		$data = Request::all();
		return redirect()->back()->with('message', '');
	}

	public function delete_article($article_id) {
		$article = Article::find($article_id);
		$article->delete();
		return redirect()->back()->with('message', "Новость \"{$article->title}\" #{$article->article_id} удалена успешно!");
	}
}