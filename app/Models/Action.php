<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $fillable = [
        'user',
        'target',
        'name',
        'game_id',
        'day_or_night',
        'which_day_or_night',
    ];

    public function game() {
        return $this->belongsTo(Game::class, 'game_id', 'id');
    }
}
