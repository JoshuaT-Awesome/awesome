@extends ('layouts.master')
                    <li> <i class="fa-li fa fa-check-square"></i><a href="/">Home</a>

@section ('content')

CREATE A NEW POST.

<!-- <form method="POST" action="/posts" enctype="multipart/form-data"> -->
  {{ Form::open(array('url'=>'/posts','files'=>true)) }}

	{{  csrf_field()  }}

    <div class="form-group">
      {{  Form::label('title', 'Title:')}}
      {{  Form::text('title', null, ['class' => 'form-control'])  }}
    </div>


    <div class="form-group">
      {{  Form::label('body', 'Body:')}}
      {{  Form::textarea('body', null, ['class' => 'form-control'])  }}
    </div>


    <div class="form-group">
      <!--  <label for="exampleInputFile">File input</label>
      <input type="file" name="blog_image" id="exampleInputFile"> 
      {{ Form::label('file','File',array('id'=>'','class'=>'')) }}
      {{ Form::file('file','',array('id'=>'','class'=>'')) }}-->
      {{ Form::label('file','File') }}
      {{ Form::file('file','') }}

      <p class="help-block">Example block-level help text here.</p>
    </div>

    <div class="form-group">
       {{ Form::submit ('Save', ['class' => 'btn btn-primary']) }}
       {{ Form::reset('Reset', ['class' => 'btn btn-secondary']) }}
    </div>

  {{ Form::close() }}

<!-- </form> -->


 <br><br><br>
	@include('layouts.errors')

@endsection