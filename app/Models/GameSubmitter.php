<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameSubmitter extends Model
{
    protected $fillable = [
        'game_id',
        'user_id'
    ];

    public function game() {
        return $this->belongsTo(Game::class, 'game_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
