@extends('layouts.admin')
@section('title', 'Activity Log')
@section('heading', 'Activity Log')
@section('eyebrow', 'Security and change history')
@section('content')
<section data-admin-reveal class="admin-panel">
    <form method="GET" class="mb-7 flex max-w-xl gap-3"><input name="event" value="{{ request('event') }}" placeholder="Filter by event, e.g. login" class="admin-input"><button class="admin-secondary-btn"><i class="fas fa-filter"></i>Filter</button></form>
    <div class="space-y-1">@forelse($logs as $log)<article class="grid gap-3 border-l-2 border-slate-200 py-5 pl-5 sm:grid-cols-[1fr_auto] hover:border-[#FFA729]"><div><div class="flex flex-wrap items-center gap-3"><strong class="text-sm uppercase text-[#081a43]">{{ str_replace('_',' ', $log->event) }}</strong><span class="text-xs text-slate-400">{{ $log->admin?->name ?? 'System / guest' }}</span></div><p class="mt-2 text-sm text-slate-600">{{ $log->description }}</p></div><time class="text-xs font-bold text-slate-400">{{ $log->created_at->format('M j, Y H:i') }}</time></article>@empty<p class="py-12 text-center text-slate-500">No activity has been logged yet.</p>@endforelse</div>
    <div class="mt-6">{{ $logs->links() }}</div>
</section>
@endsection
