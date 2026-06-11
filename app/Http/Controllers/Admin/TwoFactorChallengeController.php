<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use PragmaRX\Google2FA\Google2FA;

class TwoFactorChallengeController extends Controller
{
    public function create(Request $request): View|RedirectResponse
    {
        if (! $request->session()->has('admin_2fa_id')) {
            return redirect()->route('admin.login');
        }

        return view('admin.auth.two-factor-challenge');
    }

    public function store(Request $request, Google2FA $google2fa): RedirectResponse
    {
        $request->validate(['code' => ['required', 'digits:6']]);
        $admin = Admin::query()->findOrFail($request->session()->get('admin_2fa_id'));

        if (! $google2fa->verifyKey($admin->two_factor_secret, $request->string('code')->toString())) {
            return back()->withErrors(['code' => 'The authentication code is invalid.']);
        }

        Auth::guard('admin')->login($admin, $request->session()->pull('admin_2fa_remember', false));
        $request->session()->forget('admin_2fa_id');
        AuthController::completeLogin($request, $admin);

        return redirect()->intended(route('admin.dashboard'));
    }
}
