<?php

namespace App\Support;

use App\Models\AdminActivityLog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AdminActivity
{
    public static function log(
        string $event,
        string $description,
        ?Model $subject = null,
        array $properties = [],
        ?Request $request = null,
    ): void {
        $request ??= request();

        AdminActivityLog::query()->create([
            'admin_id' => auth('admin')->id(),
            'event' => $event,
            'description' => $description,
            'subject_type' => $subject?->getMorphClass(),
            'subject_id' => $subject?->getKey(),
            'properties' => $properties ?: null,
            'ip_hash' => $request?->ip() ? hash_hmac('sha256', $request->ip(), config('app.key')) : null,
            'created_at' => now(),
        ]);
    }
}
