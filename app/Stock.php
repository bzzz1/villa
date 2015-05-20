<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Stock extends Model {
	protected $guarded = ['stock_id'];
	protected $primaryKey = 'stock_id';
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
