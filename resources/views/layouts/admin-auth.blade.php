<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Administrator Login') | EGL</title>
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#081a43] text-white antialiased">
<div class="relative grid min-h-screen overflow-hidden lg:grid-cols-[1.1fr_0.9fr]">
    <div class="absolute inset-0 opacity-10" style="background-image:radial-gradient(#fff 1px,transparent 1px);background-size:18px 18px"></div>
    <section class="relative hidden min-h-screen items-end overflow-hidden lg:flex">
        <img src="{{ asset('assets/images/builderon-img43.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover">
        <div class="absolute inset-0 bg-[#081a43]/75"></div>
        <div class="relative z-10 max-w-2xl p-14 xl:p-20">
            <p class="text-sm font-black uppercase tracking-[0.22em] text-[#FFA729]">Eastern Geotechnics Limited</p>
            <h1 class="mt-6 text-5xl font-black uppercase leading-[1.05] xl:text-6xl">Ground intelligence.<br>Operational clarity.</h1>
            <p class="mt-7 max-w-xl text-lg leading-8 text-slate-200">Secure access to inquiries, visitor insights, website controls, and the team’s administrative activity.</p>
        </div>
    </section>
    <main class="relative z-10 grid min-h-screen place-items-center px-5 py-12 sm:px-10">
        <div data-admin-reveal class="w-full max-w-[500px]">
            <a href="{{ route('home') }}" class="inline-block bg-white p-3"><img src="{{ asset('assets/images/egl-logo.jpg') }}" alt="Eastern Geotechnics" class="h-20 w-72 object-contain"></a>
            <div class="mt-8 border-t-4 border-[#FFA729] bg-white p-7 text-slate-700 shadow-2xl sm:p-10">
                <p class="text-xs font-black uppercase tracking-[0.2em] text-[#FFA729]">@yield('eyebrow', 'Secure administration')</p>
                <h2 class="mt-3 text-3xl font-black uppercase text-[#081a43]">@yield('heading', 'Welcome back')</h2>
                @if(session('status'))<div class="mt-5 border-l-4 border-emerald-500 bg-emerald-50 p-4 text-sm text-emerald-800">{{ session('status') }}</div>@endif
                @if($errors->any())<div class="mt-5 border-l-4 border-red-500 bg-red-50 p-4 text-sm text-red-800">{{ $errors->first() }}</div>@endif
                <div class="mt-7">@yield('content')</div>
            </div>
            <p class="mt-6 text-sm text-slate-400">Authorized personnel only. Login activity is monitored.</p>
        </div>
    </main>
</div>
</body>
</html>
