<?php

use App\Models\Admin;
use App\Models\Inquiry;
use App\Models\PageView;
use App\Models\SiteSetting;
use App\Models\VisitorSession;
use Illuminate\Support\Facades\Hash;
use PragmaRX\Google2FA\Google2FA;

function admin(array $attributes = []): Admin
{
    return Admin::query()->create(array_merge([
        'name' => 'Portal Owner',
        'email' => 'owner@example.com',
        'password' => Hash::make('SecurePassword!123'),
        'role' => 'owner',
        'is_active' => true,
    ], $attributes));
}

test('administrator can login and see dashboard metrics', function () {
    VisitorSession::query()->create([
        'visitor_id' => fake()->uuid(),
        'ip_hash' => hash('sha256', 'visitor'),
        'device' => 'Desktop',
        'browser' => 'Chrome',
        'first_seen_at' => now(),
        'last_seen_at' => now(),
    ]);
    PageView::query()->create(['visitor_id' => fake()->uuid(), 'path' => '/', 'viewed_at' => now()]);
    Inquiry::query()->create([
        'name' => 'Client Name',
        'email' => 'client@example.com',
        'message' => 'We need a complete geotechnical investigation.',
        'source' => 'contact',
    ]);
    $admin = admin();

    $this->post(route('admin.login.store'), [
        'email' => $admin->email,
        'password' => 'SecurePassword!123',
    ])->assertRedirect(route('admin.dashboard'));

    $this->get(route('admin.dashboard'))
        ->assertOk()
        ->assertSee('Operations Dashboard')
        ->assertSee('Client Name');
});

test('editor cannot manage owners or website settings', function () {
    $editor = admin(['email' => 'editor@example.com', 'role' => 'editor']);

    $this->actingAs($editor, 'admin')
        ->get(route('admin.settings.edit'))
        ->assertForbidden();

    $this->actingAs($editor, 'admin')
        ->get(route('admin.administrators.index'))
        ->assertForbidden();
});

test('owner can update public website settings', function () {
    $owner = admin();

    $this->actingAs($owner, 'admin')->put(route('admin.settings.update'), [
        'company_name' => 'Eastern Geotechnics Limited',
        'phone_primary' => '+255 700 000 000',
        'phone_secondary' => '+255 700 000 001',
        'email' => 'projects@example.com',
        'address' => 'Dar es Salaam, Tanzania',
        'drilling_capacity' => 350,
        'deployable_teams' => 12,
        'facebook_url' => '#',
        'twitter_url' => '#',
        'google_url' => '#',
        'instagram_url' => '#',
        'pinterest_url' => '#',
        'analytics_retention_days' => 365,
    ])->assertRedirect();

    expect(SiteSetting::query()->where('key', 'drilling_capacity')->value('value'))->toBe('350');
});

test('administrator can manage an inquiry', function () {
    $owner = admin();
    $inquiry = Inquiry::query()->create([
        'name' => 'Client Name',
        'email' => 'client@example.com',
        'message' => 'We need a complete geotechnical investigation.',
        'source' => 'home',
    ]);

    $this->actingAs($owner, 'admin')
        ->put(route('admin.inquiries.update', $inquiry), ['status' => 'contacted', 'admin_notes' => 'Called client.'])
        ->assertRedirect();

    expect($inquiry->fresh()->status)->toBe('contacted')
        ->and($inquiry->fresh()->contacted_at)->not->toBeNull();
});

test('public visits are recorded without storing raw ip addresses', function () {
    $this->withServerVariables(['REMOTE_ADDR' => '203.0.113.10'])->get(route('home'))->assertOk();

    expect(VisitorSession::query()->count())->toBe(1)
        ->and(PageView::query()->count())->toBe(1)
        ->and(VisitorSession::query()->first()->ip_hash)->not->toContain('203.0.113.10');
});

test('administrator can enable two factor authentication', function () {
    $owner = admin();
    $google2fa = app(Google2FA::class);
    $owner->update(['two_factor_secret' => $google2fa->generateSecretKey()]);
    $code = $google2fa->getCurrentOtp($owner->fresh()->two_factor_secret);

    $this->actingAs($owner, 'admin')
        ->post(route('admin.security.two-factor.confirm'), ['code' => $code])
        ->assertRedirect();

    expect($owner->fresh()->two_factor_confirmed_at)->not->toBeNull();
});

test('maintenance mode hides public pages but keeps admin login available', function () {
    SiteSetting::query()->create(['key' => 'maintenance_enabled', 'value' => '1', 'group' => 'system']);

    $this->get(route('home'))->assertStatus(503);
    $this->get(route('admin.login'))->assertOk();
});
