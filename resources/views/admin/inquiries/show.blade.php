@extends('layouts.admin')
@section('title', 'Inquiry from '.$inquiry->name)
@section('heading', 'Inquiry Detail')
@section('eyebrow', 'Received '.$inquiry->created_at->format('M j, Y'))
@section('content')
<div class="mb-6"><a href="{{ route('admin.inquiries.index') }}" class="admin-text-link"><i class="fas fa-arrow-left"></i>Back to inquiries</a></div>
<section class="grid gap-7 xl:grid-cols-[1.25fr_0.75fr]">
    <article data-admin-reveal class="admin-panel">
        <div class="flex flex-wrap items-start justify-between gap-5 border-b border-slate-100 pb-6"><div><p class="admin-kicker">Client</p><h2 class="mt-2 text-3xl font-black text-[#081a43]">{{ $inquiry->name }}</h2><p class="mt-2 text-sm text-slate-500">{{ $inquiry->service ?: 'General inquiry' }} · {{ ucfirst($inquiry->source) }} form</p></div><span class="admin-status admin-status-{{ $inquiry->status }}">{{ $inquiry->status }}</span></div>
        <div class="grid gap-4 border-b border-slate-100 py-6 sm:grid-cols-2"><a href="mailto:{{ $inquiry->email }}" class="border border-slate-200 p-4 hover:border-[#FFA729]"><span class="admin-label">Email</span><strong class="break-all text-[#081a43]">{{ $inquiry->email }}</strong></a><a href="tel:{{ $inquiry->phone }}" class="border border-slate-200 p-4 hover:border-[#FFA729]"><span class="admin-label">Phone</span><strong class="text-[#081a43]">{{ $inquiry->phone ?: 'Not supplied' }}</strong></a></div>
        <div class="py-7"><p class="admin-label">Project details</p><p class="whitespace-pre-line text-base leading-8 text-slate-700">{{ $inquiry->message }}</p></div>
    </article>
    <aside data-admin-reveal class="space-y-7">
        <form action="{{ route('admin.inquiries.update', $inquiry) }}" method="POST" class="admin-panel">@csrf @method('PUT')
            <h2 class="admin-title">Manage inquiry</h2>
            <label class="mt-6 block"><span class="admin-label">Status</span><select name="status" class="admin-input">@foreach(['new','read','contacted','closed'] as $status)<option value="{{ $status }}" @selected($inquiry->status === $status)>{{ ucfirst($status) }}</option>@endforeach</select></label>
            <label class="mt-5 block"><span class="admin-label">Internal notes</span><textarea name="admin_notes" rows="7" class="admin-input" placeholder="Add notes visible only to administrators">{{ $inquiry->admin_notes }}</textarea></label>
            <button class="admin-primary-btn mt-5 w-full"><i class="fas fa-floppy-disk"></i>Save changes</button>
        </form>
        @if(auth('admin')->user()->isOwner())<form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST" class="admin-panel" onsubmit="return confirm('Permanently delete this inquiry?')">@csrf @method('DELETE')<h2 class="admin-title">Delete inquiry</h2><p class="mt-3 text-sm leading-6 text-slate-500">This permanently removes the client message and notes.</p><button class="mt-5 inline-flex items-center gap-2 text-sm font-black uppercase text-red-600"><i class="fas fa-trash"></i>Delete permanently</button></form>@endif
    </aside>
</section>
@endsection
