<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{   
	protected $fillable = ['commenter','gender','email','comment','post_id'];
}
