<header x-data="{ mobileOpen: false }" class="relative z-50">
    <section class="bg-[#03153f]">
        <div class="mx-auto max-w-[1180px] px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-6 py-6 lg:flex-row lg:items-center lg:justify-between">
                <div class="flex flex-col gap-2 lg:min-w-[300px]">
                    <a href="{{ route('home') }}" class="inline-block">
                        <img src="{{ asset('assets/images/egl-logo.jpg') }}" alt="Eastern Geotechnics" class="h-[72px] w-[260px] bg-white object-contain px-2">
                    </a>
                    <p class="text-[15px] leading-none text-white/90">Engineering Confidence from the Ground Up</p>
                </div>

                <div class="hidden lg:flex lg:items-center lg:gap-8">
                    <a href="tel:+255760594570" class="flex items-center gap-4">
                        <span class="flex h-[46px] w-[46px] items-center justify-center border border-[#FFA729] text-[#FFA729]">
                            <i class="fas fa-phone-alt text-[17px]" aria-hidden="true"></i>
                        </span>
                        <span>
                            <span class="block text-[17px] font-bold leading-none text-white">+255 760 594 570</span>
                            <span class="mt-2 block text-[14px] leading-none text-white/85">Phone number</span>
                        </span>
                    </a>

                    <a href="mailto:projects@easterngeotechnics.co.tz" class="flex items-center gap-4">
                        <span class="flex h-[46px] w-[46px] items-center justify-center border border-[#FFA729] text-[#FFA729]">
                            <i class="fas fa-envelope-open-text text-[17px]" aria-hidden="true"></i>
                        </span>
                        <span>
                            <span class="block text-[17px] font-bold leading-none text-white">projects@easterngeotechnics.co.tz</span>
                            <span class="mt-2 block text-[14px] leading-none text-white/85">Email address</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <nav class="bg-[#FFA729]">
        <div class="mx-auto max-w-[1180px] px-4 sm:px-6 lg:px-8">
            <div class="flex h-[56px] items-center justify-between">
                <ul class="hidden h-full items-stretch lg:flex">
                    <li><a href="{{ route('home') }}" class="flex h-full items-center px-5 text-[15px] font-bold uppercase text-white transition hover:bg-[#D98200]">Home</a></li>
                    <li><a href="{{ route('about') }}" class="flex h-full items-center px-5 text-[15px] font-bold uppercase text-white transition hover:bg-[#D98200]">About Us</a></li>
                    <li><a href="{{ route('services') }}" class="flex h-full items-center px-5 text-[15px] font-bold uppercase text-white transition hover:bg-[#D98200]">Services</a></li>
                    <li><a href="{{ route('projects') }}" class="flex h-full items-center px-5 text-[15px] font-bold uppercase text-white transition hover:bg-[#D98200]">Projects</a></li>
                    <li><a href="{{ route('equipments') }}" class="flex h-full items-center px-5 text-[15px] font-bold uppercase text-white transition hover:bg-[#D98200]">Equipment</a></li>
                    <li><a href="{{ route('contact') }}" class="flex h-full items-center px-5 text-[15px] font-bold uppercase text-white transition hover:bg-[#D98200]">Contact</a></li>
                </ul>

                <div class="hidden items-center gap-6 lg:flex">
                    <a href="#" class="text-white transition hover:text-[#081a43]" aria-label="Facebook">
                        <i class="fab fa-facebook-f text-[18px]" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="text-white transition hover:text-[#081a43]" aria-label="Twitter">
                        <i class="fab fa-twitter text-[18px]" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="text-white transition hover:text-[#081a43]" aria-label="Google">
                        <i class="fab fa-google text-[18px]" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="text-white transition hover:text-[#081a43]" aria-label="Instagram">
                        <i class="fab fa-instagram text-[18px]" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="text-white transition hover:text-[#081a43]" aria-label="Pinterest">
                        <i class="fab fa-pinterest text-[18px]" aria-hidden="true"></i>
                    </a>
                </div>

                <button type="button" class="inline-flex items-center justify-center text-white lg:hidden" @click="mobileOpen = !mobileOpen" aria-label="Menu Toggle">
                    <i class="fas text-xl" :class="mobileOpen ? 'fa-times' : 'fa-bars'"></i>
                </button>
            </div>

            <div x-show="mobileOpen" x-transition class="border-t border-white/20 py-4 lg:hidden">
                <div class="space-y-3">
                    <a href="{{ route('home') }}" class="block text-[16px] font-bold uppercase text-white">Home</a>
                    <a href="{{ route('about') }}" class="block text-[16px] font-bold uppercase text-white">About Us</a>
                    <a href="{{ route('services') }}" class="block text-[16px] font-bold uppercase text-white">Services</a>
                    <a href="{{ route('projects') }}" class="block text-[16px] font-bold uppercase text-white">Projects</a>
                    <a href="{{ route('equipments') }}" class="block text-[16px] font-bold uppercase text-white">Equipment</a>
                    <a href="{{ route('contact') }}" class="block text-[16px] font-bold uppercase text-white">Contact</a>
                </div>
            </div>
        </div>
    </nav>
</header>
