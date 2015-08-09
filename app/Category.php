<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	public function samples()
	{
		return $this->belongsToMany('App\sample');
	}

}
