<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    //=====================================================
    //================= Model Relationship ================
    //=====================================================

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // ==================================================
    // ======================== Scopes ==================
    // ==================================================

    // global scope with slug and active status
    public static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->slug = Str::slug($item->name);
        });

        static::addGlobalScope('status', function ($builder) {
            $builder->whereStatus(true);
        });
    }

    // with posts eager loading
    public function scopeWithPosts($query)
    {
        return $query->with('posts');
    }

    // status
    public function scopeStatus($query, $value)
    {
        return $query->whereStatus($value);
    }

    // featured
    public function scopeFeatured($query, $value)
    {
        return $query->whereFeatured($value);
    }
}
