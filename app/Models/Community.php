<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $fillable = [
        'name', 'link',
    ];

    public function games() {
        return $this->hasMany(Game::class, 'community_id', 'id');
    }

    /** users that belongs to the community */
    public function users() {
        return $this->belongsToMany(User::class, 'user_community_permissions');
    }
}
