<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobPosting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'department',
        'position_type',
        'qualification',
        'experience',
        'vacancies',
        'application_start_date',
        'application_end_date',
        'file_path',
        'is_active',
        'is_featured'
    ];

    protected $casts = [
        'application_start_date' => 'date',
        'application_end_date' => 'date',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeByPositionType($query, $type)
    {
        return $query->where('position_type', $type);
    }

    public function scopeByDepartment($query, $department)
    {
        return $query->where('department', $department);
    }
}
