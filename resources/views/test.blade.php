@extends ('layouts.master')
@section ('title', 'Test Page')

 	<a href="/">Home</a>
                
@section ('content')
	<h1>  test page </h1>
		crap goes here.

	<?php  $pageName = "test"; ?> 

	<div class="content" data-page-name="{{  $pageName  }}">
	<p>sign up: <strong>It's awesome!</strong></p>
@include('sign-up-button', ['text' => 'CLICK HERE.'])
	</div><br><br>

@endsection

