<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'excerpt',
        'image',
        'slug',
        'published_at',
        'is_published',
        'blog_category_id'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_published' => 'boolean'
    ];

    public function blogCategory(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class);
    }
}