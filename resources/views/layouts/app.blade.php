<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Eastern Geotechnics Limited')</title>
    <meta name="description" content="@yield('meta_description', 'Eastern Geotechnics Limited provides geotechnical investigation, drilling, testing, and geophysics services across Tanzania.')">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white font-sans text-slate-800 antialiased">
<div class="min-h-screen">
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</div>
</body>
</html>
