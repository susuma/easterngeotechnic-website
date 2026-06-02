<header x-data="{ mobileOpen: false }" class="relative z-50">
    {{-- TOP HEADER --}}
    <section class="bg-[#03153f]">
        <div class="mx-auto max-w-[1180px] px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-6 py-8 lg:flex-row lg:items-center lg:justify-between">
                {{-- Logo + subtitle --}}
                <div class="flex flex-col gap-2 lg:min-w-[300px]">
                    <a href="{{ url('/') }}" class="inline-block">
                        <img src="{{ asset('assets/images/builderon-logoimg2.png') }}" alt="Builderon" class="h-auto w-[250px] object-contain">
                    </a>
                    <p class="text-[15px] leading-none text-white/90">Engineering Confidence from the Ground Up</p>
                </div>

                {{-- Contact items --}}
                <div class="hidden lg:flex lg:items-center lg:gap-10">
                    {{-- Phone --}}
                    <div class="flex items-center gap-4">
                        <div class="flex h-[46px] w-[46px] items-center justify-center border border-[#FD5D14] text-[#FD5D14]">
                            <i class="fas fa-phone-alt text-[17px]" aria-hidden="true"></i>
                        </div>
                        <div>
                            <div class="text-[18px] font-bold leading-none text-white">(+255) 760 594 570</div>
                            <div class="mt-2 text-[14px] leading-none text-white/85">Phone number</div>
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="flex items-center gap-4">
                        <div class="flex h-[46px] w-[46px] items-center justify-center border border-[#FD5D14] text-[#FD5D14]">
                            <i class="fas fa-envelope-open-text text-[17px]" aria-hidden="true"></i>
                        </div>
                        <div>
                            <div class="text-[18px] font-bold leading-none text-white">projects@easterngeotechnics.co.tz</div>
                            <div class="mt-2 text-[14px] leading-none text-white/85">Email address</div>
                        </div>
                    </div>

                    {{-- Address --}}
                    <div class="flex items-center gap-4" style="display: none;">
                        <div class="flex h-[46px] w-[46px] items-center justify-center border border-[#FD5D14] text-[#FD5D14]">
                            <i class="fas fa-map-marker-alt text-[17px]" aria-hidden="true"></i>
                        </div>
                        <div>
                            <div class="text-[18px] font-bold leading-none text-white">San Andreas, USA</div>
                            <div class="mt-2 text-[14px] leading-none text-white/85">Address location</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- NAV BAR --}}
    <nav class="bg-[#FD5D14]">
        <div class="mx-auto max-w-[1180px] px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between py-0">
                {{-- Desktop nav --}}
                <div class="hidden lg:block">
                    <ul class="flex items-stretch">
                        {{-- HOME --}}
                        <li>
                            <a href="{{ url('/') }}" class="flex h-[56px] items-center px-5 text-[15px] font-bold uppercase text-white transition-colors duration-0 hover:bg-[#d35400]">Home</a>
                        </li>

                        {{-- ABOUT --}}
                        <li>
                            <a href="{{ url('/about-us') }}" class="flex h-[56px] items-center px-5 text-[15px] font-bold uppercase text-white transition-colors duration-0 hover:bg-[#d35400]">About us</a>
                        </li>
                        {{-- SERVICES --}}
                        <li class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                            <button type="button" class="flex h-[56px] items-center gap-2 px-5 text-[15px] font-bold uppercase text-white transition-colors duration-0" :class="open ? 'bg-[#d35400]' : 'bg-transparent'">
                                <span>Services</span>
                                <i class="fas fa-chevron-down text-[10px]"></i>
                            </button>
                            <div x-show="open" x-cloak class="absolute left-0 top-full z-50 inline-block min-w-max bg-white">
                                <a href="{{ url('/services') }}" class="block whitespace-nowrap px-7 py-4 text-[15px] font-bold uppercase text-[#081a43] transition-colors duration-0 hover:bg-[#d35400] hover:text-white">Services list</a>
                                <a href="#" class="block whitespace-nowrap border-t border-[#e6e6e6] px-7 py-4 text-[15px] font-bold uppercase text-[#081a43] transition-colors duration-0 hover:bg-[#d35400] hover:text-white">Service detail</a>
                            </div>
                        </li>
                        {{-- PROJECTS --}}
                        <li class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                            <button type="button" class="flex h-[56px] items-center gap-2 px-5 text-[15px] font-bold uppercase text-white transition-colors duration-0" :class="open ? 'bg-[#d35400]' : 'bg-transparent'">
                                <span>Projects</span>
                                <i class="fas fa-chevron-down text-[10px]"></i>
                            </button>
                            <div x-show="open" x-cloak class="absolute left-0 top-full z-50 inline-block min-w-max bg-white">
                                <a href="{{ url('/projects') }}" class="block whitespace-nowrap px-7 py-4 text-[15px] font-bold uppercase text-[#081a43] transition-colors duration-0 hover:bg-[#d35400] hover:text-white">Recent project</a>
                                <a href="#" class="block whitespace-nowrap border-t border-[#e6e6e6] px-7 py-4 text-[15px] font-bold uppercase text-[#081a43] transition-colors duration-0 hover:bg-[#d35400] hover:text-white">Project detail</a>
                            </div>
                        </li>
                        {{-- Equipments --}}
                        <li>
                            <a href="{{ url('/equipments') }}" class="flex h-[56px] items-center px-5 text-[15px] font-bold uppercase text-white transition-colors duration-0 hover:bg-[#d35400]">Equipments</a>
                        </li>
                        {{-- Certifications --}}
                        <li style="display: none;">
                            <a href="{{ url('/certifications') }}" class="flex h-[56px] items-center px-5 text-[15px] font-bold uppercase text-white transition-colors duration-0 hover:bg-[#d35400]">Certifications</a>
                        </li>
                        {{-- CONTACT --}}
                        <li>
                            <a href="{{ url('/contact') }}" class="flex h-[56px] items-center px-5 text-[15px] font-bold uppercase text-white transition-colors duration-0 hover:bg-[#d35400]">Contact</a>
                        </li>
                    </ul>
                </div>
                {{-- Right social icons --}}
                <div class="hidden items-center gap-6 lg:flex">
                    <a href="#" class="text-white" aria-label="Facebook"><i class="fab fa-facebook-f text-[18px]"></i></a>
                    <a href="#" class="text-white" aria-label="Twitter"><i class="fab fa-twitter text-[18px]"></i></a>
                    <a href="#" class="text-white" aria-label="Google"><i class="fab fa-google text-[18px]"></i></a>
                    <a href="#" class="text-white" aria-label="Instagram"><i class="fab fa-instagram text-[18px]"></i></a>
                    <a href="#" class="text-white" aria-label="Pinterest"><i class="fab fa-pinterest text-[18px]"></i></a>
                </div>
                {{-- Mobile toggle --}}
                <button type="button" class="inline-flex items-center justify-center text-white lg:hidden" @click="mobileOpen = !mobileOpen" aria-label="Menu Toggle">
                    <i class="fas" :class="mobileOpen ? 'fa-times' : 'fa-bars'"></i>
                </button>
            </div>
            {{-- Mobile menu --}}
            <div x-show="mobileOpen" x-transition class="border-t border-white/20 py-4 lg:hidden">
                <div class="space-y-3">
                    <a href="{{ url('/') }}" class="block text-[16px] font-bold uppercase text-white">Home</a>
                    <a href="{{ url('/about') }}" class="block text-[16px] font-bold uppercase text-white">About us</a>
                    <a href="{{ url('/services') }}" class="block text-[16px] font-bold uppercase text-white">Services</a>
                    <a href="#" class="block text-[16px] font-bold uppercase text-white">Pages</a>
                    <a href="{{ url('/projects') }}" class="block text-[16px] font-bold uppercase text-white">Projects</a>
                    <a href="#" class="block text-[16px] font-bold uppercase text-white">Blog</a>
                    <a href="{{ url('/contact') }}" class="block text-[16px] font-bold uppercase text-white">Contact</a>
                </div>
                <div class="mt-5 flex items-center gap-4">
                    <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-google"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
        </div>
    </nav>
</header>
