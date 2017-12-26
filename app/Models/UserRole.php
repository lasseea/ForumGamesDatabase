<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = [
        'name'
    ];

    public function userRoleRelations() {
        return $this->hasMany(UserRoleRelation::class, 'user_role_id', 'id');
    }
}
