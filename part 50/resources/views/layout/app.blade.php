<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('partials.header')
</head>
<body>
    <div id="app">
         @include('partials.nav')
         @yield('maincontent')
    </div>


    @include('partials.footer')
</body>
</html>
