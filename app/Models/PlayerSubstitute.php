<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerSubstitute extends Model
{
    protected $fillable = [
        'sub_out_id',
        'sub_out_player_id',
        'sub_in_player_id',
        'day_of_sub'
    ];

    public function playerPlayerSlotRelation()
    {
        return $this->belongsTo(PlayerPlayerSlotRelation::class, 'sub_out_id', 'id');
    }

    public function playerIn()
    {
        return $this->belongsTo(Player::class, 'sub_in_player_id', 'id');
    }

    public function playerOut()
    {
        return $this->belongsTo(Player::class, 'sub_out_player_id', 'id');
    }
}
