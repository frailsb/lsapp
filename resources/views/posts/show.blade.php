@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-outline-secondary mb-4">Go Back</a>
	<h1>
		{{ $post->title }}
	</h1>
	<img class="w-100" src="/storage/cover_images/{{ $post->cover_image }}" alt="">
	<p>
		{!! $post->body !!}
	</p>
	<hr>
	<small>
		Written on {{ $post->created_at }} by {{ $post->user->name }}
	</small>
	<hr>
	@if(!Auth::guest())
		@if(Auth::user()->id == $post->user_id)
			<a href="/posts/{{ $post->id }}/edit" class="btn btn-success">Edit</a>

			{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
				{!! Form::hidden('_method', 'DELETE') !!}
				{!! Form::submit('DELETE', ['class' => 'btn btn-danger']) !!}
			{!! Form::close() !!}
		@endif
	@endif
@endsection