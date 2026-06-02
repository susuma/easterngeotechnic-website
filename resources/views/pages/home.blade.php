@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="relative isolate overflow-hidden bg-slate-950 text-white min-h-[800px] lg:min-h-[800px] xl:min-h-[800px]">
        <div class="absolute inset-0">
            <img
                src="{{ asset('assets/images/builderon-img1.jpg') }}"
                alt="Construction team"
                class="h-full w-full object-cover"
            >
            <div class="absolute inset-0 bg-black/55"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-slate-950/20 via-slate-950/25 to-slate-950/55"></div>
        </div>

        <div class="relative mx-auto flex max-w-7xl items-center px-4 py-24 sm:px-6 lg:px-8 lg:py-32 min-h-[800px] lg:min-h-[800px] xl:min-h-[800px]">
            <div class="w-full text-center">
                <div class="mx-auto max-w-4xl">
                    <h1 class="text-3xl font-black leading-[0.95] sm:text-2xl lg:text-5xl">
                        Professional Geotechnical, Drilling & Testing Services Across Tanzania
                    </h1>

                    <p class="mx-auto mt-6 max-w-3xl text-sm leading-7 text-slate-100 sm:text-base lg:text-lg">
                        Eastern Geotechnics Limited provides reliable geotechnical investigation, borehole drilling, in-situ testing, geophysics study, and engineering support for infrastructure, industrial, energy, and building projects.
                    </p>

                    <div class="mt-10 flex justify-center">
                        <a
                            href="#services"
                            class="inline-flex items-center justify-center bg-[#FD5D14] px-8 py-4 text-xs font-bold uppercase tracking-[0.22em] text-white transition hover:bg-orange-600 mx-2"
                        >
                            Explore Services
                        </a>
                        <a
                            href="#services"
                            class="inline-flex items-center justify-center bg-[#FD5D14] px-8 py-4 text-xs font-bold uppercase tracking-[0.22em] text-white transition hover:bg-orange-600 mx-2"
                        >
                            Request Consultation
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 right-0 z-10 h-[120px] lg:h-[170px] xl:h-[190px]">
            <img
                src="{{ asset('assets/images/builderon-img3.png') }}"
                alt=""
                class="h-full w-full object-cover object-top"
            >
        </div>
    </section>

    <section id="services" class="relative overflow-hidden bg-[#FD5D14] py-16 text-white lg:pt-0 lg:pb-20">
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8  min-h-[450px] lg:min-h-[450px] xl:min-h-[450px]">
            <div class="grid gap-10 lg:grid-cols-[1fr_2fr] lg:gap-8">
                {{-- Left column --}}
                <div class="flex">
                    <div class="my-auto max-w-md">
                        <h3 class="text-3xl font-black uppercase leading-tight sm:text-4xl">
                            why choose us <br>for projects!
                        </h3>

                        <p class="mt-5 text-base leading-8 text-orange-50/90">
                            Magna voluptatum dolorem! Dolores! Sociosqu commodo nobis imper dieting lacinia? Magni! Felis, elementum.
                        </p>

                        <a
                            href="#"
                            class="mt-8 inline-flex items-center border border-white/30 px-6 py-3 text-sm font-bold uppercase tracking-[0.22em] text-white transition hover:bg-white/10"
                        >
                            view all services
                        </a>
                    </div>
                </div>

                {{-- Right column --}}
                <div class="space-y-5">
                    {{-- First inner row --}}
                    <div class="grid gap-5 sm:grid-cols-2">
                        <article class="bg-slate-950/95 p-6 shadow-2xl">
                            <div class="flex items-start gap-4">
                                <figure class="shrink-0">
                                    <a href="#" tabindex="-1">
                                        <img
                                            src="{{ asset('assets/images/builderon-img5.png') }}"
                                            alt=""
                                            class="h-16 w-16 object-contain"
                                        >
                                    </a>
                                </figure>

                                <div>
                                    <h4 class="text-xl font-black capitalize leading-tight">
                                        <a href="#">modern technique</a>
                                    </h4>
                                    <p class="mt-3 text-sm leading-7 text-slate-300">
                                        Lorem ipsum dolor site ameti, consectetur adipis..
                                    </p>
                                </div>
                            </div>
                        </article>

                        <article class="bg-slate-950/95 p-6 shadow-2xl">
                            <div class="flex items-start gap-4">
                                <figure class="shrink-0">
                                    <a href="#" tabindex="-1">
                                        <img
                                            src="{{ asset('assets/images/builderon-img6.png') }}"
                                            alt=""
                                            class="h-16 w-16 object-contain"
                                        >
                                    </a>
                                </figure>

                                <div>
                                    <h4 class="text-xl font-black capitalize leading-tight">
                                        <a href="#">Quality materials</a>
                                    </h4>
                                    <p class="mt-3 text-sm leading-7 text-slate-300">
                                        Lorem ipsum dolor site ameti, consectetur adipis..
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>

                    {{-- Second inner row --}}
                    <div class="grid gap-5 sm:grid-cols-2">
                        <article class="bg-slate-950/95 p-6 shadow-2xl">
                            <div class="flex items-start gap-4">
                                <figure class="shrink-0">
                                    <a href="#" tabindex="-1">
                                        <img
                                            src="{{ asset('assets/images/builderon-img7.png') }}"
                                            alt=""
                                            class="h-16 w-16 object-contain"
                                        >
                                    </a>
                                </figure>

                                <div>
                                    <h4 class="text-xl font-black capitalize leading-tight">
                                        <a href="#">professional team</a>
                                    </h4>
                                    <p class="mt-3 text-sm leading-7 text-slate-300">
                                        Lorem ipsum dolor site ameti, consectetur adipis..
                                    </p>
                                </div>
                            </div>
                        </article>

                        <article class="bg-slate-950/95 p-6 shadow-2xl">
                            <div class="flex items-start gap-4">
                                <figure class="shrink-0">
                                    <a href="#" tabindex="-1">
                                        <img
                                            src="{{ asset('assets/images/builderon-img8.png') }}"
                                            alt=""
                                            class="h-16 w-16 object-contain"
                                        >
                                    </a>
                                </figure>

                                <div>
                                    <h4 class="text-xl font-black capitalize leading-tight">
                                        <a href="#">24/7 support</a>
                                    </h4>
                                    <p class="mt-3 text-sm leading-7 text-slate-300">
                                        Lorem ipsum dolor site ameti, consectetur adipis..
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 right-0 z-10 h-[120px] lg:h-[170px] xl:h-[190px]">
            <img
                src="{{ asset('assets/images/builderon-img21.png') }}"
                alt=""
                class="h-full w-full object-cover object-top"
            >
        </div>
    </section>

    <!--
    <section class="bg-white py-14 lg:pt-0 lg:pb-4">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-8 lg:grid-cols-[1fr_2fr_1fr]">
                {{-- Left column --}}
                <div class="flex justify-center lg:justify-start">
                    <img
                        src="{{ asset('assets/images/builderon-img04.png') }}"
                        alt=""
                        class="w-full max-w-[385px] object-contain"
                    >
                </div>

                {{-- Middle column --}}
                <div class="text-center">
                    <p class="mx-auto max-w-[620px] text-[28px] font-black italic leading-[1.15] tracking-[-0.02em] text-[#081a43] sm:text-[34px] lg:text-[42px]">
                        “We built Beautifully with the best possible materials and resources”
                    </p>

                    <h4 class="mt-10 text-[18px] font-black uppercase tracking-[0.01em] text-[#FD5D14] sm:text-[20px] lg:text-[22px]">
                        - Henry Scott, CEO
                    </h4>
                </div>

                {{-- Right column --}}
                <div class="flex justify-center lg:justify-end">
                    <img
                        src="{{ asset('assets/images/builderon-img01.png') }}"
                        alt=""
                        class="w-full max-w-[400px] object-contain"
                    >
                </div>
            </div>
        </div>
    </section>
    -->

    <!--
    <section class="bg-[#ffffff] pt-0 lg:pt-0 pb-8 lg:pb-8">
        <div class="mx-auto max-w-[1180px] px-0 sm:px-0 lg:px-0">
            <div class="bg-[#ffffff] px-10 py-12 shadow-[0_8px_24px_rgba(0,0,0,0.08)] lg:px-16 lg:py-14">
                <div class="grid items-center gap-10 sm:grid-cols-2 lg:grid-cols-4 lg:gap-16">
                    <div class="flex justify-center">
                        <img
                            src="{{asset('assets/images/builderon-img11.png') }}"
                            alt="American Construction Company"
                            class="h-[110px] w-auto object-contain opacity-80"
                        >
                    </div>

                    <div class="flex justify-center">
                        <img
                            src="{{asset('assets/images/builderon-img12.png') }}"
                            alt="Open House Real Estate"
                            class="h-[90px] w-auto object-contain opacity-80"
                        >
                    </div>

                    <div class="flex justify-center">
                        <img
                            src="{{asset('assets/images/builderon-img13.png') }}"
                            alt="American Real Estate"
                            class="h-[110px] w-auto object-contain opacity-80"
                        >
                    </div>

                    <div class="flex justify-center">
                        <img
                            src="{{asset('assets/images/builderon-img14.png') }}"
                            alt="Andina"
                            class="h-[80px] w-auto object-contain opacity-80"
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->

    <section class="relative overflow-hidden bg-[#ffffff] py-10 lg:pt-10 lg:pb-40 xl:pb-40">
        <div class="pointer-events-none absolute inset-0 overflow-hidden">
            <div class="absolute bottom-0 right-0 hidden h-[78%] w-[48%] opacity-[0.3] lg:block">
                <img
                    src="{{ asset('assets/images/builderon-img19.png') }}"
                    alt=""
                    class="h-full w-full object-contain object-bottom-right"
                >
            </div>
        </div>
        <div class="mx-auto max-w-[1180px] px-4 sm:px-6 lg:px-8">
            <div class="relative min-h-[760px]">
                {{-- Top image --}}
                <div class="absolute left-0 top-0 z-10 w-[430px] max-w-full lg:w-[456px]">
                    <img
                        src="{{ asset('assets/images/builderon-img17.jpg') }}"
                        alt=""
                        class="h-auto w-full object-cover"
                    >
                </div>

                {{-- Orange video block --}}
                <div class="absolute right-0 top-[60px] z-10 flex h-[430px] w-[480px] max-w-full items-center justify-center bg-[#FD5D14] lg:w-[520px]">
                    <a
                        href="https://www.youtube.com/embed/MLpWrANjFbI?autoplay=1&rel=0&controls=0"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="flex h-[96px] w-[96px] items-center justify-center rounded-full border-[5px] border-white/80 text-white transition hover:scale-105"
                    >
                        <svg viewBox="0 0 24 24" class="ml-1 h-10 w-10 fill-current" aria-hidden="true">
                            <path d="M8 5v14l11-7z"></path>
                        </svg>
                    </a>
                </div>

                {{-- White content card --}}
                <div class="absolute left-[48px] top-[195px] z-20 w-[540px] max-w-full bg-white px-11 py-12 shadow-[0_18px_45px_rgba(0,0,0,0.08)] lg:w-[620px]">
                    <h5 class="inline-block border-2 border-[#FD5D14] px-4 py-2 text-[15px] font-black uppercase leading-none tracking-[0.02em] text-[#FD5D14]">
                        Introduction
                    </h5>

                    <h3 class="mt-7 text-[34px] font-black uppercase leading-[1.02] tracking-[-0.03em] text-[#081a43] lg:text-[44px]">
                        How we became best among others?
                    </h3>

                    <p class="mt-6 max-w-[470px] text-[18px] leading-[1.6] text-[#555]">
                        Magina voluptatum doloriem! Dolores! Sociosqii commodiin nobis imperdiet lacinia? Magni! Felis,
                        elementum nobis imperdiet lacinia nobis imperdiet lacinia commodo nobis imper lacinia nobis imperd.
                    </p>

                    <ul class="mt-7 space-y-4 text-[17px] leading-[1.55] text-[#444]">
                        <li class="flex items-start gap-3">
                            <span class="mt-[10px] h-[3px] w-[14px] shrink-0 bg-[#FD5D14]"></span>
                            <span>Quality Control System, 100% Satisfaction Guarantee</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-[10px] h-[3px] w-[14px] shrink-0 bg-[#FD5D14]"></span>
                            <span>Highly Professional Staff, Accurate Testing Processes</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-[10px] h-[3px] w-[14px] shrink-0 bg-[#FD5D14]"></span>
                            <span>Unrivalled workmanship, Professional and Qualified</span>
                        </li>
                    </ul>

                    <a
                        href="#"
                        class="mt-10 inline-flex items-center justify-center bg-[#FD5D14] px-8 py-4 text-[17px] font-black uppercase tracking-[0.01em] text-white transition hover:bg-[#e45412]"
                    >
                        More About Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#f3f3f3] py-0">
        {{-- top torn edge --}}
        <div class="pointer-events-none absolute left-0 right-0 top-0 z-30 h-[140px] lg:h-[140px]">
            <img
                src="{{ asset('assets/images/builderon-img21.png') }}"
                alt=""
                class="h-full w-full rotate-180 object-cover object-top"
            >
        </div>

        {{-- main section --}}
        <div class="relative min-h-[800px] lg:min-h-[800px]">
            {{-- background image --}}
            <div class="absolute inset-0">
                <img
                    src="{{ asset('assets/images/builderon-img33.jpg') }}"
                    alt=""
                    class="h-full w-full object-cover"
                >
                <div class="absolute inset-0 bg-black/35"></div>
            </div>

            {{-- right decorative shape --}}
            <div class="pointer-events-none absolute inset-y-0 right-0 z-10 hidden w-[26%] lg:block">
                <img
                    src="{{ asset('assets/images/builderon-img24.png') }}"
                    alt=""
                    class="h-full w-full object-fill"
                >
            </div>

            <div class="relative z-20 mx-auto flex min-h-[700px] max-w-[1180px] items-center px-4 sm:px-6 lg:min-h-[700px] lg:px-8">
                <div class="grid w-full items-center gap-8 lg:grid-cols-[1.3fr_0.7fr]">
                    {{-- left orange card --}}
                    <div class="flex justify-start">
                        <div class="relative w-full max-w-[600px] bg-[#FD5D14] px-10 py-10 shadow-[0_18px_45px_rgba(0,0,0,0.16)] lg:px-10 lg:py-10 mt-20">
                            {{-- phone overlay inside card --}}
                            <div class="pointer-events-none absolute bottom-0 right-0 z-0 opacity-60">
                                <img
                                    src="{{ asset('assets/images/builderon-img22.png') }}"
                                    alt=""
                                    class="h-auto w-[190px] object-contain"
                                >
                            </div>

                            <div class="relative z-10">
                                <h5 class="inline-block border-2 border-white px-4 py-2 text-[14px] font-black uppercase leading-none tracking-[0.02em] text-white">
                                    Call To Action
                                </h5>

                                <h3 class="mt-8 text-[34px] font-black uppercase leading-[1.02] tracking-[-0.03em] text-white lg:text-[36px]">
                                    We believe building long lasting
                                </h3>

                                <h3 class="mt-4 text-[34px] font-black uppercase leading-[1.02] tracking-[-0.03em] text-[#081a43] lg:text-[36px]">
                                    Good Happy Business Relationships.
                                </h3>

                                <div class="mt-8 h-[4px] w-[230px] bg-[#081a43]"></div>

                                <h3 class="mt-8 text-[34px] font-black leading-none tracking-[-0.02em] text-white lg:text-[36px]">
                                    <a href="#" class="hover:opacity-90">(+984) 256 897 22</a>
                                </h3>

                                <h3 class="mt-6 text-[32px] font-black uppercase leading-none tracking-[-0.02em] text-white lg:text-[34px]">
                                    <a href="#" class="hover:opacity-90">info@gmail.com</a>
                                </h3>
                            </div>
                        </div>
                    </div>

                    {{-- right worker --}}
                    <div class="relative hidden min-h-[640px] lg:block mt-20">
                        <img
                            src="{{ asset('assets/images/builderon-img23.png') }}"
                            alt=""
                            class="absolute bottom-0 left-1/2 z-20 max-h-[610px] w-auto -translate-x-1/2 object-contain"
                        >
                    </div>
                </div>
            </div>
        </div>

        {{-- bottom torn edge --}}
        <div class="absolute bottom-0 left-0 right-0 z-30 h-[120px] lg:h-[170px] xl:h-[190px]">
            <img
                src="{{ asset('assets/images/builderon-img21.png') }}"
                alt=""
                class="h-full w-full object-cover object-top"
            >
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

        <div class="relative mx-auto max-w-[1180px] px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-[760px] text-center">
                <h5 class="inline-block border border-[#d8a06d] px-4 py-2 text-[14px] font-black uppercase leading-none tracking-[0.02em] text-[#c96a18]">
                    Construction Projects
                </h5>

                <h3 class="mt-6 text-[38px] font-black uppercase leading-none tracking-[-0.03em] text-[#081a43] lg:text-[56px]">
                    Our Recent Projects
                </h3>

                <p class="mx-auto mt-5 max-w-[760px] text-[18px] leading-[1.65] text-[#4d4d4d]">
                    Magna voluptatum dolorem! Dolores! Sociosqu commodo nobis imperdiet lacinia? Magni! Felis,
                    elementum nobis imperdiet lacinia nobis imperdiet lacinia.
                </p>
            </div>

            {{-- filter titles --}}
            <div class="mt-10 flex flex-wrap items-center justify-center gap-x-2 gap-y-4">
                <button
                    type="button"
                    class="bg-[#FD5D14] text-white px-5 py-3 text-xs font-bold uppercase tracking-[0.24em] shadow-sm ring-1 ring-slate-200 transition hover:bg-[#FD5D14] hover:text-white"
                >
                    All
                </button>

                <button
                    type="button"
                    class="bg-white text-slate-700 px-5 py-3 text-xs font-bold uppercase tracking-[0.24em] shadow-sm ring-1 ring-slate-200 transition hover:bg-[#FD5D14] hover:text-white"
                >
                    Construction
                </button>

                <button
                    type="button"
                    class="bg-white text-slate-700 px-5 py-3 text-xs font-bold uppercase tracking-[0.24em] shadow-sm ring-1 ring-slate-200 transition hover:bg-[#FD5D14] hover:text-white"
                >
                    Mechanical
                </button>

                <button
                    type="button"
                    class="bg-white text-slate-700 px-5 py-3 text-xs font-bold uppercase tracking-[0.24em] shadow-sm ring-1 ring-slate-200 transition hover:bg-[#FD5D14] hover:text-white"
                >
                    Consulting
                </button>
            </div>

            {{-- masonry-like gallery --}}
            <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
                {{-- Column 1 --}}
                <div class="grid gap-5">
                    <a href="{{ asset('assets/images/builderon-img27.jpg') }}" class="group relative block overflow-hidden">
                        <img
                            src="{{ asset('assets/images/builderon-img27.jpg') }}"
                            alt="Constructing Building"
                            class="h-auto w-full object-cover"
                        >

                        <div class="absolute inset-0 bg-slate-950/45 opacity-0 transition duration-300 group-hover:opacity-100"></div>

                        <div class="absolute inset-0 flex items-center justify-center px-6 text-center opacity-0 transition duration-300 group-hover:opacity-100">
                            <div>
                                <h4 class="text-[18px] font-black uppercase leading-tight text-white">
                                    Constructing Building
                                </h4>
                                <p class="mt-4 text-[16px] leading-[1.6] text-white">
                                    Lorem quam reprehenderit sunt posuere. Voluptatum justo, cillum ac nihil magni ut reprehenderit purus nibh sed, ornare etiam? Vehicula facilisi.
                                </p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ asset('assets/images/builderon-img30.jpg') }}" class="group relative block overflow-hidden">
                        <img
                            src="{{ asset('assets/images/builderon-img30.jpg') }}"
                            alt="Heavy-Duty Work"
                            class="h-auto w-full object-cover"
                        >

                        <div class="absolute inset-0 bg-slate-950/45 opacity-0 transition duration-300 group-hover:opacity-100"></div>

                        <div class="absolute inset-0 flex items-center justify-center px-6 text-center opacity-0 transition duration-300 group-hover:opacity-100">
                            <div>
                                <h4 class="text-[18px] font-black uppercase leading-tight text-white">
                                    Heavy-Duty Work
                                </h4>
                                <p class="mt-4 text-[16px] leading-[1.6] text-white">
                                    Lorem quam reprehenderit sunt posuere. Voluptatum justo, cillum ac nihil magni ut reprehenderit purus nibh sed, ornare etiam? Vehicula facilisi.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Column 2 --}}
                <div class="grid gap-5">
                    <a href="{{ asset('assets/images/builderon-img28.jpg') }}" class="group relative block overflow-hidden">
                        <img
                            src="{{ asset('assets/images/builderon-img28.jpg') }}"
                            alt="Mining Project"
                            class="h-auto w-full object-cover"
                        >

                        <div class="absolute inset-0 bg-slate-950/45 opacity-0 transition duration-300 group-hover:opacity-100"></div>

                        <div class="absolute inset-0 flex items-center justify-center px-6 text-center opacity-0 transition duration-300 group-hover:opacity-100">
                            <div>
                                <h4 class="text-[18px] font-black uppercase leading-tight text-white">
                                    Mining Project
                                </h4>
                                <p class="mt-4 text-[16px] leading-[1.6] text-white">
                                    Lorem quam reprehenderit sunt posuere. Voluptatum justo, cillum ac nihil magni ut reprehenderit purus nibh sed, ornare etiam? Vehicula facilisi.
                                </p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ asset('assets/images/builderon-img35.jpg') }}" class="group relative block overflow-hidden">
                        <img
                            src="{{ asset('assets/images/builderon-img35.jpg') }}"
                            alt="Building Project"
                            class="h-auto w-full object-cover"
                        >

                        <div class="absolute inset-0 bg-slate-950/45 opacity-0 transition duration-300 group-hover:opacity-100"></div>

                        <div class="absolute inset-0 flex items-center justify-center px-6 text-center opacity-0 transition duration-300 group-hover:opacity-100">
                            <div>
                                <h4 class="text-[18px] font-black uppercase leading-tight text-white">
                                    Building Project
                                </h4>
                                <p class="mt-4 text-[16px] leading-[1.6] text-white">
                                    Lorem quam reprehenderit sunt posuere. Voluptatum justo, cillum ac nihil magni ut reprehenderit purus nibh sed, ornare etiam? Vehicula facilisi.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Column 3 --}}
                <div class="grid gap-5 md:col-span-2 xl:col-span-1">
                    <a href="{{ asset('assets/images/builderon-img29.jpg') }}" class="group relative block overflow-hidden">
                        <img
                            src="{{ asset('assets/images/builderon-img29.jpg') }}"
                            alt="Metal Engineering"
                            class="h-auto w-full object-cover"
                        >

                        <div class="absolute inset-0 bg-slate-950/45 opacity-0 transition duration-300 group-hover:opacity-100"></div>

                        <div class="absolute inset-0 flex items-center justify-center px-6 text-center opacity-0 transition duration-300 group-hover:opacity-100">
                            <div>
                                <h4 class="text-[18px] font-black uppercase leading-tight text-white">
                                    Metal Engineering
                                </h4>
                                <p class="mt-4 text-[16px] leading-[1.6] text-white">
                                    Lorem quam reprehenderit sunt posuere. Voluptatum justo, cillum ac nihil magni ut reprehenderit purus nibh sed, ornare etiam? Vehicula facilisi.
                                </p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ asset('assets/images/builderon-img34.jpg') }}" class="group relative block overflow-hidden">
                        <img
                            src="{{ asset('assets/images/builderon-img34.jpg') }}"
                            alt="Painting Project"
                            class="h-auto w-full object-cover"
                        >

                        <div class="absolute inset-0 bg-slate-950/45 opacity-0 transition duration-300 group-hover:opacity-100"></div>

                        <div class="absolute inset-0 flex items-center justify-center px-6 text-center opacity-0 transition duration-300 group-hover:opacity-100">
                            <div>
                                <h4 class="text-[18px] font-black uppercase leading-tight text-white">
                                    Painting Project
                                </h4>
                                <p class="mt-4 text-[16px] leading-[1.6] text-white">
                                    Lorem quam reprehenderit sunt posuere. Voluptatum justo, cillum ac nihil magni ut reprehenderit purus nibh sed, ornare etiam? Vehicula facilisi.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>



    @php
        $testimonials = [
            [
                'name' => 'Sammy james',
                'title' => 'Customer',
                'image' => asset('assets/images/builderon-img38.png'),
                'text' => '"Tempora illo placeat do senectus atque? Corporis ratione dolore? Elit quia, expedita? Eget tellus lorem amet ducimus ipsa duis malesuada urna dolorum! Dapibus lacinia bibendum, dictumst! Fuga cillum platea, odit facilisi dictumst!"',
            ],
            [
                'name' => 'Alison White',
                'title' => 'Customer',
                'image' => asset('assets/images/builderon-img36.png'),
                'text' => '"Tempora illo placeat do senectus atque? Corporis ratione dolore? Elit quia, expedita? Eget tellus lorem amet ducimus ipsa duis malesuada urna dolorum! Dapibus lacinia bibendum, dictumst! Fuga cillum platea, odit facilisi dictumst!"',
            ],
            [
                'name' => 'Author Smith',
                'title' => 'Customer',
                'image' => asset('assets/images/builderon-img37.png'),
                'text' => '"Tempora illo placeat do senectus atque? Corporis ratione dolore? Elit quia, expedita? Eget tellus lorem amet ducimus ipsa duis malesuada urna dolorum! Dapibus lacinia bibendum, dictumst! Fuga cillum platea, odit facilisi dictumst!"',
            ],
        ];
    @endphp

    <section class="relative overflow-hidden bg-[#ffffff] pt-12 pb-20 lg:pt-12 lg:pb-24">
        <div class="mx-auto max-w-[1180px] px-4 sm:px-6 lg:px-8">
            <div class="relative grid items-start gap-0 lg:grid-cols-2">
                {{-- Left orange testimonial panel --}}
                <div
                    x-data="{
                        active: 0,
                        total: {{ count($testimonials) }},
                        timer: null,
                        start() {
                            this.timer = setInterval(() => {
                                this.active = (this.active + 1) % this.total
                            }, 5000)
                        },
                        stop() {
                            if (this.timer) clearInterval(this.timer)
                        },
                        go(index) {
                            this.active = index
                        }
                    }"
                    x-init="start()"
                    @mouseenter="stop()"
                    @mouseleave="start()"
                    class="relative z-10 bg-[#FD5D14] px-10 py-12 text-white shadow-[0_18px_45px_rgba(0,0,0,0.08)] lg:-mr-[70px] lg:px-12 lg:py-12"
                >
                    {{-- faint panel overlay image --}}
                    <div class="pointer-events-none absolute inset-0 opacity-10">
                        <img
                            src="{{ asset('assets/images/builderon-img02.png') }}"
                            alt=""
                            class="h-full w-full object-cover object-right-bottom"
                        >
                    </div>

                    <div class="relative z-10">
                        <h5 class="inline-block border-2 border-white px-4 py-2 text-[14px] font-black uppercase leading-none tracking-[0.02em] text-white">
                            Testimonials
                        </h5>

                        <h3 class="mt-7 text-[32px] font-black uppercase leading-[1.02] tracking-[-0.03em] text-white lg:text-[40px]">
                            Appreciated by<br>our clients
                        </h3>

                        {{-- slider viewport --}}
                        <div class="mt-10 overflow-hidden">
                            <div
                                class="flex transition-transform duration-500 ease-in-out"
                                :style="`transform: translateX(-${active * 100}%);`"
                            >
                                @foreach ($testimonials as $testimonial)
                                    <div class="w-full shrink-0">
                                        <div class="max-w-[360px]">
                                            <img
                                                src="{{ $testimonial['image'] }}"
                                                alt="{{ $testimonial['name'] }}"
                                                class="h-[100px] w-[100px] rounded-full object-cover"
                                            >

                                            <div class="mt-8 text-[17px] italic leading-[1.7] text-orange-50">
                                                {{ $testimonial['text'] }}
                                            </div>

                                            <div class="mt-8">
                                                <div class="text-[20px] font-black italic leading-none text-white">
                                                    {{ $testimonial['name'] }}
                                                </div>
                                                <div class="mt-2 text-[15px] italic leading-none text-orange-100">
                                                    {{ $testimonial['title'] }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- bullets --}}
                        <div class="mt-8 flex items-center justify-center gap-3 lg:justify-start">
                            @foreach ($testimonials as $index => $testimonial)
                                <button
                                    type="button"
                                    @click="go({{ $index }})"
                                    class="h-[10px] w-[10px] rounded-full transition"
                                    :class="active === {{ $index }} ? 'bg-white' : 'bg-[#3f3f3f]'"
                                    aria-label="Go to slide {{ $index + 1 }}"
                                ></button>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Right large image --}}
                <div class="relative z-20 min-h-[700px] lg:min-h-[700px] lg:mt-[60px]">
                    <div
                        class="h-full min-h-[700px] bg-cover bg-center lg:min-h-[700px]"
                        style="background-image: url('{{ asset('assets/images/builderon-img39.jpg') }}');"
                    ></div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="relative overflow-hidden"
        style="
        margin-top: -12%;
        margin-bottom: 0;
        padding: 215px 0 208px 0;
        background-image: url('{{ asset('assets/images/builderon-img041.jpg') }}');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    "
    >
        {{-- dark overlay --}}
        <div class="absolute inset-0" style="background-color: #000000; opacity: 0.75;"></div>

        <div class="relative mx-auto max-w-[1180px] px-4 sm:px-6 lg:px-8">
            <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-4">
                {{-- Happy Customers --}}
                <div class="text-center" style="background-color: rgba(3, 15, 39, 0.65); border: 2px solid rgba(253, 93, 20, 0.48); padding: 50px 20px 40px 20px;">
                    <div class="flex justify-center">
                        <i class="fas fa-users text-[60px]" style="color: #FD5D14;" aria-hidden="true"></i>
                    </div>

                    <div class="mt-6 text-[34px] font-black leading-none text-white"> 15,000+</div>
                    <div class="mt-3 text-[16px] leading-[1.4] text-white">Happy Customers</div>
                </div>

                {{-- Projects Done --}}
                <div class="text-center" style="background-color: rgba(3, 15, 39, 0.65); border: 2px solid rgba(253, 93, 20, 0.48); padding: 50px 20px 40px 20px;">
                    <div class="flex justify-center">
                        <i class="fas fa-project-diagram text-[60px]" style="color: #FD5D14;" aria-hidden="true"></i>
                    </div>

                    <div class="mt-6 text-[34px] font-black leading-none text-white">2,800+</div>
                    <div class="mt-3 text-[16px] leading-[1.4] text-white">Projects Done</div>
                </div>

                {{-- Qualified Employees --}}
                <div class="text-center" style="background-color: rgba(3, 15, 39, 0.65); border: 2px solid rgba(253, 93, 20, 0.48); padding: 50px 20px 40px 20px;">
                    <div class="flex justify-center">
                        <i class="fas fa-users-cog text-[60px]" style="color: #FD5D14;" aria-hidden="true"></i>
                    </div>

                    <div class="mt-6 text-[34px] font-black leading-none text-white">750+</div>
                    <div class="mt-3 text-[16px] leading-[1.4] text-white">Qualified Employees</div>
                </div>

                {{-- Office Branches --}}
                <div class="text-center" style="background-color: rgba(3, 15, 39, 0.65); border: 2px solid rgba(253, 93, 20, 0.48); padding: 50px 20px 40px 20px;">
                    <div class="flex justify-center">
                        <i class="fas fa-network-wired text-[60px]" style="color: #FD5D14;" aria-hidden="true"></i>
                    </div>

                    <div class="mt-6 text-[34px] font-black leading-none text-white">88+</div>
                    <div class="mt-3 text-[16px] leading-[1.4] text-white">Office Branches</div>
                </div>
            </div>
        </div>

        {{-- bottom torn edge --}}
        <div class="absolute bottom-0 left-0 right-0 z-10 h-[120px] lg:h-[170px] xl:h-[190px]">
            <img
                src="{{ asset('assets/images/builderon-img21.png') }}"
                alt=""
                class="h-full w-full object-cover object-top"
            >
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#ffffff]" style="margin-top: 20px; margin-bottom: 20px;">
        {{-- dotted background pattern --}}
        <div class="pointer-events-none absolute inset-0 opacity-[0.08]">
            <img src="{{ asset('assets/images/builderon-img055.png') }}" alt="" class="h-full w-full object-cover object-center">
        </div>

        <div class="relative mx-auto max-w-[1180px] px-4 py-20 sm:px-6 lg:px-8 lg:py-24">
            {{-- top row --}}
            <div
                class="grid gap-8 lg:grid-cols-[65%_35%]"
            >
                {{-- left text area --}}
                <div class="flex justify-center lg:justify-start">
                    <div class="w-full max-w-[760px]">
                        <h5
                            class="inline-block border border-[#d79a67]
                               px-4 py-2 text-[14px]
                               font-black uppercase leading-none
                               tracking-[0.02em] text-[#c96a18]"
                        >
                            Latest Blog
                        </h5>

                        <h3
                            class="mt-7 text-[20px] font-black uppercase
                               leading-[1.02] tracking-[-0.03em]
                               text-[#081a43] lg:text-[32px]"
                        >
                            Learn More From Our Blog
                        </h3>

                        <p
                            class="mt-6 max-w-[760px] text-[17px]
                               leading-[1.7] text-[#4d4d4d]"
                        >
                            Magna voluptatum dolorem! Dolores!
                            Sociosqu commodo nobis imperdiet
                            lacinia? Magni! Felis, elementum nobis
                            imperdiet lacinia nobis imperdiet
                            lacinia.
                        </p>
                    </div>
                </div>

                {{-- right button --}}
                <div class="flex items-start justify-start pt-[10px] lg:justify-end lg:me-[30px]">
                    <a
                        href="#"
                        class="inline-flex items-center justify-center
                           bg-[#FD5D14] px-[25px] py-[18px]
                           text-[16px] font-black uppercase
                           leading-none text-white transition
                           hover:bg-[#e45412]"
                    >
                        View All Blog
                    </a>
                </div>
            </div>

            {{-- posts --}}
            <div
                class="mt-14 grid gap-[35px]
                   md:grid-cols-2 lg:grid-cols-3"
            >
                {{-- post 1 --}}
                <article
                    class="overflow-hidden border border-[#e6b08a]
                       bg-[#ffffff]"
                >
                    <a
                        href="#"
                        class="block"
                        target="_blank"
                    >
                        <div class="aspect-[1/0.8] overflow-hidden">
                            <img
                                src="{{ asset('assets/images/builderon-img74.jpg') }}"
                                alt="Construction is hard working project"
                                class="h-full w-full object-cover"
                            >
                        </div>
                    </a>

                    <div class="px-6 pb-7 pt-6">
                        <h5
                            class="text-[20px] font-bold uppercase
                               leading-[1.18] text-[#081a43]"
                        >
                            <a href="#" target="_blank">
                                Construction Is Hard
                                Working Project
                            </a>
                        </h5>

                        <div
                            class="mt-5 text-[16px]
                               leading-[1.7] text-[#4d4d4d]"
                        >
                            <p>
                                Praesent, congue cubilia id rem a.
                                Justo scelerisque beatae cupiditate
                                autem do, porro? Porro corrupti,
                            </p>
                        </div>

                        <a
                            href="#"
                            target="_blank"
                            class="mt-5 inline-block text-[16px]
                               font-bold uppercase leading-none
                               text-[#FD5D14] transition
                               hover:text-[#e45412]"
                        >
                            Read More
                        </a>
                    </div>
                </article>

                {{-- post 2 --}}
                <article
                    class="overflow-hidden border border-[#e6b08a]
                       bg-[#ffffff]"
                >
                    <a
                        href="#"
                        class="block"
                        target="_blank"
                    >
                        <div class="aspect-[1/0.8] overflow-hidden">
                            <img
                                src="{{ asset('assets/images/builderon-img73.jpg') }}"
                                alt="Building the construction project"
                                class="h-full w-full object-cover"
                            >
                        </div>
                    </a>

                    <div class="px-6 pb-7 pt-6">
                        <h5
                            class="text-[20px] font-bold uppercase
                               leading-[1.18] text-[#081a43]"
                        >
                            <a href="#" target="_blank">
                                Building The Construction
                                Project
                            </a>
                        </h5>

                        <div
                            class="mt-5 text-[16px]
                               leading-[1.7] text-[#4d4d4d]"
                        >
                            <p>
                                Praesent, congue cubilia id rem a.
                                Justo scelerisque beatae cupiditate
                                autem do, porro? Porro corrupti,
                            </p>
                        </div>

                        <a
                            href="#"
                            target="_blank"
                            class="mt-5 inline-block text-[16px]
                               font-bold uppercase leading-none
                               text-[#FD5D14] transition
                               hover:text-[#e45412]"
                        >
                            Read More
                        </a>
                    </div>
                </article>

                {{-- post 3 --}}
                <article
                    class="overflow-hidden border border-[#e6b08a]
                       bg-[#ffffff]"
                >
                    <a
                        href="#"
                        class="block"
                        target="_blank"
                    >
                        <div class="aspect-[1/0.8] overflow-hidden">
                            <img
                                src="{{ asset('assets/images/builderon-img75.jpg') }}"
                                alt="Discussing project with teammates"
                                class="h-full w-full object-cover"
                            >
                        </div>
                    </a>

                    <div class="px-6 pb-7 pt-6">
                        <h5
                            class="text-[20px] font-bold uppercase
                               leading-[1.18] text-[#081a43]"
                        >
                            <a href="#" target="_blank">
                                Discussing Project With
                                Teammates
                            </a>
                        </h5>

                        <div
                            class="mt-5 text-[16px]
                               leading-[1.7] text-[#4d4d4d]"
                        >
                            <p>
                                Praesent, congue cubilia id rem a.
                                Justo scelerisque beatae cupiditate
                                autem do, porro? Porro corrupti,
                            </p>
                        </div>

                        <a
                            href="#"
                            target="_blank"
                            class="mt-5 inline-block text-[16px]
                               font-bold uppercase leading-none
                               text-[#FD5D14] transition
                               hover:text-[#e45412]"
                        >
                            Read More
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>


    <section class="relative overflow-hidden bg-[#f3f3f3] py-0">
        {{-- top torn edge --}}
        <div class="pointer-events-none absolute left-0 right-0 top-0 z-30 h-[140px] lg:h-[140px]">
            <img
                src="{{ asset('assets/images/builderon-img21.png') }}"
                alt=""
                class="h-full w-full rotate-180 object-cover object-top"
            >
        </div>

        {{-- main section --}}
        <div class="relative min-h-[400px] lg:min-h-[400px]">
            {{-- background image --}}
            <div class="absolute inset-0">
                <img
                    src="{{ asset('assets/images/builderon-img43.jpg') }}"
                    alt=""
                    class="h-full w-full object-cover"
                >
                <div class="absolute inset-0 bg-black/35"></div>
            </div>
        </div>
    </section>

    <section
        class="bg-[#ffffff]"
        style="
        margin-top: -149px;
        margin-bottom: 0;
        padding: 0 15px 100px 15px;
    "
    >
        <div class="mx-auto max-w-[1180px] px-4 sm:px-6 lg:px-8">
            <div class="grid gap-10 lg:grid-cols-2">
                {{-- LEFT COLUMN --}}
                <div class="lg:mr-[50px] z-20">
                    {{-- top strip --}}
                    <div class="grid grid-cols-2 gap-0">
                        {{-- image block --}}
                        <div class="min-h-[168px] bg-cover bg-top" style=" background-image: url('{{ asset('assets/images/builderon-img44.jpg') }}');">
                            <div class="h-[50px]"></div>
                        </div>

                        {{-- orange text block --}}
                        <div
                            class="flex items-center bg-[#FD5D14]
                               px-[30px] py-[40px]"
                        >
                            <h4
                                class="text-[18px] font-bold uppercase
                                   leading-[1.2] text-white"
                            >
                                We Are Servicing
                                <br>
                                In More Than 100
                                <br>
                                Countries
                            </h4>
                        </div>
                    </div>

                    {{-- faq list --}}
                    <div class="pt-10">
                        {{-- item 1 --}}
                        <details
                            class="mb-5 bg-white shadow-[0_0_13px_-4px_rgba(0,0,0,0.2)]"
                        >
                            <summary
                                class="flex cursor-pointer list-none
                                   items-center justify-between
                                   px-[22px] py-[22px]
                                   text-[16px] font-bold uppercase
                                   text-[#081a43]"
                            >
                            <span>
                                How We Became Best Among Others?
                            </span>

                                <i
                                    class="fas fa-angle-down text-[#081a43]"
                                    aria-hidden="true"
                                ></i>
                            </summary>

                            <div
                                class="px-5 pb-5 text-[16px]
                                   leading-[1.7] text-[#4d4d4d]"
                            >
                                <p>
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit.
                                    Ut elit tellus, luctus nec
                                    ullamcorper mattis, pulvinar
                                    dapibus leo.
                                </p>
                            </div>
                        </details>

                        {{-- item 2 --}}
                        <details
                            class="mb-5 bg-white shadow-[0_0_13px_-4px_rgba(0,0,0,0.2)]"
                        >
                            <summary
                                class="flex cursor-pointer list-none
                                   items-center justify-between
                                   px-[22px] py-[22px]
                                   text-[16px] font-bold uppercase
                                   text-[#081a43]"
                            >
                            <span>
                                Why Choose Us For Your Projects?
                            </span>

                                <i
                                    class="fas fa-angle-down text-[#081a43]"
                                    aria-hidden="true"
                                ></i>
                            </summary>

                            <div
                                class="px-5 pb-5 text-[16px]
                                   leading-[1.7] text-[#4d4d4d]"
                            >
                                <p>
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit.
                                    Ut elit tellus, luctus nec
                                    ullamcorper mattis, pulvinar
                                    dapibus leo.
                                </p>
                            </div>
                        </details>

                        {{-- item 3 --}}
                        <details
                            class="mb-5 bg-white shadow-[0_0_13px_-4px_rgba(0,0,0,0.2)]"
                        >
                            <summary
                                class="flex cursor-pointer list-none
                                   items-center justify-between
                                   px-[22px] py-[22px]
                                   text-[16px] font-bold uppercase
                                   text-[#081a43]"
                            >
                            <span>
                                What We Offer To You?
                            </span>

                                <i
                                    class="fas fa-angle-down text-[#081a43]"
                                    aria-hidden="true"
                                ></i>
                            </summary>

                            <div
                                class="px-5 pb-5 text-[16px]
                                   leading-[1.7] text-[#4d4d4d]"
                            >
                                <p>
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit.
                                    Ut elit tellus, luctus nec
                                    ullamcorper mattis, pulvinar
                                    dapibus leo.
                                </p>
                            </div>
                        </details>

                        {{-- item 4 --}}
                        <details
                            class="mb-5 bg-white shadow-[0_0_13px_-4px_rgba(0,0,0,0.2)]"
                        >
                            <summary
                                class="flex cursor-pointer list-none
                                   items-center justify-between
                                   px-[22px] py-[22px]
                                   text-[16px] font-bold uppercase
                                   text-[#081a43]"
                            >
                            <span>
                                How We Provide Services For You?
                            </span>

                                <i
                                    class="fas fa-angle-down text-[#081a43]"
                                    aria-hidden="true"
                                ></i>
                            </summary>

                            <div
                                class="px-5 pb-5 text-[16px]
                                   leading-[1.7] text-[#4d4d4d]"
                            >
                                <p>
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit.
                                    Ut elit tellus, luctus nec
                                    ullamcorper mattis, pulvinar
                                    dapibus leo.
                                </p>
                            </div>
                        </details>

                        {{-- item 5 --}}
                        <details
                            class="bg-white shadow-[0_0_13px_-4px_rgba(0,0,0,0.2)]"
                        >
                            <summary
                                class="flex cursor-pointer list-none
                                   items-center justify-between
                                   px-[22px] py-[22px]
                                   text-[16px] font-bold uppercase
                                   text-[#081a43]"
                            >
                            <span>
                                Are We Affordable To Hire?
                            </span>

                                <i
                                    class="fas fa-angle-down text-[#081a43]"
                                    aria-hidden="true"
                                ></i>
                            </summary>

                            <div
                                class="px-5 pb-5 text-[16px]
                                   leading-[1.7] text-[#4d4d4d]"
                            >
                                <p>
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit.
                                    Ut elit tellus, luctus nec
                                    ullamcorper mattis, pulvinar
                                    dapibus leo.
                                </p>
                            </div>
                        </details>
                    </div>
                </div>

                {{-- RIGHT COLUMN --}}
                <div class=" z-20">
                    <div
                        class="bg-white px-[40px] py-[50px]
                           shadow-[0_0_30px_0_rgba(0,0,0,0.15)]"
                    >
                        {{-- title bar --}}
                        <div
                            class="mx-[10px] bg-[#081a43]
                               px-[17px] py-[17px] text-center"
                        >
                            <h4
                                class="text-[22px] font-bold uppercase
                                   text-white"
                            >
                                Contact &amp; Hire Us
                            </h4>
                        </div>

                        {{-- form --}}
                        <form
                            action="#"
                            method="POST"
                            class="mx-[10px] mt-[15px]"
                        >
                            @csrf

                            <div class="mb-5">
                                <input
                                    id="name"
                                    name="name"
                                    type="text"
                                    placeholder="Your Name*"
                                    required
                                    class="w-full border-0 bg-[#f4f4f4]
                                       px-5 py-5 text-[16px]
                                       text-[#081a43] outline-none"
                                >
                            </div>

                            <div class="mb-5">
                                <input
                                    id="email"
                                    name="email"
                                    type="email"
                                    placeholder="Your Email*"
                                    required
                                    class="w-full border-0 bg-[#f4f4f4]
                                       px-5 py-5 text-[16px]
                                       text-[#081a43] outline-none"
                                >
                            </div>

                            <div class="mb-5">
                                <input
                                    id="phone"
                                    name="phone"
                                    type="number"
                                    placeholder="Your Number*"
                                    required
                                    class="w-full border-0 bg-[#f4f4f4]
                                       px-5 py-5 text-[16px]
                                       text-[#081a43] outline-none"
                                >
                            </div>

                            <div class="mb-5">
                            <textarea
                                id="message"
                                name="message"
                                rows="6"
                                placeholder="Enter your message"
                                class="w-full border-0 bg-[#f4f4f4]
                                       px-5 py-5 text-[16px]
                                       text-[#081a43] outline-none"
                            ></textarea>
                            </div>

                            <div class="pt-1">
                                <button
                                    type="submit"
                                    class="inline-flex items-center
                                       justify-center bg-[#FD5D14]
                                       px-10 py-4 text-[16px]
                                       font-bold uppercase
                                       text-white transition
                                       hover:bg-[#e45412]"
                                >
                                    Submit Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
