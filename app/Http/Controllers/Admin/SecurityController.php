<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Support\AdminActivity;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;
use PragmaRX\Google2FA\Google2FA;

class SecurityController extends Controller
{
    public function edit(Request $request, Google2FA $google2fa): View
    {
        $admin = $request->user('admin');

        if (! $admin->two_factor_secret) {
            $admin->update(['two_factor_secret' => $google2fa->generateSecretKey()]);
        }

        return view('admin.security', [
            'admin' => $admin->fresh(),
            'otpUrl' => $google2fa->getQRCodeUrl(config('app.name'), $admin->email, $admin->two_factor_secret),
        ]);
    }

    public function confirm(Request $request, Google2FA $google2fa): RedirectResponse
    {
        $request->validate(['code' => ['required', 'digits:6']]);
        $admin = $request->user('admin');

        if (! $google2fa->verifyKey($admin->two_factor_secret, $request->string('code')->toString())) {
            return back()->withErrors(['code' => 'The authentication code is invalid.']);
        }

        $admin->update(['two_factor_confirmed_at' => now()]);
        AdminActivity::log('two_factor_enabled', 'Enabled two-factor authentication.', $admin);

        return back()->with('success', 'Two-factor authentication enabled.');
    }

    public function disable(Request $request): RedirectResponse
    {
        $request->validate(['password' => ['required', 'current_password:admin']]);
        $admin = $request->user('admin');
        $admin->update(['two_factor_secret' => null, 'two_factor_confirmed_at' => null]);
        AdminActivity::log('two_factor_disabled', 'Disabled two-factor authentication.', $admin);

        return back()->with('success', 'Two-factor authentication disabled.');
    }

    public function profile(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:254', 'unique:admins,email,'.$request->user('admin')->id],
            'current_password' => ['nullable', 'required_with:password', 'current_password:admin'],
            'password' => ['nullable', 'confirmed', Password::min(12)->mixedCase()->numbers()->symbols()->uncompromised()],
        ]);
        unset($validated['current_password']);
        if (blank($validated['password'] ?? null)) {
            unset($validated['password']);
        }
        $request->user('admin')->update($validated);
        AdminActivity::log('profile_updated', 'Updated administrator profile.', $request->user('admin'));

        return back()->with('success', 'Profile updated.');
    }
}
