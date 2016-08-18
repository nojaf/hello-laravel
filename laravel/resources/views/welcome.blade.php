<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        @if(empty($people))
        <p>No people in array</p>
        @endif
        
        @unless(empty($people))
        <p>There are people</p>
        @endunless

        <ul>
        @foreach ($people as $person)
            <li>{{ $person }}.</li>    
        @endforeach
        </ul>
    </body>
</html>