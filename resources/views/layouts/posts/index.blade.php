
@extends ('layouts.master')

<a href="/">Home</a>

@section ('content')
		@foreach ($posts as $post)

			@include ('layouts.posts.post')

		@endforeach
@endsection