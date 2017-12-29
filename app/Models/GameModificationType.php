<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameModificationType extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    /** Games with this modification type */
    public function games() {
        return $this->belongsToMany(Game::class, 'game_modifications');
    }
}
