@extends ('layouts.master')

<a href="/">Home</a>

@section ('content')
		@foreach ($stats as $stat)

			@include ('layouts.stats.stats')

		@endforeach
<br><br>

<br><br>
@endsection

