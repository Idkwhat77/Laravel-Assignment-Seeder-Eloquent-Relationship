<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'demo_url',
        'github_url',
        'technologies',
        'featured',
        'status',
        'project_category_id'
    ];

    protected $casts = [
        'technologies' => 'array',
        'featured' => 'boolean'
    ];

    public function projectCategory(): BelongsTo
    {
        return $this->belongsTo(ProjectCategory::class);
    }
}