<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'page_type',
        'parent_slug',
        'meta_title',
        'meta_description',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByType($query, $type)
    {
        return $query->where('page_type', $type);
    }

    public function scopeByParent($query, $parentSlug)
    {
        return $query->where('parent_slug', $parentSlug);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
