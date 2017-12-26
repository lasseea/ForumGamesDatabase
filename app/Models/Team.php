<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'game_id',
        'name',
        'team_type_id',
        'result_type_id',
    ];

    public function game() {
        return $this->belongsTo(Game::class, 'game_id', 'id');
    }

    public function teamType() {
        return $this->belongsTo(TeamType::class, 'team_type_id', 'id');
    }

    public function resultType() {
        return $this->belongsTo(ResultType::class, 'result_type_id', 'id');
    }

    public function playerSlots() {
        return $this->hasMany(PlayerSlot::class, 'team_id', 'id');
    }
}
