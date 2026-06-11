@extends('layouts.admin')
@section('title', 'Analytics')
@section('heading', 'Visitor Analytics')
@section('eyebrow', 'Privacy-friendly insights')
@section('content')
<div data-admin-reveal class="mb-7 flex flex-wrap items-center justify-between gap-4">
    <p class="max-w-2xl text-sm leading-6 text-slate-600">Understand how visitors use the public site without storing their raw IP addresses or collecting invasive profile data.</p>
    <div class="flex border border-slate-200 bg-white p-1">@foreach([7,30,90] as $period)<a href="{{ route('admin.analytics', ['days' => $period]) }}" class="px-4 py-2 text-xs font-black uppercase {{ $days === $period ? 'bg-[#081a43] text-white' : 'text-slate-500 hover:text-[#081a43]' }}">{{ $period }} days</a>@endforeach</div>
</div>
<section class="grid gap-4 sm:grid-cols-2"><article data-admin-reveal class="admin-metric"><p class="admin-kicker">Unique sessions</p><p class="mt-3 text-4xl font-black text-[#081a43]">{{ number_format($visitors) }}</p><p class="mt-3 text-sm text-slate-500">Visitors in selected period</p></article><article data-admin-reveal class="admin-metric"><p class="admin-kicker">Page views</p><p class="mt-3 text-4xl font-black text-[#081a43]">{{ number_format($pageViews) }}</p><p class="mt-3 text-sm text-slate-500">{{ $visitors ? number_format($pageViews / $visitors, 1) : 0 }} pages per visitor</p></article></section>
<section data-admin-reveal class="admin-panel mt-7"><div class="admin-panel-heading"><div><p class="admin-kicker">Selected period</p><h2 class="admin-title">Traffic trend</h2></div></div><div class="mt-8 flex h-72 items-end gap-1 border-b border-slate-200">@foreach($chart as $point)<div class="group flex h-full min-w-0 flex-1 items-end" title="{{ $point['label'] }}: {{ $point['value'] }}"><div class="w-full bg-[#FFA729] group-hover:bg-[#081a43]" style="height:{{ max(2, ($point['value']/$chartMax)*100) }}%"></div></div>@endforeach</div></section>
<section class="mt-7 grid gap-7 xl:grid-cols-2">
@foreach([['Top pages',$topPages,'path'],['Devices',$devices,'label'],['Browsers',$browsers,'label'],['Referring websites',$referrers,'label']] as $list)
<article data-admin-reveal class="admin-panel"><h2 class="admin-title">{{ $list[0] }}</h2><div class="mt-5 divide-y divide-slate-100">@forelse($list[1] as $row)<div class="flex items-center justify-between gap-4 py-3"><span class="truncate text-sm font-bold text-[#081a43]">{{ $row->{$list[2]} ?: 'Direct / unknown' }}</span><strong class="text-sm text-[#D98200]">{{ number_format($row->total) }}</strong></div>@empty<p class="py-8 text-sm text-slate-500">No data in this period.</p>@endforelse</div></article>
@endforeach
</section>
@endsection
