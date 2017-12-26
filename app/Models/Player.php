<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name'
    ];

    public function playerPlayerSlotRelations()
    {
        return $this->hasMany(PlayerPlayerSlotRelation::class, 'player_id', 'id');
    }

    public function playerSubstituteIns()
    {
        return $this->hasMany(PlayerSubstitute::class, 'sub_in_player_id', 'id');
    }

    public function playerSubstituteOuts()
    {
        return $this->hasMany(PlayerSubstitute::class, 'sub_out_player_id', 'id');
    }
}
