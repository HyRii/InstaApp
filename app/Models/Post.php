<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     use HasFactory;

    protected $fillable = [
        'user_id',
        'caption',
        'image_path',
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
    public function comments()
    {
        return $this->hasMany(Comment::class)->latest();
    }

    
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    
    public function isLikedBy(?User $user): bool
    {
        if (!$user) {
            return false;
        }
        return $this->likes()->where('user_id', $user->id)->exists();
    }

    
    public function getImageUrlAttribute(): string
    {
        return asset('storage/' . $this->image_path);
    }
}
