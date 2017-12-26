<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerPlayerSlotRelation extends Model
{
    protected $fillable = [
        'player_slot_id',
        'player_id'
    ];

    public function playerSlot() {
        return $this->belongsTo(PlayerSlot::class, 'player_slot_id', 'id');
    }

    public function player() {
        return $this->belongsTo(Player::class, 'player_id', 'id');
    }

    public function playerSubstitute() {
        return $this->hasMany(PlayerSubstitute::class, 'sub_out_id', 'id');
    }
}
