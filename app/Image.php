<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {
	protected $guarded = ['image_id'];
	protected $primaryKey = 'image_id';
	public $timestamps = false;
}
