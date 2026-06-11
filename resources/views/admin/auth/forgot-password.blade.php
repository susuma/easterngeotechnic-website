@extends('layouts.admin-auth')
@section('title', 'Reset Password')
@section('heading', 'Reset password')
@section('content')
<p class="mb-6 text-sm leading-6 text-slate-600">Enter your administrator email and we will send a short-lived password reset link.</p>
<form action="{{ route('admin.password.email') }}" method="POST" class="space-y-5">@csrf
    <label class="block"><span class="mb-2 block text-xs font-black uppercase tracking-wider text-[#081a43]">Email address</span><input name="email" type="email" required autofocus class="admin-input"></label>
    <button class="admin-primary-btn w-full"><i class="fas fa-paper-plane"></i>Send reset link</button>
    <a href="{{ route('admin.login') }}" class="block text-center text-sm font-bold text-[#D98200]">Return to sign in</a>
</form>
@endsection
