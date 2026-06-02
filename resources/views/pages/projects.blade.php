@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <section class="relative isolate overflow-hidden bg-slate-950 text-white min-h-[300px] lg:min-h-[300px] xl:min-h-[300px]">
        <div class="absolute inset-0">
            <img
                src="{{ asset('assets/images/builderon-img1.jpg') }}"
                alt="Construction team"
                class="h-full w-full object-cover"
            >
            <div class="absolute inset-0 bg-black/55"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-slate-950/20 via-slate-950/25 to-slate-950/55"></div>
        </div>

        <div class="relative mx-auto flex max-w-7xl  px-4 pt-12 pb-12 sm:px-6 lg:px-8 lg:py-16 min-h-[300px] lg:min-h-[300px] xl:min-h-[300px]">
            <div class="w-full text-center">
                <div class="mx-auto max-w-4xl">
                    <h3 class="text-4xl font-black uppercase leading-[0.95] sm:text-3xl lg:text-5xl">
                        Projects
                    </h3>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 right-0 z-10 h-[120px] lg:h-[140px] xl:h-[140px]">
            <img  src="{{ asset('assets/images/builderon-img21.png') }}" alt="" class="h-full w-full object-cover object-top">
        </div>
    </section>

    <section id="projects" class="relative overflow-hidden bg-[#ffffff] py-20 lg:py-24">
        {{-- subtle side background shapes --}}
        <div class="pointer-events-none absolute inset-y-0 left-0 hidden w-[14%] lg:block">
            <div class="h-full w-full bg-[linear-gradient(150deg,rgba(255,255,255,0.35),rgba(255,255,255,0))] [clip-path:polygon(0_0,100%_38%,100%_100%,0_100%)]"></div>
        </div>
        <div class="pointer-events-none absolute inset-y-0 right-0 hidden w-[14%] lg:block">
            <div class="h-full w-full bg-[linear-gradient(210deg,rgba(255,255,255,0.35),rgba(255,255,255,0))] [clip-path:polygon(0_65%,100%_20%,100%_100%,0_100%)]"></div>
        </div>

        <div class="relative mx-auto max-w-[1180px] min-h-[100px] px-4 sm:px-6 lg:px-8"></div>
    </section>
@endsection
