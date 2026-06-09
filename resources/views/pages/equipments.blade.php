@extends('layouts.app')

@section('title', 'Equipment & Capability')
@section('meta_description', 'Eastern Geotechnics Limited drilling rigs, field testing equipment, and deployment capability.')

@section('content')
    <x-page-hero title="Equipment & Capability" subtitle="Field tools and drilling capacity for practical ground investigation." />

    <section class="bg-white py-20 lg:py-24">
        <div class="mx-auto grid max-w-[1180px] gap-12 px-4 sm:px-6 lg:grid-cols-[1fr_1.1fr] lg:px-8">
            <div>
                <img src="{{ asset('assets/images/builderon-img28.jpg') }}" alt="Drilling equipment" class="h-[520px] w-full object-cover">
            </div>
            <div>
                <p class="inline-block border-2 border-[#FFA729] px-4 py-2 text-sm font-black uppercase text-[#FFA729]">Drilling Rigs</p>
                <h1 class="mt-6 text-3xl font-black uppercase leading-tight text-[#081a43] sm:text-4xl">Versatile drilling teams for investigation work</h1>
                <p class="mt-6 text-lg leading-8 text-slate-600">
                    EGL's drilling capacity includes hand auger tripods and wheel-mounted, lightweight, versatile motorized rotary coring drilling rigs.
                </p>
                <p class="mt-4 text-lg leading-8 text-slate-600">
                    The company can deploy up to three drilling teams with drilling depth capacity of up to 180m. The profile also notes GY150-T series diamond rotary coring drilling rigs supplied ISO 9001:2000 certified.
                </p>
                <div class="mt-8 grid gap-4 sm:grid-cols-2">
                    <div class="bg-slate-100 p-6">
                        <div class="text-3xl font-black text-[#FFA729]">180m</div>
                        <p class="mt-2 font-bold text-[#081a43]">Depth capacity</p>
                    </div>
                    <div class="bg-slate-100 p-6">
                        <div class="text-3xl font-black text-[#FFA729]">3</div>
                        <p class="mt-2 font-bold text-[#081a43]">Drilling teams</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-slate-100 py-20 lg:py-24">
        <div class="mx-auto max-w-[1180px] px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <p class="inline-block border border-[#FFA729] px-4 py-2 text-sm font-black uppercase text-[#D98200]">Testing Equipment</p>
                <h2 class="mt-6 text-3xl font-black uppercase leading-tight text-[#081a43] sm:text-4xl">Field equipment for faster, reliable site diagnosis</h2>
            </div>
            <div class="mt-10 grid gap-6 md:grid-cols-3">
                <article class="bg-white p-7 shadow-sm">
                    <h3 class="text-xl font-black uppercase text-[#081a43]">Soil Resistivity Tester</h3>
                    <p class="mt-4 leading-7 text-slate-600">Supports earth connection checks and characterization of existing earth points in the field.</p>
                </article>
                <article class="bg-white p-7 shadow-sm">
                    <h3 class="text-xl font-black uppercase text-[#081a43]">Plate Load Testing</h3>
                    <p class="mt-4 leading-7 text-slate-600">Used for in-situ assessment of bearing and deformation behavior for design decisions.</p>
                </article>
                <article class="bg-white p-7 shadow-sm">
                    <h3 class="text-xl font-black uppercase text-[#081a43]">PANDA Testing</h3>
                    <p class="mt-4 leading-7 text-slate-600">Portable dynamic probing for fast site investigation and quality control support.</p>
                </article>
            </div>
        </div>
    </section>
@endsection
