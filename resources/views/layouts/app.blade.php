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

<button
    type="button"
    data-scroll-top
    aria-label="Back to top"
    title="Back to top"
    class="fixed bottom-6 right-6 z-50 flex h-12 w-12 items-center justify-center border border-white/30 bg-[#FFA729] text-white shadow-[0_10px_28px_rgba(8,26,67,0.28)] transition-colors hover:bg-[#081a43] focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-[#FFA729] sm:bottom-8 sm:right-8 sm:h-14 sm:w-14"
>
    <i class="fas fa-arrow-up text-lg" aria-hidden="true"></i>
</button>
</body>
</html>
