<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameModificationType extends Model
{
    protected $fillable = [
        'name'
    ];

    public function gameModifications() {
        return $this->hasMany(GameModification::class, 'game_modification_id', 'id');
    }
}
