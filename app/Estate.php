<?php namespace App;

use App\BaseModel;

class Estate extends BaseModel {
	protected $guarded = ['estate_id'];
	protected $primaryKey = 'estate_id';
	public $timestamps = false;

	public function district() {
		return $this->belongsTo('District');
	}

	public function images() {
		return $this->hasMany('Image');
	}

	// public function preview() {
	// 	return $this->hasMany('Image')->where('preview', 1);
	// }

	// public function scopeSelected($query) {
	// 	return $query->where(DB::raw('RAND()'));
	// }

	public function scopeHasPreview($query) {
		$query->whereHas('images', function($q){$q->where('preview',1);});
	}

	public function scopeJoined($query) {
		$query->join('districts', 'estates.district_id', '=', 'districts.district_id')->join('towns', 'towns.town_id', '=', 'districts.town_id'); // get Illuminate\Database\Eloquent\Builder
	}
}
