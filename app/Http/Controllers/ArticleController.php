<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Redirect;
use Article;
use Input;


class ArticleController extends Controller {
	public function add_article() {
		return v();
	}
	
	public function create_article() {
		$data = Request::all();
		unset($data['_token']);
		$file = array('preview' => Input::file('preview'));
	    $destinationPath =  public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'photos'.DIRECTORY_SEPARATOR.'articles'; // upload path
     	if ($_FILES['preview']['tmp_name']) {    
	     	$extension = Input::file('preview')->getClientOriginalExtension();
	     	$fileName = rand(1111111111,999999999).'.'.$extension; // renameing image
	     	Input::file('preview')->move($destinationPath, $fileName); 
	     	$data['preview'] = $fileName;
			$article = Article::create($data);
			return redirect()->back()->with('message', "Новость \"{$article->title}\" #{$article->article_id} добавлена успешно!");
		}
		else {
			$data['preview'] = 'alien.png';
			$article = Article::create($data);
			return redirect()->back()->with('message', "Новость \"{$article->title}\" #{$article->article_id} добавлена успешно!");
		}
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
		$file = array('preview' => Input::file('preview'));
	    $destinationPath =  public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'photos'.DIRECTORY_SEPARATOR.'articles'; // upload path
     	if ($_FILES['preview']['tmp_name']) {    
	     	$extension = Input::file('preview')->getClientOriginalExtension();
	     	$fileName = rand(1111111111,999999999).'.'.$extension; // renameing image
	     	Input::file('preview')->move($destinationPath, $fileName); 
	     	$data['preview'] = $fileName;
			$article->update($data);
			return redirect()->back()->with('message', "Новость \"{$article->title}\" #{$article->article_id} изменена успешно!");
		}
		else {
			$data['preview'] = 'alien.png';
			$article->update($data);
			return redirect()->back()->with('message', "Новость \"{$article->title}\" #{$article->article_id} изменена успешно!");
		}
	}

	public function delete_article() {
		$article_id = Request::input('article_id');
		$article = Article::find($article_id);
		$article->delete();
		return redirect()->back()->with('message', "Новость \"{$article->title}\" #{$article->article_id} удалена успешно!");
	}
}