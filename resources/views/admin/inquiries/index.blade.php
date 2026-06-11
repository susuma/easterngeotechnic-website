@extends('layouts.admin')
@section('title', 'Inquiries')
@section('heading', 'Client Inquiries')
@section('eyebrow', 'Opportunity inbox')
@section('content')
<section data-admin-reveal class="admin-panel">
    <div class="flex flex-col gap-5 xl:flex-row xl:items-end xl:justify-between">
        <form method="GET" class="grid flex-1 gap-4 sm:grid-cols-[1fr_180px_auto]">
            <label><span class="admin-label">Search</span><input name="search" value="{{ request('search') }}" placeholder="Name, email, phone or service" class="admin-input"></label>
            <label><span class="admin-label">Status</span><select name="status" class="admin-input"><option value="">All statuses</option>@foreach(['new','read','contacted','closed'] as $status)<option value="{{ $status }}" @selected(request('status') === $status)>{{ ucfirst($status) }}</option>@endforeach</select></label>
            <button class="admin-secondary-btn self-end"><i class="fas fa-magnifying-glass"></i>Filter</button>
        </form>
        <a href="{{ route('admin.inquiries.export', request()->only('status')) }}" class="admin-primary-btn"><i class="fas fa-download"></i>Export CSV</a>
    </div>
    <div class="admin-table-wrap mt-7"><table class="admin-table"><thead><tr><th>Client</th><th>Service / source</th><th>Status</th><th>Received</th><th></th></tr></thead><tbody>
    @forelse($inquiries as $inquiry)<tr class="{{ $inquiry->status === 'new' ? 'bg-orange-50/50' : '' }}"><td><strong>{{ $inquiry->name }}</strong><span>{{ $inquiry->email }}{{ $inquiry->phone ? ' · '.$inquiry->phone : '' }}</span></td><td><strong>{{ $inquiry->service ?: 'General inquiry' }}</strong><span>{{ ucfirst($inquiry->source) }} form</span></td><td><span class="admin-status admin-status-{{ $inquiry->status }}">{{ $inquiry->status }}</span></td><td>{{ $inquiry->created_at->format('M j, Y') }}<span>{{ $inquiry->created_at->format('H:i') }}</span></td><td><a href="{{ route('admin.inquiries.show', $inquiry) }}" class="admin-icon-btn" title="Open inquiry"><i class="fas fa-arrow-right"></i></a></td></tr>
    @empty<tr><td colspan="5" class="py-12 text-center text-slate-500">No inquiries match these filters.</td></tr>@endforelse
    </tbody></table></div>
    <div class="mt-6">{{ $inquiries->links() }}</div>
</section>
@endsection
