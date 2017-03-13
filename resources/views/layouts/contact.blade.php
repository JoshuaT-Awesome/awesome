@extends ('layouts.master')
@section ('title', 'Contact Me!')


<a href="/">Home</a>
                
@section ('content')
	<h1>  CONTACT ME, FOR REAL. </h1>
		Contact information goes here.  You may reach me on the line.

			<?php $pageName = "contact"; ?>
		<div class="content" data-page-name="{{  $pageName }}">
	
@include('sign-up-button', ['text' => 'GET AHOLD OF ME.'])
	</div>
@endsection