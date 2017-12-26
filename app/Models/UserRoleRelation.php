<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRoleRelation extends Model
{
    protected $fillable = [
        'user_id',
        'user_role_id'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function userRole() {
        return $this->belongsTo(UserRole::class, 'user_role_id', 'id');
    }
}
