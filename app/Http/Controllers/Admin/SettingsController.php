<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Support\AdminActivity;
use App\Support\SiteSettings;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingsController extends Controller
{
    public function edit(SiteSettings $settings): View
    {
        return view('admin.settings', ['settings' => $settings->all()]);
    }

    public function update(Request $request, SiteSettings $settings): RedirectResponse
    {
        $validated = $request->validate([
            'company_name' => ['required', 'string', 'max:150'],
            'phone_primary' => ['required', 'string', 'max:40'],
            'phone_secondary' => ['nullable', 'string', 'max:40'],
            'email' => ['required', 'email', 'max:254'],
            'address' => ['required', 'string', 'max:255'],
            'drilling_capacity' => ['required', 'integer', 'min:1', 'max:9999'],
            'deployable_teams' => ['required', 'integer', 'min:1', 'max:999'],
            'facebook_url' => ['nullable', 'string', 'max:255'],
            'twitter_url' => ['nullable', 'string', 'max:255'],
            'google_url' => ['nullable', 'string', 'max:255'],
            'instagram_url' => ['nullable', 'string', 'max:255'],
            'pinterest_url' => ['nullable', 'string', 'max:255'],
            'analytics_retention_days' => ['required', 'integer', 'min:30', 'max:1825'],
        ]);
        $validated['maintenance_enabled'] = $request->boolean('maintenance_enabled') ? '1' : '0';
        $settings->setMany($validated);
        AdminActivity::log('settings_updated', 'Updated website settings.');

        return back()->with('success', 'Website settings saved.');
    }
}
