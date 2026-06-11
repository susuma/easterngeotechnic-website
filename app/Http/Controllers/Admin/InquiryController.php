<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use App\Support\AdminActivity;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\StreamedResponse;

class InquiryController extends Controller
{
    public function index(Request $request): View
    {
        $inquiries = Inquiry::query()
            ->when($request->filled('status'), fn ($query) => $query->where('status', $request->string('status')))
            ->when($request->filled('search'), function ($query) use ($request): void {
                $search = '%'.$request->string('search')->toString().'%';
                $query->where(fn ($query) => $query
                    ->where('name', 'like', $search)
                    ->orWhere('email', 'like', $search)
                    ->orWhere('phone', 'like', $search)
                    ->orWhere('service', 'like', $search));
            })
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view('admin.inquiries.index', compact('inquiries'));
    }

    public function show(Inquiry $inquiry): View
    {
        if ($inquiry->status === 'new') {
            $inquiry->update(['status' => 'read', 'read_at' => now()]);
        }

        return view('admin.inquiries.show', compact('inquiry'));
    }

    public function update(Request $request, Inquiry $inquiry): RedirectResponse
    {
        $validated = $request->validate([
            'status' => ['required', Rule::in(['new', 'read', 'contacted', 'closed'])],
            'admin_notes' => ['nullable', 'string', 'max:5000'],
        ]);

        $timestamps = match ($validated['status']) {
            'read' => ['read_at' => $inquiry->read_at ?? now()],
            'contacted' => ['contacted_at' => $inquiry->contacted_at ?? now()],
            'closed' => ['closed_at' => $inquiry->closed_at ?? now()],
            default => [],
        };

        $inquiry->update([...$validated, ...$timestamps]);
        AdminActivity::log('inquiry_updated', "Updated inquiry from {$inquiry->name}.", $inquiry, ['status' => $validated['status']]);

        return back()->with('success', 'Inquiry updated.');
    }

    public function destroy(Inquiry $inquiry): RedirectResponse
    {
        abort_unless(auth('admin')->user()?->isOwner(), 403);
        AdminActivity::log('inquiry_deleted', "Deleted inquiry from {$inquiry->name}.", $inquiry);
        $inquiry->delete();

        return redirect()->route('admin.inquiries.index')->with('success', 'Inquiry deleted.');
    }

    public function export(Request $request): StreamedResponse
    {
        AdminActivity::log('inquiries_exported', 'Exported inquiries as CSV.');

        return Response::streamDownload(function () use ($request): void {
            $stream = fopen('php://output', 'w');
            fputcsv($stream, ['Date', 'Name', 'Email', 'Phone', 'Service', 'Source', 'Status', 'Message', 'Admin notes']);

            Inquiry::query()
                ->when($request->filled('status'), fn ($query) => $query->where('status', $request->string('status')))
                ->latest()
                ->chunk(200, function ($inquiries) use ($stream): void {
                    foreach ($inquiries as $inquiry) {
                        fputcsv($stream, [
                            $inquiry->created_at->toDateTimeString(), $inquiry->name, $inquiry->email,
                            $inquiry->phone, $inquiry->service, $inquiry->source, $inquiry->status,
                            $inquiry->message, $inquiry->admin_notes,
                        ]);
                    }
                });

            fclose($stream);
        }, 'egl-inquiries-'.now()->format('Y-m-d').'.csv', ['Content-Type' => 'text/csv']);
    }
}
