<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
    </head>
    <body>
        @include('inc.navbar');
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
        <footer class="text-center" style="padding: 20px 0;">
            <p>Copyright &copy; 2019 TodoList</p>
        </footer>
    </body>
</html>
