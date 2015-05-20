<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Estate extends Model {
	protected $guarded = ['estate_id'];
	protected $primaryKey = 'estate_id';
	public $timestamps = false;
}
