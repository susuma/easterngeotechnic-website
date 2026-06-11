@extends('layouts.admin-auth')
@section('title', 'Choose New Password')
@section('heading', 'Choose new password')
@section('content')
<form action="{{ route('admin.password.update') }}" method="POST" class="space-y-5">@csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <label class="block"><span class="mb-2 block text-xs font-black uppercase tracking-wider text-[#081a43]">Email address</span><input name="email" type="email" value="{{ $email }}" required class="admin-input"></label>
    <label class="block"><span class="mb-2 block text-xs font-black uppercase tracking-wider text-[#081a43]">New password</span><input name="password" type="password" required class="admin-input"></label>
    <label class="block"><span class="mb-2 block text-xs font-black uppercase tracking-wider text-[#081a43]">Confirm password</span><input name="password_confirmation" type="password" required class="admin-input"></label>
    <button class="admin-primary-btn w-full"><i class="fas fa-key"></i>Update password</button>
</form>
@endsection
