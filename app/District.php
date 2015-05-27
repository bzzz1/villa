<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model {
	protected $guarded = ['district_id'];
	protected $primaryKey = 'district_id';
	public $timestamps = false;

	public function town() {
		return $this->belongsTo('Town');
	}

	public function estates() {
		return $this->hasMany('Estate');
	}

	// public static function boot() {
	// 	parent::boot();

	// 	Item::deleting(function($item) {
	// 		$item->pdfs()->detach();
	// 	});
	// }


	// public function producer() {
	// 	return $this->hasOne('Producer', 'producer_id', 'producer_id');
	// 	// return $this->hasOne('Producer', 'producer_id', 'producer_id')->select(['producer']);
	// }

	// public function subcat() {
	// 	return $this->hasOne('Subcat', 'subcat_id', 'subcat_id');
	// }

	// public static function __items() {
	// 	return (new Item)->join('subcats', 'subcats.subcat_id', '=', 'items.subcat_id')->join('producers', 'items.producer_id', '=', 'producers.producer_id');
	// }
}
