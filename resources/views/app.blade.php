<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name','') }}</title>
    <style>
        .navbar-default {
            background-color: #008080 !important;
       }
        .navbar-default a{
           color: #ffffff !important;
       }
        .form-control{
            margin-bottom: 10px !important;
        }
        img {
            height: 223px;}
    </style>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/Chart.bundle.js') }}"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name') }}
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-left">
                        <!-- Authentication Links -->

                            <li class="dropdown"></li>
                    </ul>
                </div>
            </div>
        </nav>
<div class="container">
    @include('flash::message')

</div>
        @yield('content')
    </div>
    <script>
        new Chart(document.getElementById("pie-chart"), {
            type: 'pie',
            data: {
                labels: ["15-25", "25-45", "45-65"],
                datasets: [{
                    label: "الفئة العمرية",
                    backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
                    data: [<?php echo $y.','. $x.','. $z?>]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'احصائية حسب الفئة العمرية'
                }
            }
        });

        new Chart(document.getElementById("pie-chart-gender"), {
            type: 'pie',
            data: {
                labels: ["ذكر", "أنثى"],
                datasets: [{
                    label: "حسب الجنس",
                    backgroundColor: ["#3cba9f","#e8c3b9"],
                    data: [<?php echo $male.','. $female ?>]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'احصائية حسب الجنس'
                }
            }
        });
        </script>
</body>
</html>
