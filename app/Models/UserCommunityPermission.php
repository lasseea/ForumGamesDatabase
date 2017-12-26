<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCommunityPermission extends Model
{
    protected $fillable = [
        'user_id',
        'community_id',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function community() {
        return $this->belongsTo(Community::class, 'community_id', 'id');
    }
}
