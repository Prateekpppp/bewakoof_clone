<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organisation</title>

    @yield('head')
</head>
<body>
    @yield('header')
    
    @include('navbar')

    @yield('body')
    
    @include('navbar')
    
    @include('js')

    @yield('js')

</body>
</html>