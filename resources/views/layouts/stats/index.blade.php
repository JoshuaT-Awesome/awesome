@extends ('layouts.master')

<a href="/">Home</a>

@section ('content')
		@foreach ($stats as $stat)

			@include ('layouts.stats.stats')

		@endforeach



		@foreach($stats as $key => $value)
		 <tr>
            <td>User {{ $value->id }}: </td>
            

            <!-- will also add show, edit, and delete buttons -->
            <td>

           

                <!-- show the user (uses the show method found at GET /stats/{id} -->
                <a class="btn btn-small" href="{{ URL::to('stats/' . $value->id) }}">Show this User</a><br>

                <!-- edit this user's stats (uses the edit method found at GET /stats/{id}/edit -->
                <a class="btn btn-small" href="{{ URL::to('stats/' . $value->id . '/edit') }}">Add 5 to speed.</a><br><br>

            </td>
        </tr>

        @endforeach
<br><br>
	@include('layouts.errors')
<br><br>
@endsection

