<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{

	protected $fillable = [
        'user_id',
	];
	
	public function user(){
	    return $this->belongsTo('App\User');
	}
	
	public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
