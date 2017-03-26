@extends('layouts.master')
                    <li> <i class="fa-li fa fa-check-square"></i><a href="/">Home</a>

@section('content')
CREATE A NEW RECORD

<form method="POST" action="/stats" enctype="multipart/form-data">

	{{  csrf_field()  }}

  <div class="form-group">

    <label for="stats">CREATE:</label>

 <button type="submit" class="btn btn-primary">Submit</button>

  </div>





  

</form>
 
	@include('layouts.errors')

@endsection