<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Price extends Model {
	protected $guarded = ['price_id'];
	protected $primaryKey = 'price_id';
	public $timestamps = false;

	// treat time column as Carbon instance
	protected $dates = ['date'];

	public function setTimeAttribute($date) {
		$this->attributes['date'] = Carbon::parse($date);
	}

	public function getTimeAttribute($date) {
		return new Carbon($date);
	}
}
