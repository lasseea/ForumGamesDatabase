<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerSlot extends Model
{
    protected $fillable = [
        'game_id',
        'slot_number',
        'team_id',
        'role_name',
        'end_status_id',
        'end_day',
    ];

    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id', 'id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id', 'id');
    }

    public function endStatus()
    {
        return $this->belongsTo(PlayerSlotEndStatus::class, 'end_status_id', 'id');
    }

    public function playerPlayerSlotRelations() {
        return $this->hasMany(PlayerPlayerSlotRelation::class, 'player_slot_id', 'id');
    }

    public function playerSlotAlias() {
        return $this->hasOne(PlayerSlotAlias::class, 'player_slot_id', 'id');
    }
}
