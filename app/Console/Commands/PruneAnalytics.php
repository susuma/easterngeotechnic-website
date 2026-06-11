<?php

namespace App\Console\Commands;

use App\Models\PageView;
use App\Models\VisitorSession;
use App\Support\SiteSettings;
use Illuminate\Console\Command;

class PruneAnalytics extends Command
{
    protected $signature = 'analytics:prune';

    protected $description = 'Delete website analytics older than the configured retention period';

    public function handle(SiteSettings $settings): int
    {
        $cutoff = now()->subDays((int) $settings->get('analytics_retention_days', 365));
        $views = PageView::query()->where('viewed_at', '<', $cutoff)->delete();
        $visitors = VisitorSession::query()->where('last_seen_at', '<', $cutoff)->delete();
        $this->info("Deleted {$views} page views and {$visitors} visitor sessions.");

        return self::SUCCESS;
    }
}
