<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? $title : "Site E-commerce" }}</title>
    <link rel="stylesheet" href="{{ URL::asset("assets/css/style.css") }}">
    <link rel="stylesheet" href="{{ URL::asset("assets/bootstrap/css/bootstrap.min.css") }}">
</head>
<body>
    @include('includes.menu')
    @yield('content')
    <script src="{{ URL::asset("assets/js/jquery.min.js") }}"></script>
    <script src="{{ URL::asset("assets/bootstrap/js/bootstrap.min.js") }}"></script>
    <script src="{{ URL::asset("assets/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
</body>
</html>