<?php

namespace App\Models;

use App\Enum\CategoryType;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'slug',
        'type',
        'color',
        'icon',
        'sort_order',
    ];

    protected $casts = [
        'type' => CategoryType::class
    ];

    // Accessor for formatted name
    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value),
            set: fn (string $value) => strtolower($value)
        );
    }

    // Scope for filtering by type
    public function scopeOfType($query, CategoryType $type)
    {
        return $query->where('type', $type->value);
    }

    // Scope for ordered categories
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }

    // Relationshipp methods (for future use)
    // public function projects()
    // {
    //     return $this->belongsToMany(Project::class);
    // }

    // public function skills()
    // {
    //     return $this->hasMany(Skill::class);
    // }
}
