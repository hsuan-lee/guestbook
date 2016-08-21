<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Comment;
use DB;

class PostsController extends Controller
{
	public function index()
	{
		$posts = DB::table('posts')->paginate(10);
		return view('post.index', compact('posts'));
	}

	public function show($id)
	{
		$post = Post::findOrFail($id);
		return view('post.show', compact('post'));
	}

	public function create()
	{
		return view('post.create');
	}

	public function store(Request $request)
	{
	$rules = [
		'title' => 'required',
		'username' => 'required',
		'gender' => 'required',
		'email' => 'required',
		'content'=>'required',
		
	];

	$this->validate($request, $rules);

	Post::create($request->all());
 
    return redirect('post');
}



}
