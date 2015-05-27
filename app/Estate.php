<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Estate extends Model {
	protected $guarded = ['estate_id'];
	protected $primaryKey = 'estate_id';
	public $timestamps = false;

	public function district() {
		return $this->belongsTo('District');
	}

	public function images() {
		return $this->hasMany('Image');
	}

	// public function scopeSelected($query) {
	// 	return $query->where(DB::raw('RAND()'));
	// }
}
