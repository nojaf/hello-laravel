<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"> 
        <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css')  }}">
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
    </head>
    <body>
        <main>
        @yield('content')
        </main>
    </body>
</html>
