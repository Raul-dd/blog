<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="{{ asset('img/icono.ico') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Estilos CSS generales -->
    <link rel="stylesheet" href="{{asset('css/base/css/general.css')}}">
    <link rel="stylesheet" href="{{asset('css/base/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('css/base/css/footer.css')}}">

    <!-- Estilos específicos de cada vista -->
    @yield('styles')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
</head>

<body>

    <div class="content">

        <!-- Menú -->
        @include('layouts.menu')

        <!-- Contenido -->
        <section class="section">
            @yield('content')
        </section>

        <!-- Footer -->
        @include('layouts.footer')

    </div>

    @yield('scripts')

</body>

</html>
