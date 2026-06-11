@extends('layouts.app')

@section('title', 'Contact Us')
@section('meta_description', 'Contact Eastern Geotechnics Limited in Dar es Salaam for geotechnical investigations, drilling, testing, and geophysics services.')

@section('content')
    <x-page-hero title="Contact Us" subtitle="Talk to EGL about your investigation, drilling, or testing assignment." />

    <section class="bg-white pt-20 lg:pt-24 pb-36">
        <div class="mx-auto grid max-w-[1180px] gap-12 px-4 sm:px-6 lg:grid-cols-[0.9fr_1.1fr] lg:px-8">
            <div data-reveal="left">
                <p class="inline-block border-2 border-[#FFA729] px-4 py-2 text-sm font-black uppercase text-[#FFA729]">Get In Touch</p>
                <h1 class="mt-6 text-3xl font-black uppercase leading-tight text-[#081a43] sm:text-4xl">Start with the right ground information</h1>
                <div class="mt-8 space-y-5">
                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', $siteSettings['phone_primary']) }}" class="flex gap-4 border border-slate-200 p-5 transition hover:border-[#FFA729]">
                        <i class="fas fa-phone mt-1 text-2xl text-[#FFA729]" aria-hidden="true"></i>
                        <span><strong class="block text-[#081a43]">Phone</strong>{{ $siteSettings['phone_primary'] }} / {{ $siteSettings['phone_secondary'] }}</span>
                    </a>
                    <a href="mailto:{{ $siteSettings['email'] }}" class="flex gap-4 border border-slate-200 p-5 transition hover:border-[#FFA729]">
                        <i class="fas fa-envelope mt-1 text-2xl text-[#FFA729]" aria-hidden="true"></i>
                        <span class="min-w-0 break-all"><strong class="block text-[#081a43]">Email</strong>{{ $siteSettings['email'] }}</span>
                    </a>
                    <div class="flex gap-4 border border-slate-200 p-5">
                        <i class="fas fa-location-dot mt-1 text-2xl text-[#FFA729]" aria-hidden="true"></i>
                        <span><strong class="block text-[#081a43]">Address</strong>{{ $siteSettings['address'] }}</span>
                    </div>
                </div>
            </div>

            <form data-reveal="right" style="--reveal-delay: 120ms" action="{{ route('inquiries.store') }}" method="POST" class="bg-slate-100 p-6 sm:p-8">
                @csrf
                <input type="hidden" name="source" value="contact">
                <input type="hidden" name="form_token" value="{{ encrypt(now()->timestamp) }}">
                <div class="absolute -left-[10000px] top-auto h-px w-px overflow-hidden" aria-hidden="true">
                    <label for="contact-website">Leave this field empty</label>
                    <input id="contact-website" name="website" type="text" tabindex="-1" autocomplete="off">
                </div>

                @if (session('inquiry_success'))
                    <div class="mb-5 border border-green-200 bg-green-50 px-5 py-4 text-[15px] leading-6 text-green-800" role="status">
                        {{ session('inquiry_success') }}
                    </div>
                @endif
                @if (session('inquiry_error'))
                    <div class="mb-5 border border-red-200 bg-red-50 px-5 py-4 text-[15px] leading-6 text-red-800" role="alert">
                        {{ session('inquiry_error') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="mb-5 border border-red-200 bg-red-50 px-5 py-4 text-[15px] leading-6 text-red-800" role="alert">
                        Please check the highlighted fields and try again.
                    </div>
                @endif

                <div class="grid gap-5 sm:grid-cols-2">
                    <div>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Your name*" autocomplete="name" required maxlength="100" class="w-full border bg-white px-5 py-4 text-[#081a43] outline-none focus:border-[#FFA729] {{ $errors->has('name') ? 'border-red-400' : 'border-slate-200' }}">
                        @error('name') <p class="mt-2 text-sm text-red-700">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email address*" autocomplete="email" required maxlength="254" class="w-full border bg-white px-5 py-4 text-[#081a43] outline-none focus:border-[#FFA729] {{ $errors->has('email') ? 'border-red-400' : 'border-slate-200' }}">
                        @error('email') <p class="mt-2 text-sm text-red-700">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="Phone number" autocomplete="tel" maxlength="40" class="w-full border bg-white px-5 py-4 text-[#081a43] outline-none focus:border-[#FFA729] {{ $errors->has('phone') ? 'border-red-400' : 'border-slate-200' }}">
                        @error('phone') <p class="mt-2 text-sm text-red-700">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <input type="text" name="service" value="{{ old('service') }}" placeholder="Service needed" maxlength="150" class="w-full border bg-white px-5 py-4 text-[#081a43] outline-none focus:border-[#FFA729] {{ $errors->has('service') ? 'border-red-400' : 'border-slate-200' }}">
                        @error('service') <p class="mt-2 text-sm text-red-700">{{ $message }}</p> @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <textarea name="message" rows="7" placeholder="Project details*" required minlength="15" maxlength="5000" class="w-full border bg-white px-5 py-4 text-[#081a43] outline-none focus:border-[#FFA729] {{ $errors->has('message') ? 'border-red-400' : 'border-slate-200' }}">{{ old('message') }}</textarea>
                        @error('message') <p class="mt-2 text-sm text-red-700">{{ $message }}</p> @enderror
                        @error('form_token') <p class="mt-2 text-sm text-red-700">{{ $message }}</p> @enderror
                    </div>
                    <p class="sm:col-span-2 text-[13px] leading-6 text-slate-500">
                        Your details will only be used to respond to this inquiry and coordinate requested services. We do not sell or share inquiry information for marketing.
                    </p>
                    <button type="submit" class="sm:col-span-2 inline-flex justify-center bg-[#FFA729] px-7 py-4 text-sm font-bold uppercase tracking-[0.18em] text-white transition hover:bg-[#D98200]">Send Inquiry</button>
                </div>
            </form>
        </div>
    </section>
@endsection
