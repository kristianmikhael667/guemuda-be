<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>GueMuda | Page {{ $page }}</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{ '/css/main.min.css' }}">
    <link rel="stylesheet" href="{{ '/css/style.css' }}">
    <link rel="stylesheet" href="{{ '/css/color.css' }}">
    <link rel="stylesheet" href="{{ '/css/responsive.css' }}">
    <link href="{{ '/plugins/apex/apexcharts.css' }}" rel="stylesheet" type="text/css">
</head>

<body>

    @include('loader')

    <div>
        @yield('container')
    </div>

    <script src="{{ '/js/main.min.js'}}"></script>
    <script src="{{ '/js/vivus.min.js'}}"></script>
    <script src="{{ '/js/script.js'}}"></script>

    <script src="{{ '/plugins/apex/apexcharts.min.js'}}"></script>
    <script src="{{ '/js/graphs-scripts.js'}}"></script>


</body>

</html>