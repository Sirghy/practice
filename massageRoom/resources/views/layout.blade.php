<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','layout')</title>
    <link rel="stylesheet" href="{{ asset('newBootstrap/css/bootstrap.min.css') }}">
    @vite(['resources/css/app.css', 'resources/css/layout.css', 'resources/css/app_layout.css','resources/css/calendar.css', 'resources/js/app.js'])
    <script src="{{ asset('newBootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @yield('individual_options')
</head>
<body class="app_layout">
    @include('partials.nav')
   <main class="flex-grow-1">

      @yield('body_content')
   </main>

   @include('partials.footer')
</body>
</html>
