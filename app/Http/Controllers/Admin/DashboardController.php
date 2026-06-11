<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use App\Models\PageView;
use App\Models\VisitorSession;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        $start = now()->subDays(13)->startOfDay();
        $viewsByDay = PageView::query()
            ->where('viewed_at', '>=', $start)
            ->selectRaw('DATE(viewed_at) as day, COUNT(*) as total')
            ->groupBy('day')
            ->pluck('total', 'day');

        $chart = collect(range(0, 13))->map(function (int $offset) use ($viewsByDay): array {
            $date = now()->subDays(13 - $offset);

            return [
                'label' => $date->format('M j'),
                'value' => (int) ($viewsByDay[$date->toDateString()] ?? 0),
            ];
        });

        return view('admin.dashboard', [
            'metrics' => [
                'visitorsToday' => VisitorSession::query()->whereDate('last_seen_at', today())->count(),
                'visitorsMonth' => VisitorSession::query()->where('last_seen_at', '>=', now()->startOfMonth())->count(),
                'viewsToday' => PageView::query()->whereDate('viewed_at', today())->count(),
                'newInquiries' => Inquiry::query()->where('status', 'new')->count(),
            ],
            'chart' => $chart,
            'chartMax' => max(1, $chart->max('value')),
            'recentInquiries' => Inquiry::query()->latest()->limit(6)->get(),
            'topPages' => PageView::query()
                ->where('viewed_at', '>=', now()->subDays(30))
                ->selectRaw('path, COUNT(*) as total')
                ->groupBy('path')
                ->orderByDesc('total')
                ->limit(5)
                ->get(),
        ]);
    }
}
