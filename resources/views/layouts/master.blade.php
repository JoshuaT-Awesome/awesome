<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'title goes here')</title>

        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <!-- Styles -->
        <link href="/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet" type="text/css">
         <script src="https://code.jquery.com/jquery-3.2.1.js"
                 integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
                 crossorigin="anonymous"></script>
    </head>
    <body>
            <div class="content">
                @yield('content')
            </div>
               @show
               <!-- @include('sidebar') -->
       
         @include('footer')
    </body>
</html>
