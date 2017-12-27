<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @param String $password
     */
    public function setPasswordAttribute(String $password) {
        $this->attributes['password'] = bcrypt($password);
    }

    public function gameSubmitters() {
        return $this->hasMany(GameSubmitter::class, 'user_id', 'id');
    }

    public function gameUpdaters() {
        return $this->hasMany(GameUpdater::class, 'user_id', 'id');
    }

    public function userCommunityPermissions() {
        return $this->hasMany(UserCommunityPermission::class, 'user_id', 'id');
    }

    public function userRoleRelations() {
        return $this->hasMany(UserRoleRelation::class, 'user_id', 'id');
    }
}
