<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Comment extends Model
{
    use HasFactory;

    public function post(): BelongsTo {
        return $this->belongsTo(Post::class);
    }

    public function user(): HasOne {
        return $this->hasOne(User::class);
    }

    public function parent(): HasOne {
        return $this->hasOne(Comment::class, 'parent_id');
    }
}