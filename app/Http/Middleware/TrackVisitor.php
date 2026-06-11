<?php

namespace App\Http\Middleware;

use App\Models\PageView;
use App\Models\VisitorSession;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitor
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (! $this->shouldTrack($request)) {
            return $response;
        }

        if (! Schema::hasTable('visitor_sessions') || ! Schema::hasTable('page_views')) {
            return $response;
        }

        $visitorId = $request->cookie('egl_visitor') ?: (string) Str::uuid();
        $userAgent = $request->userAgent() ?? '';
        $now = now();

        $visitor = VisitorSession::query()->firstOrNew(['visitor_id' => $visitorId]);
        $visitor->fill([
            'ip_hash' => hash_hmac('sha256', $request->ip() ?? 'unknown', config('app.key')),
            'device' => $this->device($userAgent),
            'browser' => $this->browser($userAgent),
            'referrer_host' => parse_url($request->headers->get('referer', ''), PHP_URL_HOST),
            'first_seen_at' => $visitor->first_seen_at ?? $now,
            'last_seen_at' => $now,
        ])->save();

        PageView::query()->create([
            'visitor_id' => $visitorId,
            'path' => '/'.ltrim($request->path(), '/'),
            'route_name' => $request->route()?->getName(),
            'viewed_at' => $now,
        ]);

        return $response->withCookie(cookie(
            'egl_visitor',
            $visitorId,
            60 * 24 * 365,
            '/',
            null,
            $request->isSecure(),
            true,
            false,
            'lax',
        ));
    }

    private function shouldTrack(Request $request): bool
    {
        return $request->isMethod('GET')
            && ! $request->is('admin*')
            && ! auth('admin')->check()
            && ! preg_match('/bot|crawl|spider|slurp|preview/i', $request->userAgent() ?? '');
    }

    private function device(string $userAgent): string
    {
        return preg_match('/tablet|ipad/i', $userAgent) ? 'Tablet'
            : (preg_match('/mobile|iphone|android/i', $userAgent) ? 'Mobile' : 'Desktop');
    }

    private function browser(string $userAgent): string
    {
        return match (true) {
            str_contains($userAgent, 'Edg/') => 'Edge',
            str_contains($userAgent, 'Chrome/') => 'Chrome',
            str_contains($userAgent, 'Firefox/') => 'Firefox',
            str_contains($userAgent, 'Safari/') => 'Safari',
            default => 'Other',
        };
    }
}
