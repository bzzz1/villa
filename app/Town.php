<?php namespace App;

use App\BaseModel;

class Town extends BaseModel {
	protected $guarded = ['town_id'];
	protected $primaryKey = 'town_id';
	public $timestamps = false;

	public function districts() {
		return $this->hasMany('District');
	}
}
