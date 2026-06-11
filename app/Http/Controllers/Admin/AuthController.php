<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Support\AdminActivity;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function create(): View
    {
        return view('admin.auth.login');
    }

    public function store(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $key = 'admin-login:'.strtolower($credentials['email']).'|'.$request->ip();

        if (RateLimiter::tooManyAttempts($key, 5)) {
            throw ValidationException::withMessages([
                'email' => 'Too many login attempts. Try again in '.RateLimiter::availableIn($key).' seconds.',
            ]);
        }

        $admin = Admin::query()->where('email', $credentials['email'])->first();

        if (! $admin || ! $admin->is_active || ! Auth::guard('admin')->validate($credentials)) {
            RateLimiter::hit($key, 60);
            AdminActivity::log('login_failed', 'Failed administrator login attempt.', properties: ['email' => $credentials['email']], request: $request);

            throw ValidationException::withMessages(['email' => 'The provided credentials are incorrect.']);
        }

        RateLimiter::clear($key);

        if ($admin->two_factor_confirmed_at) {
            $request->session()->put('admin_2fa_id', $admin->id);
            $request->session()->put('admin_2fa_remember', $request->boolean('remember'));

            return redirect()->route('admin.two-factor.challenge');
        }

        Auth::guard('admin')->login($admin, $request->boolean('remember'));
        $this->completeLogin($request, $admin);

        return redirect()->intended(route('admin.dashboard'));
    }

    public function destroy(Request $request): RedirectResponse
    {
        AdminActivity::log('logout', 'Administrator signed out.', request: $request);
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    public static function completeLogin(Request $request, Admin $admin): void
    {
        $admin->update([
            'last_login_at' => now(),
            'last_login_ip_hash' => hash_hmac('sha256', $request->ip() ?? 'unknown', config('app.key')),
        ]);
        $request->session()->regenerate();
        AdminActivity::log('login', 'Administrator signed in.', $admin, request: $request);
    }
}
