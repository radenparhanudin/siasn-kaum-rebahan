<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="SIASN, Kaum Rebahan - eKantor Web ID">
        <meta name="author" content="Raden Parhanudin">
        <meta name="keywords" content="SIASN, Kaum, Rebahan, eKantor, Web, Id">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'SIASN - Kaum Rebahan') }}</title>
        <link href="{{ asset('assets') }}/css/app.css" rel="stylesheet">
        <link href="{{ asset('assets') }}/css/custom.css" rel="stylesheet">
        @stack('plugins-css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <main class="d-flex w-100">
            @yield('auth')
        </main>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="{{ asset('assets') }}/js/app.js"></script>
        @stack('plugins-js')
        @stack('script')
    </body>
</html>