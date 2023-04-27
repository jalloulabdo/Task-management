<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    
    <link rel="shortcut icon" href="{{ url('/assets/images/favicon.ico')}}" />
    <link rel="stylesheet" href="{{ url('/assets/css/backend-plugin.min.css')}}">
    <link rel="stylesheet" href="{{ url('/assets/css/backend.css')}}">
    <link rel="stylesheet" href="{{ url('/assets/css/backend.css?v=1.0.0')}}">
    <link rel="stylesheet" href="{{ url('/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ url('/assets/vendor/remixicon/fonts/remixicon.css')}}">

    <link rel="stylesheet" href="{{ url('/assets/vendor/tui-calendar/tui-calendar/dist/tui-calendar.css')}}">
    <link rel="stylesheet" href="{{ url('/assets/vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css')}}">
    <link rel="stylesheet" href="{{ url('/assets/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css')}}">
    <!-- Scripts -->
</head>

<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>

    </div>

    <script src="{{ url('/assets/js/backend-bundle.min.js')}}"></script>
    <script src="{{ url('/assets/js/table-treeview.js')}}"></script>
    <script src="{{ url('/assets/js/customizer.js')}}"></script>
    <script async src="{{ url('/assets/js/chart-custom.js')}}"></script>
    <script async src="{{ url('/assets/js/slider.js')}}"></script>
    <script src="{{ url('/assets/js/app.js')}}"></script>
    <script src="{{ url('/assets/vendor/moment.min.js')}}"></script>
</body>

</html>