<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organisation</title>

    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/montserrat.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/tailwind.js')}}"></script>

    @yield('head')
</head>
<body>
    @include('includes.header')
    
    @include('includes.navbar')

    <div class="container my-6">

        @yield('body')
    </div>
    
    @include('includes.footer')
    
    <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>

    @include('includes.js')
    
    @yield('js')

</body>
</html>