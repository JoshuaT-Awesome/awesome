{{--@extends ('layouts.master')--}}
        <!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Worst Dev Ever</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">

    {{--bootstrap 4--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
            integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="/css/bootswatch.css" type="text/css">
    <link rel="stylesheet" href="/css/app.css" type="text/css">
    <!-- Styles -->
    <style>
        html, body {
            /*background-color: #fff;*/
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            font-size: 30px;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
            color: cornflowerblue;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        P {
            color: limegreen;
        }

        body {
            background: url("/images/Moon-Milky-Way.jpg");
            background-repeat: round;
            background-attachment: fixed;
        }


    </style>
</head>
<body>
<nav class="navbar navbar-toggleable-md  ">
    <a class="navbar-brand" href="#">Navbar</a>

    <div class="collapse navbar-collapse navbar-toggleable-md">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                   aria-expanded="true">Resources</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
        </ul>
        {{--<form class="form-inline">--}}
            {{--<input class="form-control mr-sm-2" type="text" placeholder="Search">--}}
            {{--<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>--}}
        {{--</form>--}}
    </div>
</nav>

<div class="Aligner">
    <img src="/images/me.jpg">
</div>

<div class="flex-center position-ref ">
    <div class="content">
        <div class="title m-b-md">
            I'm the worst developer in the galaxy.
        </div>
        <div class="container">
            <strong><p><?php echo strtoupper("Join me as I struggle to get better.")?></p></strong>
            SIGN UP FOR UPDATES!
            <form action="/action_page.php">
                <p><input type="email"></p>

                <button type="button" style="color:cornflowerblue" value="Submit">SUBMIT</button>
            </form>
        </div>
        http://referral.pluralsight.com/mQcUSVh
    </div>
</div>
</body>
</html>


{{--<div class="title m-b-md">--}}
{{--Joshua T. Awesome--}}
{{--</div>--}}

{{--<div class="links">--}}
{{--<ul class="fa-ul">--}}
{{--<li> <i class="fa-li fa fa-coffee"></i><a href="developer">Developer</a>--}}
{{--<li><i class="fa-li fa fa-laptop"></i><a href="/">Website Design</a>--}}
{{--<li><i class="fa-li fa fa-puzzle-piece"></i><a href="trivia">'80s Trivia Nerd</a>--}}
{{--<li> <i class="fa-li fa fa-gamepad"></i><a href="ancient">'90s Retro Page</a>--}}
{{--<li> <i class="fa-li fa fa-soccer-ball-o"></i><a href="test">Test Page</a>--}}
{{--<li> <i class="fa-li fa fa-comment"></i><a href="contact">Contact</a>--}}
{{--<li> <i class="fa-li fa fa-camera-retro"></i><a href="/">Gallery</a>--}}
{{--<li> <i class="fa-li fa fa-empire"></i><a href="posts/create">Create Posts</a>--}}
{{--<li> <i class="fa-li fa fa-camera"></i><a href="posts">View Posts</a>--}}
{{--<li> <i class="fa-li fa fa-rocket"></i><a href="stats">Stats</a>--}}

{{--</ul>--}}
{{--<div class="me">--}}
{{--<img src="/images/me.jpg">--}}
{{--</div>--}}

{{--</div> --}}
<!-- content -->


 