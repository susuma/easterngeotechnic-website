@extends('layouts.app')

@section('title', 'Eastern Geotechnics Limited')
@section('meta_description', 'Eastern Geotechnics Limited provides geotechnical investigations, borehole drilling, in-situ testing, geophysics studies, and engineering support across Tanzania.')

@section('content')
    @php
        $services = [
            ['icon' => 'builderon-img5.png', 'title' => 'Geotechnical Engineering', 'text' => 'Foundation investigation, pavement assessment, slope stability design, and centerline investigation.'],
            ['icon' => 'builderon-img6.png', 'title' => 'Borehole Drilling', 'text' => 'Borehole investigation and rotary coring drilling for reliable subsurface information.'],
            ['icon' => 'builderon-img7.png', 'title' => 'In-Situ Testing', 'text' => 'Plate load tests, PANDA tests, field instrumentation, and soil resistivity testing.'],
            ['icon' => 'builderon-img8.png', 'title' => 'Geophysics Study', 'text' => 'Ground investigation support to clarify hidden subsurface conditions before construction.'],
        ];

        $projects = [
            ['image' => 'builderon-img27.jpg', 'title' => 'Foundation Investigation', 'text' => 'Subsurface data for safe and economical foundation decisions.'],
            ['image' => 'builderon-img30.jpg', 'title' => 'Pavement Assessment', 'text' => 'Field testing and interpretation for road and pavement works.'],
            ['image' => 'builderon-img28.jpg', 'title' => 'Borrow Pit Investigation', 'text' => 'Material inventory and source evaluation for construction planning.'],
            ['image' => 'builderon-img35.jpg', 'title' => 'Borehole Drilling', 'text' => 'Investigation drilling and sampling for project design teams.'],
            ['image' => 'builderon-img29.jpg', 'title' => 'Geophysics Study', 'text' => 'Non-intrusive study support for ground condition screening.'],
            ['image' => 'builderon-img34.jpg', 'title' => 'Slope Stability', 'text' => 'Field inputs and design support for earthworks and slopes.'],
        ];

        $faqs = [
            [
                'q' => 'Why choose EGL for your project?',
                'a' => 'Experience in similar projects.
                        Availability of drilling rigs and laboratory facilities.
                        Compliance with international standards (e.g., Eurocode 7, ASTM, BS standards).
                        Strong health, safety, and environmental performance.
                        EGL combines practical drilling capability, professional testing, responsive service,
                        and local Tanzania project experience.'
            ],
            [
                'q' => 'What services can EGL provide?',
                'a' => 'The team supports geotechnical engineering, geological engineering, borehole drilling, geophysics,
                        material inventory, in-situ testing, supply of materials and equipment related to drilling,
                        from all kind of core barrel, drilling rods, drilling additives like COATED BENTONITE PELLETS, BENTONITE CHIPS,
                        Bentonite powder, geological exploration, drilling bits'
            ],
            [
                'q' => 'What drilling capacity is available?',
                'a' => 'The profile notes deployable drilling teams with drilling depth capacity of up to 300m.'
            ],
        ];
    @endphp

    <section class="relative isolate min-h-[800px] overflow-hidden bg-slate-950 text-white">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/images/builderon-img1.jpg') }}" alt="Geotechnical field team" class="h-full w-full object-cover">
            <div class="absolute inset-0 bg-black/55"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-slate-950/20 via-slate-950/25 to-slate-950/60"></div>
        </div>

        <div class="relative mx-auto flex min-h-[800px] max-w-7xl items-center px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
            <div class="w-full text-center">
                <div class="mx-auto max-w-4xl">
                    <p class="text-sm font-black uppercase tracking-[0.32em] text-[#FFA729]">Geotechnical Investigation Services Provider</p>
                    <h1 class="mt-6 text-4xl font-black uppercase leading-[0.98] sm:text-5xl lg:text-6xl">
                        Professional Geotechnical, Drilling & Testing Services Across Tanzania
                    </h1>
                    <p class="mx-auto mt-6 max-w-3xl text-base leading-8 text-slate-100 lg:text-lg">
                        Eastern Geotechnics Limited provides reliable geotechnical investigation, borehole drilling, in-situ testing, geophysics study, and engineering support for project teams.
                    </p>
                    <div class="mt-10 flex flex-wrap justify-center gap-4">
                        <a href="#services" class="inline-flex items-center justify-center bg-[#FFA729] px-8 py-4 text-xs font-bold uppercase tracking-[0.22em] text-white transition hover:bg-[#D98200]">Explore Services</a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center border border-white/35 px-8 py-4 text-xs font-bold uppercase tracking-[0.22em] text-white transition hover:bg-white/10">Request Consultation</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 right-0 z-10 h-[120px] lg:h-[170px] xl:h-[190px]">
            <img src="{{ asset('assets/images/builderon-img30.png') }}" alt="" class="h-full w-full object-cover object-top">
        </div>
    </section>

    <section id="services" class="relative overflow-hidden bg-[#FFA729] py-16 text-white lg:pt-0 lg:pb-24">
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 lg:min-h-[450px]">
            <div class="grid gap-10 lg:grid-cols-[1fr_2fr] lg:gap-8">
                <div class="flex">
                    <div class="my-auto max-w-md">
                        <h2 class="text-3xl font-black uppercase leading-tight sm:text-4xl">Why choose us<br>for projects?</h2>
                        <p class="mt-5 text-base leading-8 text-orange-50/95">
                            EGL delivers high-quality professional investigations, testing, and field support with a focus on responsive service, value, and technical competence.
                        </p>
                        <a href="{{ route('services') }}" class="mt-8 inline-flex items-center border border-white/30 px-6 py-3 text-sm font-bold uppercase tracking-[0.22em] text-white transition hover:bg-white/10">View all services</a>
                    </div>
                </div>

                <div class="space-y-5">
                    <div class="grid gap-5 sm:grid-cols-2">
                        @foreach ($services as $service)
                            <article class="bg-slate-950/95 p-6 shadow-2xl">
                                <div class="flex items-start gap-4">
                                    <img src="{{ asset('assets/images/' . $service['icon']) }}" alt="" class="h-16 w-16 shrink-0 object-contain">
                                    <div>
                                        <h3 class="text-xl font-black uppercase leading-tight">{{ $service['title'] }}</h3>
                                        <p class="mt-3 text-sm leading-7 text-slate-300">{{ $service['text'] }}</p>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 right-0 z-10 h-[120px] lg:h-[170px] xl:h-[190px]">
            <img src="{{ asset('assets/images/builderon-img21.png') }}" alt="" class="h-full w-full object-cover object-top">
        </div>
    </section>

    <section class="relative overflow-hidden bg-white py-14 lg:pt-10 lg:pb-40">
        <div class="pointer-events-none absolute inset-0 overflow-hidden">
            <div class="absolute bottom-0 right-0 hidden h-[78%] w-[48%] opacity-[0.3] lg:block">
                <img src="{{ asset('assets/images/builderon-img19.png') }}" alt="" class="h-full w-full object-contain object-bottom-right">
            </div>
        </div>

        <div class="mx-auto max-w-[1180px] px-4 sm:px-6 lg:px-8">
            <div class="relative lg:min-h-[760px]">
                <div class="relative z-10 max-w-full lg:absolute lg:left-0 lg:top-0 lg:w-[456px]">
                    <img src="{{ asset('assets/images/builderon-img17.jpg') }}" alt="Eastern Geotechnics field investigation" class="h-auto w-full object-cover">
                </div>

                <div class="mt-6 bg-[#FFA729] px-8 py-12 text-white lg:absolute lg:right-0 lg:top-[60px] lg:z-10 lg:mt-0 lg:flex lg:h-[430px] lg:w-[520px] lg:items-center lg:justify-center">
                    <div class="max-w-[360px]">
                        <p class="text-sm font-black uppercase tracking-[0.24em] text-orange-100">Established 2024</p>
                        <h3 class="mt-5 text-4xl font-black uppercase leading-tight">Fast-growing Tanzanian geotechnical contractor</h3>
                    </div>
                </div>

                <div class="relative z-20 mt-6 bg-white px-7 py-10 shadow-[0_18px_45px_rgba(0,0,0,0.12)] lg:absolute lg:left-[48px] lg:top-[195px] lg:mt-0 lg:w-[620px] lg:px-11 lg:py-12">
                    <p class="inline-block border-2 border-[#FFA729] px-4 py-2 text-[15px] font-black uppercase leading-none text-[#FFA729]">Introduction</p>
                    <h2 class="mt-7 text-[32px] font-black uppercase leading-[1.05] text-[#081a43] lg:text-[44px]">Engineering confidence from the ground up</h2>
                    <p class="mt-6 max-w-[500px] text-[18px] leading-[1.65] text-[#555]">
                        Eastern Geotechnics Limited provides high-quality professional geotechnical investigations and testing services to clients across Tanzania.
                    </p>
                    <ul class="mt-7 space-y-4 text-[17px] leading-[1.55] text-[#444]">
                        <li class="flex items-start gap-3"><span class="mt-[10px] h-[3px] w-[14px] shrink-0 bg-[#FFA729]"></span><span>Foundation, pavement, slope, and centerline investigations</span></li>
                        <li class="flex items-start gap-3"><span class="mt-[10px] h-[3px] w-[14px] shrink-0 bg-[#FFA729]"></span><span>Borehole drilling, geophysics, and in-situ testing</span></li>
                        <li class="flex items-start gap-3"><span class="mt-[10px] h-[3px] w-[14px] shrink-0 bg-[#FFA729]"></span><span>Integrity, excellence, teamwork, and safety in field delivery</span></li>
                    </ul>
                    <a href="{{ route('about') }}" class="mt-10 inline-flex items-center justify-center bg-[#FFA729] px-8 py-4 text-[16px] font-black uppercase text-white transition hover:bg-[#D98200]">More About Us</a>
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#f3f3f3] py-0">
        <div class="pointer-events-none absolute left-0 right-0 top-0 z-30 h-[120px] lg:h-[140px]">
            <img src="{{ asset('assets/images/builderon-img21.png') }}" alt="" class="h-full w-full rotate-180 object-cover object-top">
        </div>

        <div class="relative min-h-[780px]">
            <div class="absolute inset-0">
                <img src="{{ asset('assets/images/builderon-img33.jpg') }}" alt="" class="h-full w-full object-cover">
                <div class="absolute inset-0 bg-black/45"></div>
            </div>
            <div class="pointer-events-none absolute inset-y-0 right-0 z-10 hidden w-[26%] lg:block">
                <img src="{{ asset('assets/images/builderon-img24.png') }}" alt="" class="h-full w-full object-fill">
            </div>

            <div class="relative z-20 mx-auto flex min-h-[700px] max-w-[1180px] items-center px-4 pt-28 sm:px-6 lg:px-8">
                <div class="grid w-full items-center gap-8 lg:grid-cols-[1.3fr_0.7fr]">
                    <div class="relative w-full max-w-[620px] bg-[#FFA729] px-8 py-10 shadow-[0_18px_45px_rgba(0,0,0,0.16)] lg:px-10">
                        <div class="pointer-events-none absolute bottom-0 right-0 z-0 opacity-60">
                            <img src="{{ asset('assets/images/builderon-img22.png') }}" alt="" class="h-auto w-[190px] object-contain">
                        </div>
                        <div class="relative z-10">
                            <p class="inline-block border-2 border-white px-4 py-2 text-[14px] font-black uppercase text-white">Call To Action</p>
                            <h2 class="mt-8 text-[32px] font-black uppercase leading-tight text-white lg:text-[38px]">Need a geotechnical investigation or drilling team?</h2>
                            <div class="mt-8 h-[4px] w-[230px] bg-[#081a43]"></div>
                            <a href="tel:+255760594570" class="mt-8 block text-[30px] font-black leading-tight text-white hover:opacity-90">+255 760 594 570</a>
                            <a href="mailto:projects@easterngeotechnics.co.tz" class="mt-4 block break-words text-[24px] font-black leading-tight text-white hover:opacity-90">projects@easterngeotechnics.co.tz</a>
                        </div>
                    </div>
                    <div class="relative hidden min-h-[640px] lg:block">
                        <img src="{{ asset('assets/images/builderon-img23-african.png') }}" alt="" class="absolute bottom-0 left-1/2 z-20 max-h-[610px] w-auto -translate-x-1/2 object-contain">
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 right-0 z-30 h-[120px] lg:h-[170px] xl:h-[190px]">
            <img src="{{ asset('assets/images/builderon-img21.png') }}" alt="" class="h-full w-full object-cover object-top">
        </div>
    </section>

    <section id="projects" class="relative overflow-hidden bg-white py-20 lg:py-24">
        <div class="mx-auto max-w-[1180px] px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-[760px] text-center">
                <p class="inline-block border border-[#FFA729] px-4 py-2 text-[14px] font-black uppercase text-[#D98200]">Project Support</p>
                <h2 class="mt-6 text-[38px] font-black uppercase leading-none text-[#081a43] lg:text-[56px]">Ground Investigation Capability</h2>
                <p class="mx-auto mt-5 max-w-[760px] text-[18px] leading-[1.65] text-[#4d4d4d]">
                    EGL supports infrastructure, building, industrial, energy, and earthworks projects with field investigation and testing services.
                </p>
            </div>

            <div class="mt-10 flex flex-wrap items-center justify-center gap-x-2 gap-y-4">
                @foreach (['All', 'Drilling', 'Testing', 'Geophysics'] as $filter)
                    <span class="{{ $loop->first ? 'bg-[#FFA729] text-white' : 'bg-white text-slate-700' }} px-5 py-3 text-xs font-bold uppercase tracking-[0.24em] shadow-sm ring-1 ring-slate-200">{{ $filter }}</span>
                @endforeach
            </div>

            <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
                @foreach (array_chunk($projects, 2) as $column)
                    <div class="grid gap-5 {{ $loop->last ? 'md:col-span-2 xl:col-span-1' : '' }}">
                        @foreach ($column as $project)
                            <a href="{{ route('projects') }}" class="group relative block overflow-hidden">
                                <img src="{{ asset('assets/images/' . $project['image']) }}" alt="{{ $project['title'] }}" class="h-auto w-full object-cover">
                                <div class="absolute inset-0 bg-slate-950/55 opacity-0 transition duration-300 group-hover:opacity-100"></div>
                                <div class="absolute inset-0 flex items-center justify-center px-6 text-center opacity-0 transition duration-300 group-hover:opacity-100">
                                    <div>
                                        <h3 class="text-[18px] font-black uppercase leading-tight text-white">{{ $project['title'] }}</h3>
                                        <p class="mt-4 text-[16px] leading-[1.6] text-white">{{ $project['text'] }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden" style="padding: 190px 0 190px 0; background-image: url('{{ asset('assets/images/builderon-img041.jpg') }}'); background-position: center; background-size: cover;">
        <div class="absolute inset-0 bg-black/75"></div>
        <div class="relative mx-auto max-w-[1180px] px-4 sm:px-6 lg:px-8">
            <div class="grid gap-5 md:grid-cols-3">
                <div class="border-2 border-[#FFA729]/50 bg-[#030f27]/70 p-10 text-center">
                    <i class="fas fa-calendar-check text-[56px] text-[#FFA729]" aria-hidden="true"></i>
                    <div class="mt-6 text-[34px] font-black leading-none text-white">2024</div>
                    <div class="mt-3 text-[16px] text-white">Established</div>
                </div>
                <div class="border-2 border-[#FFA729]/50 bg-[#030f27]/70 p-10 text-center">
                    <i class="fas fa-ruler-vertical text-[56px] text-[#FFA729]" aria-hidden="true"></i>
                    <div class="mt-6 text-[34px] font-black leading-none text-white">300m</div>
                    <div class="mt-3 text-[16px] text-white">Drilling Capacity</div>
                </div>
                <div class="border-2 border-[#FFA729]/50 bg-[#030f27]/70 p-10 text-center">
                    <i class="fas fa-people-carry-box text-[56px] text-[#FFA729]" aria-hidden="true"></i>
                    <div class="mt-6 text-[34px] font-black leading-none text-white">3</div>
                    <div class="mt-3 text-[16px] text-white">Deployable Teams</div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 z-10 h-[120px] lg:h-[170px]">
            <img src="{{ asset('assets/images/builderon-img21.png') }}" alt="" class="h-full w-full object-cover object-top">
        </div>
    </section>

    <section class="relative overflow-hidden bg-[#f3f3f3] py-0">
        <div class="pointer-events-none absolute left-0 right-0 top-0 z-30 h-[120px] lg:h-[140px]">
            <img src="{{ asset('assets/images/builderon-img21.png') }}" alt="" class="h-full w-full rotate-180 object-cover object-top">
        </div>
        <div class="relative min-h-[400px]">
            <div class="absolute inset-0">
                <img src="{{ asset('assets/images/builderon-img43.jpg') }}" alt="" class="h-full w-full object-cover">
                <div class="absolute inset-0 bg-black/35"></div>
            </div>
        </div>
    </section>

    <section class="bg-white px-[15px] pb-[100px]" style="margin-top: -149px;">
        <div class="mx-auto max-w-[1180px] px-4 sm:px-6 lg:px-8">
            <div class="grid gap-10 lg:grid-cols-2">
                <div class="z-20 lg:mr-[50px]">
                    <div class="grid grid-cols-2">
                        <div class="min-h-[168px] bg-cover bg-top" style="background-image: url('{{ asset('assets/images/builderon-img44.jpg') }}');"></div>
                        <div class="flex items-center bg-[#FFA729] px-[24px] py-[36px]">
                            <h3 class="text-[18px] font-bold uppercase leading-[1.25] text-white">Geotechnical services across Tanzania</h3>
                        </div>
                    </div>

                    <div class="pt-10">
                        @foreach ($faqs as $faq)
                            <details class="mb-5 bg-white shadow-[0_0_13px_-4px_rgba(0,0,0,0.2)]">
                                <summary class="flex cursor-pointer list-none items-center justify-between px-[22px] py-[22px] text-[16px] font-bold uppercase text-[#081a43]">
                                    <span>{{ $faq['q'] }}</span>
                                    <i class="fas fa-angle-down text-[#081a43]" aria-hidden="true"></i>
                                </summary>
                                <div class="px-5 pb-5 text-[16px] leading-[1.7] text-[#4d4d4d]">
                                    <p>{{ $faq['a'] }}</p>
                                </div>
                            </details>
                        @endforeach
                    </div>
                </div>

                <div class="z-20">
                    <div class="bg-white px-[28px] py-[42px] shadow-[0_0_30px_0_rgba(0,0,0,0.15)] lg:px-[40px] lg:py-[50px]">
                        <div class="mx-[10px] bg-[#081a43] px-[17px] py-[17px] text-center">
                            <h3 class="text-[22px] font-bold uppercase text-white">Contact &amp; Hire Us</h3>
                        </div>
                        <form action="#" method="POST" class="mx-[10px] mt-[15px]">
                            @csrf
                            <div class="mb-5"><input name="name" type="text" placeholder="Your Name*" required class="w-full border-0 bg-[#f4f4f4] px-5 py-5 text-[16px] text-[#081a43] outline-none"></div>
                            <div class="mb-5"><input name="email" type="email" placeholder="Your Email*" required class="w-full border-0 bg-[#f4f4f4] px-5 py-5 text-[16px] text-[#081a43] outline-none"></div>
                            <div class="mb-5"><input name="phone" type="tel" placeholder="Your Number*" required class="w-full border-0 bg-[#f4f4f4] px-5 py-5 text-[16px] text-[#081a43] outline-none"></div>
                            <div class="mb-5"><textarea name="message" rows="6" placeholder="Enter your message" class="w-full border-0 bg-[#f4f4f4] px-5 py-5 text-[16px] text-[#081a43] outline-none"></textarea></div>
                            <button type="submit" class="inline-flex items-center justify-center bg-[#FFA729] px-10 py-4 text-[16px] font-bold uppercase text-white transition hover:bg-[#D98200]">Submit Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
