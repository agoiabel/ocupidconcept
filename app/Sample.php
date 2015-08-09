<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model {

	protected $fillable = ['title', 'briefDescription'];

	public function categories()
	{
		return $this->belongsToMany('App\Category');
	}

}
