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

    public function userCommunityPermissions() {
        return $this->hasMany(UserCommunityPermission::class, 'community_id', 'id');
    }
}
