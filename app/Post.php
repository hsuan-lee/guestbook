<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	protected $fillable = ['title','username','gender','email','content'];
    public function Comments(){
		
		return $this->hasMany('App\Comment', 'post_id');
	}
}
