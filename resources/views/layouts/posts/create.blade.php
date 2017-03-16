@extends('layouts.master')
                    <li> <i class="fa-li fa fa-check-square"></i><a href="/">Home</a>

@section('content')
CREATE A NEW POST.

<form method="POST" action="/posts">

	{{  csrf_field()  }}

  <div class="form-group">

    <label for="title">Title:</label>

    <input type="text" class="form-control" id="title" name="title" >

  </div>


  <div class="form-group">

    <label for="body">Body:</label>

    <textarea id="body" class="form-control" name="body" ></textarea>

  </div>


  <div class="form-group">

    <label for="exampleInputFile">File input</label>

    <input type="file" id="exampleInputFile">

    <p class="help-block">Example block-level help text here.</p>

  </div>

  <div class="form-group">
  	<button type="submit" class="btn btn-primary">Publish</button>
  </div>

</form>

	@include('layouts.errors')

@endsection