<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Subsector extends Model {
	protected $guarded = ['subsector_id'];
	protected $primaryKey = 'subsector_id';
	public $timestamps = false;
}
