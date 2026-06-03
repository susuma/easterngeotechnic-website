@extends('layouts.app')

@section('title', 'Projects')
@section('meta_description', 'Project areas supported by Eastern Geotechnics Limited including infrastructure, buildings, industrial, and energy developments.')

@section('content')
    @php
        $projects = [
            ['title' => 'Infrastructure Corridors', 'image' => 'builderon-img27.jpg', 'text' => 'Centerline investigations, borrow source studies, and pavement assessment for road and transport infrastructure.'],
            ['title' => 'Building Foundations', 'image' => 'builderon-img35.jpg', 'text' => 'Foundation investigations and design support for residential, commercial, and institutional developments.'],
            ['title' => 'Industrial Sites', 'image' => 'builderon-img30.jpg', 'text' => 'Borehole drilling, sampling, testing, and geotechnical interpretation for industrial project sites.'],
            ['title' => 'Slope And Earthworks', 'image' => 'builderon-img34.jpg', 'text' => 'Slope stability investigation and recommendations for safer earthwork and retaining solutions.'],
            ['title' => 'Material Sources', 'image' => 'builderon-img28.jpg', 'text' => 'Borrow pit investigation and material inventory to inform construction material planning.'],
            ['title' => 'Geophysics Support', 'image' => 'builderon-img29.jpg', 'text' => 'Geophysical study support for understanding subsurface conditions before intrusive works.'],
        ];
    @endphp

    <x-page-hero title="Projects" subtitle="Project sectors and investigation assignments EGL is equipped to support." />

    <section class="bg-white py-20 lg:py-24">
        <div class="mx-auto max-w-[1180px] px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <p class="inline-block border-2 border-[#FD5D14] px-4 py-2 text-sm font-black uppercase text-[#FD5D14]">Project Support</p>
                <h1 class="mt-6 text-3xl font-black uppercase leading-tight text-[#081a43] sm:text-4xl">Field investigation capability for early-stage and active projects</h1>
            </div>
            <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($projects as $project)
                    <article class="overflow-hidden border border-slate-200 bg-white shadow-sm">
                        <img src="{{ asset('assets/images/' . $project['image']) }}" alt="{{ $project['title'] }}" class="h-64 w-full object-cover">
                        <div class="p-6">
                            <h2 class="text-xl font-black uppercase text-[#081a43]">{{ $project['title'] }}</h2>
                            <p class="mt-4 leading-7 text-slate-600">{{ $project['text'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
