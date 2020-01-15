<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Wayrise</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,800&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: "Montserrat", sans-serif;
                color: #181818;
                margin: auto;
            }

            .max {
                max-width: 1198px;
                margin: auto;
            }   

            .flexbox {
                display: flex;
            }

            .column {
                display: flex;
                flex-direction: column;
            }

            .center {
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <navbar></navbar>
            @yield('content')
            <foot></foot>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
