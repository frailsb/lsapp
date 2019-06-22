@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-outline-secondary mb-4">Go Back</a>
	<h1>
		{{ $post->title }}
	</h1>
	<p>
		{!! $post->body !!}
	</p>
	<hr>
	<small>
		Written on {{ $post->created_at }}
	</small>
	<hr>
	<a href="/posts/{{ $post->title }}/edit" class="btn btn-outline-info">Edit</a>
@endsection