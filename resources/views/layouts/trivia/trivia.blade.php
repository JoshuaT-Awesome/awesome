<body style="background-color:grey;">

<i class="fa-li fa fa-check-square"></i><a href="/">Home</a>
1980s.

neon green for sure.  atari, nintendo, pacman, hair metal, tightroll jeans


       
<hr>
<div id="page-wrap">
<h1 class="transparent index-headline">What Metal Band Are You?</h1>
@foreach($questions as $question)
	<form action="/trivia/test" method="post" id="quiz">

	{{ csrf_field() }}
<ul id="test-questions">
    
        <li><h3>{{ $question->title}}</h3>
        	<div class="mtm">
			    <input type="radio" name="question-<? $question->id?>" id="question-1-answers-A" value="A" />
			    <label for="question-1-answers-A" class="fwrd labela">a.  {{$question->a}}</label>
			</div>
			<div>
			    <input type="radio" name="question-<? $question->id?>" id="question-1-answers-B" value="B" />
			    <label for="question-1-answers-B" class="fwrd labelb">b.  {{$question->b}}</label>
			</div>
			<div>
			    <input type="radio" name="question-<? $question->id?>" id="question-1-answers-C" value="C" />
			    <label for="question-1-answers-C" class="fwrd labelc">c.  {{$question->c}}</label>
			</div>
			<div>
			    <input type="radio" name="question-<? $question->id?>" id="question-1-answers-D" value="D" />
			    <label for="question-1-answers-D" class="fwrd labeld">d.  {{$question->d}}</label>
			</div>
        </li>

</ul>
   @endforeach 



<input type="submit" value="Start Quiz" id="submit-quiz" />
</form>
</div>
</body>




