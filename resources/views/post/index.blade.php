@extends('layout')
@section('content')

<div class="col-xs-8 col-xs-offset-2">

@foreach($posts as $post)
	
	<a href="{{ url('post', $post->id) }}">
    <h2>Title：{{ $post->title }}
        
    </h2>
    </a>
    
    <p>{{ $post->content }}</p>
    
    <hr />
@endforeach

{!! $posts->render() !!}
</div>

@endsection
