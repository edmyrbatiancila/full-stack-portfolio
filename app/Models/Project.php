<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description', 
        'short_description',
        'slug',
        'project_url',
        'github_url', 
        'demo_video_url',
        'featured_image',
        'gallery_images',
        'thumbnail',
        'status',
        'is_featured',
        'sort_order',
        'technologies',
        'features', 
        'challenges',
        'lessons_learned', // Fix the typo in migration first
        'started_at',
        'completed_at',
        'is_ongoing',
        'meta_description',
        'meta_keywords',
        'view_count',
    ];

    protected $casts = [
        'technologies' => 'array',
        'features' => 'array', 
        'gallery_images' => 'array',
        'meta_keywords' => 'array',
        'is_featured' => 'boolean',
        'is_ongoing' => 'boolean',
        'started_at' => 'date',
        'completed_at' => 'date',
        'view_count' => 'integer',
        'sort_order' => 'integer',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'project_category');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
