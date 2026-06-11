<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#081a43">
    <title>@yield('title', 'Dashboard') | EGL Admin</title>
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f4f6f8] text-slate-700 antialiased">
<div x-data="{ sidebarOpen: false }" class="min-h-screen">
    <div x-show="sidebarOpen" x-transition.opacity class="fixed inset-0 z-40 bg-[#081a43]/70 lg:hidden" @click="sidebarOpen = false"></div>

    <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" class="fixed inset-y-0 left-0 z-50 flex w-[280px] flex-col bg-[#081a43] text-white transition-transform duration-300 lg:translate-x-0">
        <div class="border-b border-white/10 px-7 py-6">
            <a href="{{ route('admin.dashboard') }}" class="block bg-white p-2">
                <img src="{{ asset('assets/images/egl-logo.jpg') }}" alt="Eastern Geotechnics" class="h-16 w-full object-contain">
            </a>
            <p class="mt-4 text-[11px] font-bold uppercase tracking-[0.2em] text-[#FFA729]">Operations Console</p>
        </div>
        <nav class="admin-scroll flex-1 overflow-y-auto px-4 py-6">
            @php
                $nav = [
                    ['admin.dashboard', 'admin.dashboard', 'fa-chart-pie', 'Dashboard'],
                    ['admin.analytics', 'admin.analytics', 'fa-chart-line', 'Analytics'],
                    ['admin.inquiries.*', 'admin.inquiries.index', 'fa-inbox', 'Inquiries', \App\Models\Inquiry::where('status', 'new')->count()],
                    ['admin.activity', 'admin.activity', 'fa-clock-rotate-left', 'Activity Log'],
                    ['admin.security.*', 'admin.security.edit', 'fa-shield-halved', 'Profile & Security'],
                ];
                if (auth('admin')->user()->isOwner()) {
                    $nav[] = ['admin.settings.*', 'admin.settings.edit', 'fa-sliders', 'Website Settings'];
                    $nav[] = ['admin.administrators.*', 'admin.administrators.index', 'fa-user-lock', 'Administrators'];
                }
            @endphp
            <div class="space-y-1.5">
                @foreach($nav as $item)
                    <a href="{{ route($item[1]) }}"
                       class="flex items-center gap-3 border-l-2 px-4 py-3.5 text-sm font-bold transition {{ request()->routeIs($item[0]) ? 'border-[#FFA729] bg-white/10 text-white' : 'border-transparent text-slate-300 hover:border-white/30 hover:bg-white/5 hover:text-white' }}">
                        <i class="fas {{ $item[2] }} w-5 text-center text-[#FFA729]"></i>
                        <span class="flex-1">{{ $item[3] }}</span>
                        @if(($item[4] ?? 0) > 0)<span class="min-w-6 bg-[#FFA729] px-1.5 py-0.5 text-center text-xs text-[#081a43]">{{ $item[4] }}</span>@endif
                    </a>
                @endforeach
            </div>
        </nav>
        <div class="border-t border-white/10 p-4">
            <a href="{{ route('home') }}" target="_blank" class="flex items-center gap-3 px-4 py-3 text-sm font-bold text-slate-300 transition hover:text-white"><i class="fas fa-arrow-up-right-from-square w-5 text-center text-[#FFA729]"></i>View website</a>
            <form action="{{ route('admin.logout') }}" method="POST">@csrf<button class="flex w-full items-center gap-3 px-4 py-3 text-sm font-bold text-slate-300 transition hover:text-white"><i class="fas fa-right-from-bracket w-5 text-center text-[#FFA729]"></i>Sign out</button></form>
        </div>
    </aside>

    <div class="lg:pl-[280px]">
        <header class="sticky top-0 z-30 border-b border-slate-200 bg-white/95 backdrop-blur">
            <div class="flex h-[76px] items-center justify-between px-4 sm:px-7 lg:px-10">
                <div class="flex items-center gap-4">
                    <button @click="sidebarOpen = true" class="grid h-11 w-11 place-items-center border border-slate-200 text-[#081a43] lg:hidden" aria-label="Open menu"><i class="fas fa-bars"></i></button>
                    <div>
                        <p class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#FFA729]">@yield('eyebrow', 'Administration')</p>
                        <h1 class="mt-1 text-xl font-black uppercase text-[#081a43] sm:text-2xl">@yield('heading', 'Dashboard')</h1>
                    </div>
                </div>
                <a href="{{ route('admin.security.edit') }}" class="flex items-center gap-3 text-right">
                    <span class="hidden sm:block"><strong class="block text-sm text-[#081a43]">{{ auth('admin')->user()->name }}</strong><span class="text-xs uppercase tracking-wider text-slate-500">{{ auth('admin')->user()->role }}</span></span>
                    <span class="grid h-11 w-11 place-items-center bg-[#FFA729] text-lg font-black text-[#081a43]">{{ strtoupper(substr(auth('admin')->user()->name, 0, 1)) }}</span>
                </a>
            </div>
        </header>

        <main class="px-4 py-7 sm:px-7 lg:px-10 lg:py-10">
            @if(session('success'))<div data-admin-reveal class="mb-6 border-l-4 border-emerald-500 bg-emerald-50 px-5 py-4 text-sm font-bold text-emerald-800">{{ session('success') }}</div>@endif
            @if($errors->any())<div data-admin-reveal class="mb-6 border-l-4 border-red-500 bg-red-50 px-5 py-4 text-sm text-red-800"><strong>Please correct the following:</strong><ul class="mt-2 list-disc pl-5">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
            @yield('content')
        </main>
    </div>
</div>
</body>
</html>
