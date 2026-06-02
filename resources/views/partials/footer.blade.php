<footer class="relative -mt-[80px] bg-transparent text-white">
    {{-- Newsletter band --}}
    <section class="relative z-20">
        <div class="relative mx-auto max-w-[1180px] overflow-hidden bg-[#FD5D14] px-4 py-12 sm:px-8 lg:px-12">
            {{-- transparent background image --}}
            <div class="pointer-events-none absolute inset-0 opacity-[0.04]">
                <img src="{{ asset('assets/images/builderon-img32.jpg') }}" alt="" class="h-full w-full object-cover object-center">
            </div>
            <div class="relative z-10 grid gap-8 lg:grid-cols-2 lg:items-center">
                {{-- Left --}}
                <div>
                    <h3 class="text-[32px] font-black uppercase leading-[1.05] lg:text-[32px]">Subscribe Newsletter</h3>
                    <p class="mt-4 max-w-[620px] text-[16px] leading-[1.7] text-orange-50">Lorem ipsum dolor sit amet, cons aring elit sed dllao the eimod tempor inciunt ullaco laboris aliquip alora tempor inciunt temporin.</p>
                </div>
                {{-- Right --}}
                <div>
                    <form action="#" method="POST" class="grid gap-4 md:grid-cols-2">
                        @csrf
                        <input type="text" name="name" placeholder="Your name" required class="w-full border border-white/25 bg-white/90 px-5 py-4 text-[16px] text-[#081a43] placeholder:text-[#081a43] outline-none">
                        <input type="email" name="email" placeholder="Email address" required class="w-full border border-white/25 bg-white/90 px-5 py-4 text-[16px] text-[#081a43] placeholder:text-[#081a43] outline-none">
                        <button type="submit" class="md:col-span-2 inline-flex items-center justify-center border border-white/30 bg-white/10 px-6 py-4 text-[16px] font-bold uppercase text-white transition hover:bg-white hover:text-[#FD5D14]">Subscribe now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- Main footer --}}
    <section class="relative z-10 overflow-hidden bg-[#081a43] pt-[100px] mt-[-120px]">
        {{-- transparent background image --}}
        <div class="pointer-events-none absolute right-0 bottom-0 h-full opacity-[0.5]">
            <img src="{{ asset('assets/images/builderon-img31.png') }}" alt="" class="h-full w-auto max-w-none object-contain object-bottom-right">
        </div>
        <div class="absolute inset-0 opacity-[0.10]" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 14px 14px;"></div>


        <div class="relative mx-auto max-w-[1180px] px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">
                {{-- Column 1 --}}
                <div>
                    <a href="#" class="inline-block">
                        <img src="{{ asset('assets/images/builderon-logoimg2.png') }}" alt="Builderon" class="h-auto w-[210px] object-contain">
                    </a>
                    <p class="mt-6 text-[16px] leading-[1.8] text-slate-300">Lorem ipsum dolor sit amet, cons aring elit sed dllao the eimod tempor inciunt ullaco laboris aliquip alora.</p>
                    <div class="mt-6 flex items-center gap-3">
                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-full border border-white/15 text-white transition hover:border-[#FD5D14] hover:bg-[#FD5D14]" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-full border border-white/15 text-white transition hover:border-[#FD5D14] hover:bg-[#FD5D14]" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-full border border-white/15 text-white transition hover:border-[#FD5D14] hover:bg-[#FD5D14]" aria-label="Google">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-full border border-white/15 text-white transition hover:border-[#FD5D14] hover:bg-[#FD5D14]" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-full border border-white/15 text-white transition hover:border-[#FD5D14] hover:bg-[#FD5D14]" aria-label="Pinterest">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
                {{-- Column 2 --}}
                <div>
                    <h5 class="text-[22px] font-bold uppercase text-white">Contact Information</h5>
                    <ul class="mt-6 space-y-4 text-[16px] text-slate-300">
                        <li>Phone: +1(456)657-887</li>
                        <li>Mail: info@domain.com</li>
                        <li>Address: 3557 Derek Drive, Orlando, Florida</li>
                    </ul>
                </div>
                {{-- Column 3 --}}
                <div>
                    <h5 class="text-[22px] font-bold uppercase text-white">Useful Links</h5>
                    <ul class="mt-6 space-y-4 text-[16px] text-slate-300">
                        <li>
                            <a href="#" class="transition hover:text-[#FD5D14]">About us</a>
                        </li>
                        <li>
                            <a href="#" class="transition hover:text-[#FD5D14]">Recent projects</a>
                        </li>
                        <li>
                            <a href="#" class="transition hover:text-[#FD5D14]">Latest blog</a>
                        </li>
                        <li>
                            <a href="#" class="transition hover:text-[#FD5D14]">Contact us</a>
                        </li>
                    </ul>
                </div>
                {{-- Column 4 --}}
                <div>
                    <h5 class="text-[22px] font-bold uppercase text-white">Gallery</h5>
                    <div class="mt-6 grid grid-cols-3 gap-[10px]">
                        <a href="#" class="block overflow-hidden">
                            <img src="{{ asset('assets/images/builderon-img35.jpg') }}" alt="" class="aspect-square h-full w-full object-cover">
                        </a>
                        <a href="#" class="block overflow-hidden">
                            <img src="{{ asset('assets/images/builderon-img34.jpg') }}" alt="" class="aspect-square h-full w-full object-cover">
                        </a>
                        <a href="#" class="block overflow-hidden">
                            <img src="{{ asset('assets/images/builderon-img30.jpg') }}" alt="" class="aspect-square h-full w-full object-cover">
                        </a>
                        <a href="#" class="block overflow-hidden">
                            <img src="{{ asset('assets/images/builderon-img29.jpg') }}" alt="" class="aspect-square h-full w-full object-cover">
                        </a>
                        <a href="#" class="block overflow-hidden">
                            <img src="{{ asset('assets/images/builderon-img28.jpg') }}" alt="" class="aspect-square h-full w-full object-cover">
                        </a>
                        <a href="#" class="block overflow-hidden">
                            <img src="{{ asset('assets/images/builderon-img27.jpg') }}" alt="" class="aspect-square h-full w-full object-cover">
                        </a>
                    </div>
                </div>
            </div>
            {{-- Bottom row --}}
            <div class="mt-12 border-t border-white/10 pt-6">
                <div class="flex flex-col gap-4 text-[15px] text-slate-300 md:flex-row md:items-center md:justify-between">
                    <p>Copyright © 2021 Builderon. All rights reserved.</p>
                    <div class="flex flex-wrap gap-x-6 gap-y-2 md:justify-end">
                        <a href="#" class="transition hover:text-[#FD5D14]">Privacy Policy</a>
                        <a href="#" class="transition hover:text-[#FD5D14]">Terms &amp; Condition</a>
                        <a href="#" class="transition hover:text-[#FD5D14]">FAQ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
