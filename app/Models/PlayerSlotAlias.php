<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerSlotAlias extends Model
{
    protected $fillable = [
        'player_slot_id',
        'alias'
    ];

    public function playerSlot() {
        return $this->belongsTo(PlayerSlot::class, 'player_slot_id', 'id');
    }
}
