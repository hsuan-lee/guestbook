@extends('layout')
@section('content')

<div class="col-xs-8 col-xs-offset-2">

<h2>Title：{{ $post->title }} </h2>

<p>username: {{ $post->username }}</p>
<p>email: {{ $post->email }}</p>

@if($post->gender)
    <p>gender: Female</p>
@else
	<p>gender: Male</p>
@endif


<p>{{ $post->content }}</p>


<hr />

<h3>Comments</h3>
@foreach($post->comments as $single_comment)
    <h4>{{ $single_comment->commenter }}</h4>
    <p>{{ $single_comment->comment }}</p><br/>
@endforeach



<h3>Write a Comment</h3>

@if(Session::has('message'))
	<div class="bg-info">
		<p>{{ Session::get('message') }}</p>
	</div>
@endif

@foreach($errors->all() as $message)
	<p class="bg-danger">{{ $message }}</p>
@endforeach

{{ Form::open(['route' => 'comment.store'], array('class' => 'form')) }}

	<div class="form-group">
		<label for="commenter" class="">Username</label>
		<div class="">
			{{ Form::text('commenter', null, array('class' => '')) }}
		</div>
	</div>

	<div class="form-group">
		<label for="gender" class="">Gender</label>
		<div class="">
			<select name="gender" type="text" class="">
				<option></option>
				<option value="0" name="0">Male</option>
				<option value="1" name="1">Female</option>
			</select>
		</div>
	</div>


	<div class="form-group">
		<label for="email" class="">E-mail</label>
		<div class="">
			{{ Form::text('email', null, array('class' => '')) }}
		</div>
	</div>

	<div class="form-group">
		<label for="comment" class="">Content</label>
		<div class="">
			{{ Form::textarea('comment', null, array('class' => '')) }}
		</div>
	</div>

	{{ Form::hidden('post_id', $post->id) }}

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Comment</button>
	</div>


{{ Form::close() }}


</div>
@endsection