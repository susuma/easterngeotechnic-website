<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminActivityLog;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ActivityLogController extends Controller
{
    public function __invoke(Request $request): View
    {
        $logs = AdminActivityLog::query()
            ->with('admin')
            ->when($request->filled('event'), fn ($query) => $query->where('event', $request->string('event')))
            ->latest('created_at')
            ->paginate(25)
            ->withQueryString();

        return view('admin.activity', compact('logs'));
    }
}
