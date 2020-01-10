<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        body {
            font-family: "Montserrat", sans-serif;
            color: #181818;
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
        @yield('content')
    </div>
    <script src="/js/app.js"></script>
</body>
</html>
