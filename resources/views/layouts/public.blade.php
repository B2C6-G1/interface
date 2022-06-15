<!DOCTYPE html>
<html lang="en" class="h-full w-full ">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>B2C6</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="h-full w-full bg-slate-600">
        @include('includes.navbar')
        @yield('content')

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>