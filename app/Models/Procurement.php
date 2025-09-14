<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Procurement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'type',
        'reference_number',
        'estimated_value',
        'opening_date',
        'closing_date',
        'file_path',
        'status',
        'is_active'
    ];

    protected $casts = [
        'opening_date' => 'date',
        'closing_date' => 'date',
        'estimated_value' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }
}
