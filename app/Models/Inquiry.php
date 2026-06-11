<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'service', 'message', 'source', 'status',
        'admin_notes', 'read_at', 'contacted_at', 'closed_at',
    ];

    protected function casts(): array
    {
        return [
            'read_at' => 'datetime',
            'contacted_at' => 'datetime',
            'closed_at' => 'datetime',
        ];
    }
}
