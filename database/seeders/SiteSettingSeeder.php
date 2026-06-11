<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use App\Support\SiteSettings;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        foreach (SiteSettings::DEFAULTS as $key => $value) {
            SiteSetting::query()->firstOrCreate(['key' => $key], ['value' => $value, 'group' => 'general']);
        }
    }
}
