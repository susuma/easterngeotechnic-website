<footer class="relative -mt-[80px] bg-transparent text-white">
    {{-- Project enquiry band --}}
    <section class="relative z-20">
        <div class="relative mx-auto max-w-[1180px] overflow-hidden bg-[#FFA729] px-5 py-10 sm:px-8 lg:px-12 lg:py-12">
            <div class="pointer-events-none absolute inset-0 opacity-[0.06]">
                <img src="{{ asset('assets/images/builderon-img32.jpg') }}" alt="" class="h-full w-full object-cover object-center">
            </div>

            <div class="pointer-events-none absolute -right-12 -top-16 text-[220px] leading-none text-white/10">
                <i class="fas fa-compass-drafting" aria-hidden="true"></i>
            </div>

            <div class="relative z-10 grid gap-9 lg:grid-cols-[1.2fr_0.8fr] lg:items-center lg:gap-12">
                <div>
                    <p class="text-[13px] font-black uppercase tracking-[0.18em] text-[#081a43]">Start A Project With EGL</p>
                    <h3 class="mt-3 max-w-[650px] text-[30px] font-black uppercase leading-[1.08] text-white lg:text-[36px]">
                        Planning A Geotechnical Investigation?
                    </h3>
                    <p class="mt-4 max-w-[650px] text-[16px] leading-[1.7] text-white/90">
                        Share your project location, investigation scope, and expected schedule. Our team will help define the suitable drilling, testing, and field support approach.
                    </p>

                    <div class="mt-6 grid gap-3 text-[14px] font-bold uppercase text-[#081a43] sm:grid-cols-3">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-location-dot text-white" aria-hidden="true"></i>
                            <span>Project Location</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-clipboard-list text-white" aria-hidden="true"></i>
                            <span>Required Scope</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-calendar-days text-white" aria-hidden="true"></i>
                            <span>Target Schedule</span>
                        </div>
                    </div>
                </div>

                <div class="border-l-0 border-white/30 lg:border-l lg:pl-12">
                    <p class="text-[14px] font-black uppercase tracking-[0.14em] text-[#081a43]">Discuss Your Requirements</p>
                    <p class="mt-3 text-[15px] leading-[1.65] text-white/90">
                        Contact our project team for capability information, scheduling, and a tailored quotation.
                    </p>

                    <div class="mt-6 grid gap-3">
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-3 bg-[#081a43] px-6 py-4 text-[15px] font-black uppercase text-white transition hover:bg-white hover:text-[#081a43]">
                            <i class="fas fa-file-signature" aria-hidden="true"></i>
                            <span>Request Consultation</span>
                        </a>
                        <a href="tel:+255760594570" class="inline-flex items-center justify-center gap-3 border border-white/70 px-6 py-4 text-[15px] font-black uppercase text-white transition hover:bg-white hover:text-[#081a43]">
                            <i class="fas fa-phone" aria-hidden="true"></i>
                            <span>Call +255 760 594 570</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Main footer --}}
    <section class="relative z-10 overflow-hidden bg-[#081a43] pt-[100px] mt-[-120px]">
        <div class="pointer-events-none absolute right-0 bottom-0 h-full opacity-30">
            <img src="{{ asset('assets/images/builderon-img31.png') }}" alt="" class="h-full w-auto max-w-none object-contain object-bottom-right">
        </div>
        <div class="absolute inset-0 opacity-[0.08]" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 14px 14px;"></div>

        <div class="relative mx-auto max-w-[1180px] px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">
                <div>
                    <a href="{{ route('home') }}" class="inline-block">
                        <img src="{{ asset('assets/images/egl-logo.jpg') }}" alt="Eastern Geotechnics" class="h-[82px] w-[240px] bg-white object-contain px-2">
                    </a>
                    <p class="mt-6 text-[16px] leading-[1.8] text-slate-300">Geotechnical investigation, drilling, in-situ testing, and geophysics services for clients across Tanzania.</p>
                </div>

                <div>
                    <h2 class="text-[22px] font-bold uppercase text-white">Contact Information</h2>
                    <ul class="mt-6 space-y-4 text-[16px] leading-7 text-slate-300">
                        <li>Phone: +255 760 594 570</li>
                        <li>Alt: +255 760 044 560</li>
                        <li>Mail: projects@easterngeotechnics.co.tz</li>
                        <li>P.O. Box 22215, Dar es Salaam</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-[22px] font-bold uppercase text-white">Useful Links</h2>
                    <ul class="mt-6 space-y-4 text-[16px] text-slate-300">
                        <li><a href="{{ route('about') }}" class="transition hover:text-[#FFA729]">About Us</a></li>
                        <li><a href="{{ route('services') }}" class="transition hover:text-[#FFA729]">Services</a></li>
                        <li><a href="{{ route('projects') }}" class="transition hover:text-[#FFA729]">Projects</a></li>
                        <li><a href="{{ route('equipments') }}" class="transition hover:text-[#FFA729]">Equipment</a></li>
                        <li><a href="{{ route('contact') }}" class="transition hover:text-[#FFA729]">Contact Us</a></li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-[22px] font-bold uppercase text-white">Core Services</h2>
                    <ul class="mt-6 space-y-4 text-[16px] text-slate-300">
                        <li>Foundation investigation</li>
                        <li>Borehole drilling</li>
                        <li>Pavement assessment</li>
                        <li>Geophysics study</li>
                        <li>In-situ testing</li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 border-t border-white/10 pt-6">
                <div class="flex flex-col gap-4 text-[15px] text-slate-300 md:flex-row md:items-center md:justify-between">
                    <p>Copyright © {{ date('Y') }} Eastern Geotechnics Limited. All rights reserved.</p>
                    <a href="mailto:projects@easterngeotechnics.co.tz" class="transition hover:text-[#FFA729]">projects@easterngeotechnics.co.tz</a>
                </div>
            </div>
        </div>
    </section>
</footer>
