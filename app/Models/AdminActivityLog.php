<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class AdminActivityLog extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'admin_id', 'event', 'description', 'subject_type', 'subject_id',
        'properties', 'ip_hash', 'created_at',
    ];

    protected function casts(): array
    {
        return ['properties' => 'array', 'created_at' => 'datetime'];
    }

    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }

    public function subject(): MorphTo
    {
        return $this->morphTo();
    }
}
