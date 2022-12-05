<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('bootstrap-5.1.3/css/bootstrap.min.css') }}" >
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- Font Awesome --}}
    <link href="{{ asset('fontawesome-free-5.15.4-web/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome-free-5.15.4-web/css/solid.min.css') }}" rel="stylesheet">
    {{-- jquery --}}
    <script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'SparkSoft') }}
                </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li><a href="{{ url('student') }}" class="nav-link fw-bolder">Student List</a></li>
            </ul>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
