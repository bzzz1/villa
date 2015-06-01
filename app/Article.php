<?php namespace App;

use App\BaseModel;

class Article extends BaseModel {
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