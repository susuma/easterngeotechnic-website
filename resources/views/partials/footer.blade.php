<footer class="relative bg-[#081a43] text-white">
    <section class="relative overflow-hidden">
        <div class="pointer-events-none absolute right-0 bottom-0 h-full opacity-30">
            <img src="{{ asset('assets/images/builderon-img31.png') }}" alt="" class="h-full w-auto max-w-none object-contain object-bottom-right">
        </div>
        <div class="absolute inset-0 opacity-[0.08]" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 14px 14px;"></div>

        <div class="relative mx-auto max-w-[1180px] px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">
                <div>
                    <a href="{{ route('home') }}" class="inline-block">
                        <span class="block text-[24px] font-black uppercase leading-none tracking-[0.08em] text-white">Eastern</span>
                        <span class="mt-1 block text-[18px] font-black uppercase leading-none tracking-[0.08em] text-[#FD5D14]">Geotechnics Limited</span>
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
                        <li><a href="{{ route('about') }}" class="transition hover:text-[#FD5D14]">About Us</a></li>
                        <li><a href="{{ route('services') }}" class="transition hover:text-[#FD5D14]">Services</a></li>
                        <li><a href="{{ route('projects') }}" class="transition hover:text-[#FD5D14]">Projects</a></li>
                        <li><a href="{{ route('equipments') }}" class="transition hover:text-[#FD5D14]">Equipment</a></li>
                        <li><a href="{{ route('contact') }}" class="transition hover:text-[#FD5D14]">Contact Us</a></li>
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
                    <a href="mailto:projects@easterngeotechnics.co.tz" class="transition hover:text-[#FD5D14]">projects@easterngeotechnics.co.tz</a>
                </div>
            </div>
        </div>
    </section>
</footer>
