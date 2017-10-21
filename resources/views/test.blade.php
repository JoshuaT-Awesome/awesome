<?php 
@extends('layouts.master')
  @section ('title', 'PAGE TITLE')

  @yield('content')
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
</head>

<body>





<div style = "display:none">
{{"WTF"}}
</div>




<?php 

/*
$date = new DateTime;

$myBirthday = (new DateTime('16 January'));

$timeUntilBirthday = $date->diff($myBirthday);

echo $timeUntilBirthday->format('%m months, %d days and %i minutes until your next birthday!');

$timezone = new DateTime('now', new DateTimeZone('America/Chicago'));
var_dump($timezone);
*/

$start = new DateTime("08:00:00");


<p>This is a paragraph.</p>
<p id="test">Test paragraph should hide on button click.</p>

<button>Click me</button>
<br><br>
Name: <input type="text" name="fullname"><br>
Email: <input type="text" name="email">







<script>
/*$("#test").mouseleave(function(){
    alert("Bye! You now leave!");
});
*/

$(document).ready(function(){
    $('div').slideDown('slow');

});


$(document).ready(function(){
    $("button").click(function(){
        $("#test").hide();  
    });  
});
   
$(document).ready(function(){
    $("#p").mouseenter(function(){
        alert("You entered p1!");
    });
});

$("#p").mousedown(function(){
    alert("Mouse down over p1!");
});

$("#p").hover(function(){
    alert("You entered p1!");
},
function(){
    alert("Bye! You now leave p1!");
});

$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color", "#cccccc");
    });
    $("input").blur(function(){
        $(this).css("background-color", "green");
    });
});

$("p").on({
    mouseenter: function(){
        $(this).css("background-color", "lightgray");
    }, 
    mouseleave: function(){
        $(this).css("background-color", "lightblue");
    }, 
    click: function(){
        $(this).css("background-color", "yellow");
    } 
});

</script>



 </body>
