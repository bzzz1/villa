<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model {
	protected $guarded = ['town_id'];
	protected $primaryKey = 'town_id';
	public $timestamps = false;

	public function districts() {
		return $this->hasMany('District');
	}
}
