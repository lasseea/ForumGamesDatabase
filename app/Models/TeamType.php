<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamType extends Model
{
    protected $fillable = [
        'name'
    ];

    public function teams()
    {
        return $this->hasMany(Team::class, 'team_type_id', 'id');
    }
}
