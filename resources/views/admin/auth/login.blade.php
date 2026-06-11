@extends('layouts.admin-auth')
@section('title', 'Administrator Login')
@section('content')
<form action="{{ route('admin.login.store') }}" method="POST" class="space-y-5">
    @csrf
    <label class="block"><span class="mb-2 block text-xs font-black uppercase tracking-wider text-[#081a43]">Email address</span><input name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="admin-input"></label>
    <label class="block"><span class="mb-2 block text-xs font-black uppercase tracking-wider text-[#081a43]">Password</span><input name="password" type="password" required autocomplete="current-password" class="admin-input"></label>
    <div class="flex items-center justify-between gap-4 text-sm"><label class="flex items-center gap-2"><input type="checkbox" name="remember" value="1" class="accent-[#FFA729]">Remember me</label><a href="{{ route('admin.password.request') }}" class="font-bold text-[#D98200] hover:text-[#081a43]">Forgot password?</a></div>
    <button class="admin-primary-btn w-full"><i class="fas fa-lock"></i>Sign in securely</button>
</form>
@endsection
