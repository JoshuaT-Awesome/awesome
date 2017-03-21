<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Joshua T. Awesome')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link href="/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet" type="text/css">
      <!-- Styles -->
        
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
