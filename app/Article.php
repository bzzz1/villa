<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {
	protected $guarded = [];
	protected $primaryKey = 'article_id';
	public $timestamps = false;

	// treat time column as Carbon instance
	protected $dates = ['added_on'];

	public function setTimeAttribute($date) {
		$this->attributes['added_on'] = Carbon::parse($date);
	}

	public function getTimeAttribute($date) {
		return new Carbon($date);
	} 
}