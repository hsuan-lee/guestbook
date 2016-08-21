@extends('layout')
@section('content')

<div class="col-xs-8 col-xs-offset-2">

<h1>Post Page</h1>


@if(Session::has('message'))
	<div class="bg-info">
		<p>{{ Session::get('message') }}</p>
	</div>
@endif


@foreach($errors->all() as $message)
	<p class="bg-danger">{{ $message }}</p>
@endforeach

{{ Form::open(['route' => 'post.store'], array('class' => 'form')) }}

	<div class="form-group">
		<label for="title" class="">Title</label>
		<div class="">
			{{ Form::text('title', null, array('class' => '')) }}
		</div>
	</div>


	<div class="form-group">
		<label for="username" class="">Username</label>
		<div class="">
			{{ Form::text('username', null, array('class' => '')) }}
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
		<label for="content" class="">Content</label>
		<div class="">
			{{ Form::textarea('content', null, array('class' => '')) }}
		</div>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Post</button>
	</div>

{{ Form::close() }}

</div>

@stop