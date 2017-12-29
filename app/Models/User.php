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

    public function isAdmin() : bool {
        return $this->roles()->where('name', '=', config('admin.admin_role_name'))->exists();
    }

    public function isPartOfCommunity(Community $community) : bool {
        return (bool) $this->communities()->find($community->getAttributeValue('id'));
    }

    /**
     * @param String $password
     */
    public function setPasswordAttribute(String $password) {
        $this->attributes['password'] = bcrypt($password);
    }

    /** games that the user has been part of submitting(inserting) */
    public function submittedGames() {
        return $this->belongsToMany(Game::class, 'game_submitters');
    }

    /** games that the user has been part of updating */
    public function updatedGames() {
        return $this->belongsToMany(Game::class, 'game_updaters');
    }

    /** communities that the user belongs to */
    public function communities() {
        return $this->belongsToMany(Community::class, 'user_community_permissions');
    }

    public function roles() {
        return $this->belongsToMany(Role::class);
    }
}
