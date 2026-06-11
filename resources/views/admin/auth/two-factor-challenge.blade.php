@extends('layouts.admin-auth')
@section('title', 'Two-Factor Verification')
@section('heading', 'Verify your identity')
@section('content')
<p class="mb-6 text-sm leading-6 text-slate-600">Enter the six-digit code from your authenticator application.</p>
<form action="{{ route('admin.two-factor.verify') }}" method="POST" class="space-y-5">@csrf
    <input name="code" inputmode="numeric" pattern="[0-9]*" maxlength="6" required autofocus class="admin-input text-center text-2xl tracking-[0.5em]" placeholder="000000">
    <button class="admin-primary-btn w-full"><i class="fas fa-shield-halved"></i>Verify code</button>
</form>
@endsection
