<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request $request)
	{
		$rules = [
			'commenter' => 'required',
			'gender' => 'required',
			'email' => 'required',
			'comment'=>'required',
			
		];

	$this->validate($request, $rules);

	Comment::create($request->all());
 
    return back()->with('message', 'Comment Replied');
	}
}
