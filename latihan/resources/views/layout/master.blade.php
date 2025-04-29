<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <br><br><br><h4>Extends</h4>
    <h1>{{ $kampus }}</h1>
    <hr>

    @yield('content')

    <hr>
    &copy; {{ date('Y') }} Universitas Multi Data Palembang
</body>
</html>
