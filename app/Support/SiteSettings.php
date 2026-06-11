<?php

namespace App\Support;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Schema;

class SiteSettings
{
    public const DEFAULTS = [
        'company_name' => 'Eastern Geotechnics Limited',
        'phone_primary' => '+255 760 594 570',
        'phone_secondary' => '+255 760 044 560',
        'email' => 'projects@easterngeotechnics.co.tz',
        'address' => 'P.O. Box 22215, Dar es Salaam, Tanzania',
        'drilling_capacity' => '300',
        'deployable_teams' => '10',
        'facebook_url' => '#',
        'twitter_url' => '#',
        'google_url' => '#',
        'instagram_url' => '#',
        'pinterest_url' => '#',
        'maintenance_enabled' => '0',
        'analytics_retention_days' => '365',
    ];

    private ?array $values = null;

    public function all(): array
    {
        if ($this->values !== null) {
            return $this->values;
        }

        if (! Schema::hasTable('site_settings')) {
            return $this->values = self::DEFAULTS;
        }

        return $this->values = array_merge(
            self::DEFAULTS,
            SiteSetting::query()->pluck('value', 'key')->all(),
        );
    }

    public function get(string $key, mixed $default = null): mixed
    {
        return $this->all()[$key] ?? $default;
    }

    public function setMany(array $settings): void
    {
        foreach ($settings as $key => $value) {
            SiteSetting::query()->updateOrCreate(
                ['key' => $key],
                ['value' => (string) $value, 'group' => $this->groupFor($key)],
            );
        }

        $this->values = null;
    }

    private function groupFor(string $key): string
    {
        return str_contains($key, '_url') ? 'social' : match ($key) {
            'maintenance_enabled', 'analytics_retention_days' => 'system',
            'drilling_capacity', 'deployable_teams' => 'capability',
            default => 'contact',
        };
    }
}
