<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    protected $fillable = [
        'name',
        'game_id',
        'host_type_id',
    ];

    public function game() {
        return $this->belongsTo(Game::class, 'game_id', 'id');
    }

    public function hostType() {
        return $this->belongsTo(HostType::class, 'host_type_id', 'id');
    }
}
