<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Joshua T. Awesome')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link href="/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-size: 18px;
                font-weight: 100;
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
            }

            .links > a {
                display:flex;
                color: #303a3e;
                padding: 0 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;

            }

            .links {
                display:flex;
                justify-content: center;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .me {
                display:flex;
          padding-left: 8em;
            }

            .btn {display: inline-flex;
                height: 75px;
                width:125px;
                background: cyan;
                border: 2px solid rgba(33, 68, 72, 0.59);
                color: rgba(0, 0, 0, 0.55);
                font-size: 18px;
               }



        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">  
            <div class="content">
                @yield('content')
            </div>
               @show
               <!-- @include('sidebar') -->
        </div>
         @include('footer')
    </body>
</html>
