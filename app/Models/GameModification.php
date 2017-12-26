<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameModification extends Model
{
    protected $fillable = [
        'game_id',
        'game_modification_id'
    ];

    public function game() {
        return $this->belongsTo(Game::class, 'game_id', 'id');
    }

    public function gameModificationType() {
        return $this->belongsTo(GameModificationType::class, 'game_modification_id', 'id');
    }
}
