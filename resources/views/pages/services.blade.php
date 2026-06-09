@extends('layouts.app')

@section('title', 'Services')
@section('meta_description', 'Explore Eastern Geotechnics Limited services including foundation investigations, pavement assessment, borehole drilling, geophysics, and in-situ testing.')

@section('content')
    @php
        $groups = [
            [
                'title' => 'Geotechnical Engineering Service',
                'icon' => 'fa-mountain-city',
                'items' => [
                    'Foundation investigation and design',
                    'Pavement assessment and design',
                    'Slope stability design',
                    'Centerline investigation',
                    'Borrow pit investigation and material inventory',
                    'In-situ tests including plate load and PANDA tests',
                    'In-situ instrumentation',
                ],
            ],
            [
                'title' => 'Geological Engineering Service',
                'icon' => 'fa-earth-africa',
                'items' => [
                    'Borehole investigation and drilling',
                    'Geophysics study',
                    'Subsurface profiling for project planning',
                    'Field observations and engineering reporting',
                ],
            ],
            [
                'title' => 'Testing And Field Support',
                'icon' => 'fa-flask-vial',
                'items' => [
                    'Soil resistivity testing',
                    'Plate load testing',
                    'Material and borrow source evaluation',
                    'Field data collection for design teams',
                    'Piezometer installation, Lugeon Testing'
                ],
            ],
        ];
    @endphp

    <x-page-hero title="Services" subtitle="Engineering services delivered in-house and through trusted associations." />

    <section class="bg-white pt-20 lg:pt-24 pb-36">
        <div class="mx-auto max-w-[1180px] px-4 sm:px-6 lg:px-8">
            <div data-reveal="up" class="max-w-3xl">
                <p class="inline-block border-2 border-[#FFA729] px-4 py-2 text-sm font-black uppercase text-[#FFA729]">What We Do</p>
                <h1 class="mt-6 text-3xl font-black uppercase leading-tight text-[#081a43] sm:text-4xl">Ground investigation services for reliable design and construction decisions</h1>
                <p class="mt-5 text-lg leading-8 text-slate-600">EGL offers a range of engineering services either entirely in-house or in association with specialist partners.</p>
            </div>

            <div class="mt-12 grid gap-6 lg:grid-cols-3">
                @foreach ($groups as $group)
                    <article data-reveal="up" style="--reveal-delay: {{ $loop->index * 110 }}ms" class="border border-slate-200 bg-white p-7 shadow-sm">
                        <i class="fas {{ $group['icon'] }} text-4xl text-[#FFA729]" aria-hidden="true"></i>
                        <h2 class="mt-5 text-2xl font-black uppercase leading-tight text-[#081a43]">{{ $group['title'] }}</h2>
                        <ul class="mt-6 space-y-4">
                            @foreach ($group['items'] as $item)
                                <li class="flex gap-3 text-base leading-7 text-slate-600">
                                    <span class="mt-3 h-[3px] w-5 shrink-0 bg-[#FFA729]"></span>
                                    <span>{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
