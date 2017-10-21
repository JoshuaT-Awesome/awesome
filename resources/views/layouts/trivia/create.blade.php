@extends ('layouts.master')
                    <li> <i class="fa-li fa fa-check-square"></i><a href="/">Home</a>
<br><br>
@section ('content')

CREATE A NEW QUESTION.

<form method="POST" action="/trivia" enctype="multipart/form-data">

	{{  csrf_field()  }}

  <div class="form-group">

    <label for="title">Title:</label>

    <textarea id="title" class="form-control" name="title" ></textarea>

    	<div class="mtm">
		    a.  <textarea id="a" class="form-control" name="a" ></textarea>
		</div>
		<div class="mtm">
		    b.  <textarea id="b" class="form-control" name="b" ></textarea>
		</div>
		<div class="mtm">
		    c.  <textarea id="c" class="form-control" name="c" ></textarea>
		</div>
		<div class="mtm">
		    d.  <textarea id="d" class="form-control" name="d" ></textarea>
		</div>
		<div class="mtm">
		    answer.  <textarea id="answer" class="form-control" name="answer" ></textarea>
		</div>
		<div class="mtm">
		    image location.  <textarea id="image" class="form-control" name="image" ></textarea>
		</div>

    <button type="submit" class="btn btn-primary">Publish</button>

  </div>

</form>