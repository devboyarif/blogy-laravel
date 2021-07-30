<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    // model binging with slug
    public function getRouteKeyName()
    {
        return 'slug';
    }

    //=====================================================
    //================= Model Relationship ================
    //=====================================================

    // tag model
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // category model
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // user model
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // ==================================================
    // ======================== Scopes ==================
    // ==================================================

    // global scope with slug and active status
    public static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->slug = Str::slug($item->title);
        });

        static::addGlobalScope('status', function ($builder) {
            $builder->whereStatus(true);
        });
    }

    // category
    public function scopeWithCategory($query)
    {
        return $query->with('category:id,name,slug');
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
