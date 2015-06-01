<?php namespace App;

use App\BaseModel;

class Image extends BaseModel {
	protected $guarded = ['image_id'];
	protected $primaryKey = 'image_id';
	public $timestamps = false;

	public function estate() {
		return $this->belongsTo('Estate');
	}
}
