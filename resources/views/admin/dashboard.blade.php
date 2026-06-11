@extends('layouts.admin')
@section('title', 'Dashboard')
@section('heading', 'Operations Dashboard')
@section('eyebrow', 'Live overview')
@section('content')
<section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
@foreach([
    ['Visitors today', $metrics['visitorsToday'], 'fa-users', 'People recorded today'],
    ['Visitors this month', $metrics['visitorsMonth'], 'fa-calendar-days', 'Unique browser sessions'],
    ['Page views today', $metrics['viewsToday'], 'fa-eye', 'Public pages viewed'],
    ['New inquiries', $metrics['newInquiries'], 'fa-inbox', 'Awaiting review'],
] as $metric)
<article data-admin-reveal class="admin-metric"><div class="flex items-start justify-between gap-5"><div><p class="text-xs font-black uppercase tracking-[0.14em] text-slate-500">{{ $metric[0] }}</p><p class="mt-4 text-4xl font-black text-[#081a43]">{{ number_format($metric[1]) }}</p></div><span class="grid h-12 w-12 place-items-center bg-[#FFA729]/15 text-xl text-[#D98200]"><i class="fas {{ $metric[2] }}"></i></span></div><p class="mt-5 border-t border-slate-100 pt-4 text-xs text-slate-500">{{ $metric[3] }}</p></article>
@endforeach
</section>

<section class="mt-7 grid gap-7 xl:grid-cols-[1.5fr_0.8fr]">
    <article data-admin-reveal class="admin-panel">
        <div class="admin-panel-heading"><div><p class="admin-kicker">Last 14 days</p><h2 class="admin-title">Website traffic</h2></div><a href="{{ route('admin.analytics') }}" class="admin-text-link">Full analytics <i class="fas fa-arrow-right"></i></a></div>
        <div class="mt-8 flex h-64 items-end gap-2 border-b border-slate-200">
            @foreach($chart as $point)<div class="group flex h-full min-w-0 flex-1 items-end" title="{{ $point['label'] }}: {{ $point['value'] }} views"><div class="w-full bg-[#FFA729] transition-all duration-500 group-hover:bg-[#081a43]" style="height: {{ max(3, ($point['value'] / $chartMax) * 100) }}%"></div></div>@endforeach
        </div>
        <div class="mt-3 flex justify-between text-[10px] font-bold uppercase tracking-wider text-slate-400"><span>{{ $chart->first()['label'] }}</span><span>Page views</span><span>{{ $chart->last()['label'] }}</span></div>
    </article>
    <article data-admin-reveal class="admin-panel">
        <div class="admin-panel-heading"><div><p class="admin-kicker">30-day activity</p><h2 class="admin-title">Top pages</h2></div></div>
        <div class="mt-5 divide-y divide-slate-100">
            @forelse($topPages as $page)<div class="flex items-center gap-4 py-4"><span class="grid h-9 w-9 place-items-center bg-slate-100 text-xs font-black text-[#081a43]">{{ $loop->iteration }}</span><div class="min-w-0 flex-1"><p class="truncate text-sm font-bold text-[#081a43]">{{ $page->path }}</p></div><strong class="text-sm text-[#D98200]">{{ number_format($page->total) }}</strong></div>@empty<p class="py-8 text-sm text-slate-500">Traffic data will appear as visitors browse the website.</p>@endforelse
        </div>
    </article>
</section>

<section data-admin-reveal class="admin-panel mt-7">
    <div class="admin-panel-heading"><div><p class="admin-kicker">Project opportunities</p><h2 class="admin-title">Recent inquiries</h2></div><a href="{{ route('admin.inquiries.index') }}" class="admin-text-link">Manage all <i class="fas fa-arrow-right"></i></a></div>
    <div class="admin-table-wrap mt-6"><table class="admin-table"><thead><tr><th>Client</th><th>Service</th><th>Status</th><th>Received</th><th></th></tr></thead><tbody>
    @forelse($recentInquiries as $inquiry)<tr><td><strong>{{ $inquiry->name }}</strong><span>{{ $inquiry->email }}</span></td><td>{{ $inquiry->service ?: 'General inquiry' }}</td><td><span class="admin-status admin-status-{{ $inquiry->status }}">{{ $inquiry->status }}</span></td><td>{{ $inquiry->created_at->diffForHumans() }}</td><td><a href="{{ route('admin.inquiries.show', $inquiry) }}" class="admin-icon-btn" aria-label="Open inquiry"><i class="fas fa-arrow-right"></i></a></td></tr>@empty<tr><td colspan="5" class="py-10 text-center text-slate-500">No inquiries have been received yet.</td></tr>@endforelse
    </tbody></table></div>
</section>
@endsection
