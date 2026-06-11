@extends('layouts.admin')
@section('title', 'Profile & Security')
@section('heading', 'Profile & Security')
@section('eyebrow', 'Account protection')
@section('content')
<section class="grid gap-7 xl:grid-cols-2">
    <form data-admin-reveal action="{{ route('admin.security.profile') }}" method="POST" class="admin-panel">@csrf @method('PUT')
        <p class="admin-kicker">Personal details</p><h2 class="admin-title mt-2">Administrator profile</h2><div class="mt-6 space-y-5"><label class="block"><span class="admin-label">Name</span><input name="name" value="{{ $admin->name }}" class="admin-input"></label><label class="block"><span class="admin-label">Email</span><input type="email" name="email" value="{{ $admin->email }}" class="admin-input"></label><div class="border-t border-slate-100 pt-5"><p class="mb-4 text-sm font-bold text-[#081a43]">Change password (optional)</p><label class="block"><span class="admin-label">Current password</span><input type="password" name="current_password" class="admin-input"></label><label class="mt-4 block"><span class="admin-label">New password</span><input type="password" name="password" class="admin-input"></label><label class="mt-4 block"><span class="admin-label">Confirm new password</span><input type="password" name="password_confirmation" class="admin-input"></label></div><button class="admin-primary-btn"><i class="fas fa-floppy-disk"></i>Update profile</button></div>
    </form>
    <article data-admin-reveal class="admin-panel">
        <div class="flex items-start justify-between gap-5"><div><p class="admin-kicker">Authenticator application</p><h2 class="admin-title mt-2">Two-factor authentication</h2></div><span class="admin-status {{ $admin->two_factor_confirmed_at ? 'admin-status-contacted' : 'admin-status-read' }}">{{ $admin->two_factor_confirmed_at ? 'enabled' : 'not enabled' }}</span></div>
        @if(!$admin->two_factor_confirmed_at)
        <div class="mt-6 border-l-4 border-[#FFA729] bg-orange-50 p-5 text-sm leading-6 text-slate-600"><strong class="block text-[#081a43]">Protect your account</strong>Add the secret below to Google Authenticator, Microsoft Authenticator, 1Password, or another TOTP app, then enter the generated code.</div>
        <div class="mt-6 border border-dashed border-slate-300 bg-slate-50 p-5"><span class="admin-label">Setup secret</span><code class="break-all text-base font-bold text-[#081a43]">{{ $admin->two_factor_secret }}</code></div>
        <form action="{{ route('admin.security.two-factor.confirm') }}" method="POST" class="mt-6">@csrf<label><span class="admin-label">Six-digit code</span><input name="code" maxlength="6" inputmode="numeric" class="admin-input text-center text-xl tracking-[0.4em]" required></label><button class="admin-primary-btn mt-5 w-full"><i class="fas fa-shield-halved"></i>Enable two-factor authentication</button></form>
        @else
        <p class="mt-6 text-sm leading-7 text-slate-600">Your account requires a time-based authentication code after the password is verified.</p><form action="{{ route('admin.security.two-factor.disable') }}" method="POST" class="mt-6">@csrf @method('DELETE')<label><span class="admin-label">Confirm current password</span><input type="password" name="password" class="admin-input" required></label><button class="mt-5 inline-flex items-center gap-2 text-sm font-black uppercase text-red-600"><i class="fas fa-shield"></i>Disable two-factor authentication</button></form>
        @endif
    </article>
</section>
@endsection
