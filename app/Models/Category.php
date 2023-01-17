<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(static function ($category) {
            $category->slug = Str::slug($category->name);
        });
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
