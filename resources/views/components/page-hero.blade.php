@props(['title', 'subtitle' => null])

<section class="relative isolate min-h-[340px] overflow-hidden bg-slate-950 text-white">
    <div class="absolute inset-0">
        <img src="{{ asset('assets/images/builderon-img1.jpg') }}" alt="" class="h-full w-full object-cover">
        <div class="absolute inset-0 bg-slate-950/70"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-slate-950/20 to-slate-950/75"></div>
    </div>

    <div class="relative mx-auto flex min-h-[340px] max-w-[1180px] items-center px-4 py-20 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <p data-hero-reveal style="--reveal-delay: 70ms" class="text-sm font-black uppercase tracking-[0.28em] text-[#FFA729]">Eastern Geotechnics Limited</p>
            <h1 data-hero-reveal style="--reveal-delay: 160ms" class="mt-5 text-4xl font-black uppercase leading-tight sm:text-5xl">{{ $title }}</h1>
            @if ($subtitle)
                <p data-hero-reveal style="--reveal-delay: 250ms" class="mt-4 text-lg leading-8 text-slate-100">{{ $subtitle }}</p>
            @endif
        </div>
    </div>

    <div class="absolute bottom-0 left-0 right-0 z-10 h-[100px] lg:h-[130px]">
        <img src="{{ asset('assets/images/builderon-img21.png') }}" alt="" class="h-full w-full object-cover object-top">
    </div>
</section>
