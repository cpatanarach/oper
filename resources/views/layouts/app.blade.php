<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @yield('meta')
    <!-- Styles -->
    <link href="{{ url('/resources/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/resources/assets/bootstrap/css/bootstrap-theme.min.css') }}" rel="stylesheet">
    <link href="{{ url('/resources/assets/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,700" rel="stylesheet">

    <!-- Scripts -->
    <style type="text/css">
        body{font-family: 'Kanit';font-weight: 300;}
    </style>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ url('/resources/assets/bootstrap/js/jquery-1.10.1.min.js') }}"></script>
    <script src="{{ url('/resources/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    @yield('script')
</body>
</html>
