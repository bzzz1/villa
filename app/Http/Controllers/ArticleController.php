<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller {
	public function create_article() {
		// article_change
		return 'create_article';
	}

	public function admin_articles() {
		// articles (with delete form + change link)
		return 'admin_articles';
	}

	public function articles() {
		// articles
		return 'articles';
	}

	public function article($article, $article_id) {
		// article
		return 'article';
	}

	public function update_article($article_id) {
		// article_change (links)
		return 'update_article';
	}

	public function delete_article($article_id) {
		// redirect->with
		return 'delete_article';
	}
}
