<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Community extends Model
{
    use HasFactory;

    public function owner(): HasOne {
        return $this->hasOne(User::class, 'owner_id');
    }

    public function posts(): HasMany {
        return $this->hasMany(Post::class);
    }

    public function users(): BelongsToMany {
        return $this->belongsToMany(
            User::class,
            'user_communities',
            'community_id',
            'user_id'
        );
    }
}
