@extends('layouts.app')

@section('title', 'Contact Us')
@section('meta_description', 'Contact Eastern Geotechnics Limited in Dar es Salaam for geotechnical investigations, drilling, testing, and geophysics services.')

@section('content')
    <x-page-hero title="Contact Us" subtitle="Talk to EGL about your investigation, drilling, or testing assignment." />

    <section class="bg-white py-20 lg:py-24">
        <div class="mx-auto grid max-w-[1180px] gap-12 px-4 sm:px-6 lg:grid-cols-[0.9fr_1.1fr] lg:px-8">
            <div>
                <p class="inline-block border-2 border-[#FD5D14] px-4 py-2 text-sm font-black uppercase text-[#FD5D14]">Get In Touch</p>
                <h1 class="mt-6 text-3xl font-black uppercase leading-tight text-[#081a43] sm:text-4xl">Start with the right ground information</h1>
                <div class="mt-8 space-y-5">
                    <a href="tel:+255760594570" class="flex gap-4 border border-slate-200 p-5 transition hover:border-[#FD5D14]">
                        <i class="fas fa-phone mt-1 text-2xl text-[#FD5D14]" aria-hidden="true"></i>
                        <span><strong class="block text-[#081a43]">Phone</strong>+255 760 594 570 / +255 760 044 560</span>
                    </a>
                    <a href="mailto:projects@easterngeotechnics.co.tz" class="flex gap-4 border border-slate-200 p-5 transition hover:border-[#FD5D14]">
                        <i class="fas fa-envelope mt-1 text-2xl text-[#FD5D14]" aria-hidden="true"></i>
                        <span><strong class="block text-[#081a43]">Email</strong>projects@easterngeotechnics.co.tz</span>
                    </a>
                    <div class="flex gap-4 border border-slate-200 p-5">
                        <i class="fas fa-location-dot mt-1 text-2xl text-[#FD5D14]" aria-hidden="true"></i>
                        <span><strong class="block text-[#081a43]">Address</strong>P.O. Box 22215, Dar es Salaam, Tanzania</span>
                    </div>
                </div>
            </div>

            <form action="#" method="POST" class="bg-slate-100 p-6 sm:p-8">
                @csrf
                <div class="grid gap-5 sm:grid-cols-2">
                    <input type="text" name="name" placeholder="Your name" required class="w-full border border-slate-200 bg-white px-5 py-4 text-[#081a43] outline-none focus:border-[#FD5D14]">
                    <input type="email" name="email" placeholder="Email address" required class="w-full border border-slate-200 bg-white px-5 py-4 text-[#081a43] outline-none focus:border-[#FD5D14]">
                    <input type="tel" name="phone" placeholder="Phone number" class="w-full border border-slate-200 bg-white px-5 py-4 text-[#081a43] outline-none focus:border-[#FD5D14]">
                    <input type="text" name="service" placeholder="Service needed" class="w-full border border-slate-200 bg-white px-5 py-4 text-[#081a43] outline-none focus:border-[#FD5D14]">
                    <textarea name="message" rows="7" placeholder="Project details" required class="sm:col-span-2 w-full border border-slate-200 bg-white px-5 py-4 text-[#081a43] outline-none focus:border-[#FD5D14]"></textarea>
                    <button type="submit" class="sm:col-span-2 inline-flex justify-center bg-[#FD5D14] px-7 py-4 text-sm font-bold uppercase tracking-[0.18em] text-white transition hover:bg-orange-600">Send Inquiry</button>
                </div>
            </form>
        </div>
    </section>
@endsection
