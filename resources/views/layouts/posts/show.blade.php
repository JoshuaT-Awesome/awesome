@extends('layouts.master')
<a href="/">Home</a>


@section ('content')
	<h2 class="blog-post-title">
	{{  $post->title  }}
	</h2>


	{{  $post->created_at->toFormattedDateString() }}<br><br>

	<p>{{  $post->body }}</p>

@endsection


