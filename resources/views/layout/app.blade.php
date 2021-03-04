<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <!-- Nav tabs -->
    @yield('content-navbar')
    @yield('content-navbar-bottom')
    <!-- Jumbo Content -->
    @yield('content-jumbo')
</body>
</html>