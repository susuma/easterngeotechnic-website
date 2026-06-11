<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageView;
use App\Models\VisitorSession;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AnalyticsController extends Controller
{
    public function __invoke(Request $request): View
    {
        $days = in_array((int) $request->input('days', 30), [7, 30, 90], true) ? (int) $request->input('days', 30) : 30;
        $start = now()->subDays($days - 1)->startOfDay();

        $viewsByDay = PageView::query()
            ->where('viewed_at', '>=', $start)
            ->selectRaw('DATE(viewed_at) as day, COUNT(*) as total')
            ->groupBy('day')
            ->pluck('total', 'day');

        $chart = collect(range(0, $days - 1))->map(function (int $offset) use ($viewsByDay, $start): array {
            $date = $start->copy()->addDays($offset);

            return ['label' => $date->format('M j'), 'value' => (int) ($viewsByDay[$date->toDateString()] ?? 0)];
        });

        return view('admin.analytics', [
            'days' => $days,
            'chart' => $chart,
            'chartMax' => max(1, $chart->max('value')),
            'visitors' => VisitorSession::query()->where('last_seen_at', '>=', $start)->count(),
            'pageViews' => PageView::query()->where('viewed_at', '>=', $start)->count(),
            'topPages' => PageView::query()->where('viewed_at', '>=', $start)->selectRaw('path, COUNT(*) as total')->groupBy('path')->orderByDesc('total')->limit(10)->get(),
            'devices' => VisitorSession::query()->where('last_seen_at', '>=', $start)->selectRaw('device as label, COUNT(*) as total')->groupBy('device')->orderByDesc('total')->get(),
            'browsers' => VisitorSession::query()->where('last_seen_at', '>=', $start)->selectRaw('browser as label, COUNT(*) as total')->groupBy('browser')->orderByDesc('total')->get(),
            'referrers' => VisitorSession::query()->where('last_seen_at', '>=', $start)->whereNotNull('referrer_host')->selectRaw('referrer_host as label, COUNT(*) as total')->groupBy('referrer_host')->orderByDesc('total')->limit(8)->get(),
        ]);
    }
}
