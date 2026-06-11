@extends('layouts.app')

@section('title', 'About Us')
@section('meta_description', 'Learn about Eastern Geotechnics Limited, its mission, vision, values, and geotechnical investigation services across Tanzania.')

@section('content')
    <x-page-hero title="About Us" subtitle="A Tanzanian geotechnical investigation services provider." />

    <section class="bg-white py-20 lg:py-24">
        <div class="mx-auto grid max-w-[1180px] items-center gap-12 px-4 sm:px-6 lg:grid-cols-[1fr_1.1fr] lg:px-8">
            <div data-reveal="left">
                <img src="{{ asset('assets/images/builderon-img17.jpg') }}" alt="Eastern Geotechnics field work" loading="lazy" decoding="async" class="h-[520px] w-full object-cover">
            </div>
            <div data-reveal="right" style="--reveal-delay: 120ms">
                <p class="inline-block border-2 border-[#FFA729] px-4 py-2 text-sm font-black uppercase text-[#FFA729]">Company Profile</p>
                <h1 class="mt-6 text-3xl font-black uppercase leading-tight text-[#081a43] sm:text-4xl">Professional geotechnical investigations and testing across Tanzania</h1>
                <p class="mt-6 text-lg leading-8 text-slate-600">
                    Eastern Geotechnics Limited was established in 2024 and is among Tanzania's fast-growing geotechnical investigation contractors. EGL provides high-quality professional geotechnical investigations and testing services to clients across Tanzania.
                </p>
                <p class="mt-4 text-lg leading-8 text-slate-600">
                    The company supports projects from early ground investigation through field testing, drilling, geophysics, and engineering interpretation, helping clients make confident technical and commercial decisions.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-slate-100 py-20 lg:py-24">
        <div class="mx-auto grid max-w-[1180px] gap-6 px-4 sm:px-6 md:grid-cols-2 lg:px-8">
            <article data-reveal="up" class="bg-white p-8 shadow-sm">
                <h2 class="text-2xl font-black uppercase text-[#081a43]">Our Vision</h2>
                <p class="mt-5 text-lg leading-8 text-slate-600">To build an organization that will become the leading and respected service provider within East Africa and beyond.</p>
            </article>
            <article data-reveal="up" style="--reveal-delay: 110ms" class="bg-white p-8 shadow-sm">
                <h2 class="text-2xl font-black uppercase text-[#081a43]">Our Mission</h2>
                <p class="mt-5 text-lg leading-8 text-slate-600">To maintain high standards of leadership, service quality, proactive customer care, competence, value, and technology.</p>
            </article>
        </div>
    </section>

    <section class="bg-white pt-20 lg:pt-24 pb-36">
        <div class="mx-auto max-w-[1180px] px-4 sm:px-6 lg:px-8">
            <div data-reveal="up" class="max-w-3xl">
                <p class="inline-block border border-[#FFA729] px-4 py-2 text-sm font-black uppercase text-[#D98200]">Core Values</p>
                <h2 class="mt-6 text-3xl font-black uppercase leading-tight text-[#081a43] sm:text-4xl">Principles that guide daily decisions and field delivery</h2>
            </div>
            <div class="mt-10 grid gap-6 md:grid-cols-3">
                <article data-reveal="up" class="border border-slate-200 p-7">
                    <h3 class="text-xl font-black uppercase text-[#081a43]">Integrity</h3>
                    <p class="mt-4 leading-7 text-slate-600">We act with honesty and commitment at every stage of operation.</p>
                </article>
                <article data-reveal="up" style="--reveal-delay: 100ms" class="border border-slate-200 p-7">
                    <h3 class="text-xl font-black uppercase text-[#081a43]">Excellence</h3>
                    <p class="mt-4 leading-7 text-slate-600">We keep our promises and strive to be the best we can be.</p>
                </article>
                <article data-reveal="up" style="--reveal-delay: 200ms" class="border border-slate-200 p-7">
                    <h3 class="text-xl font-black uppercase text-[#081a43]">Teamwork</h3>
                    <p class="mt-4 leading-7 text-slate-600">We work under shared vision, effective leadership, and a commitment to the team's interest.</p>
                </article>
            </div>
            <div data-reveal="up" class="mt-8 bg-[#081a43] p-8 text-white">
                <h3 class="text-2xl font-black uppercase">We Value Safety</h3>
                <p class="mt-4 max-w-4xl text-lg leading-8 text-slate-200">The health and safety of employees is a critical obligation and the responsibility of everyone at EGL. People and opinions are treated fairly, openly, and respectfully.</p>
            </div>
        </div>
    </section>
@endsection
