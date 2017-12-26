<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerSlotEndStatus extends Model
{
    protected $fillable = [
        'name',
        'alive'
    ];

    public function playerSlots() {
        return $this->hasMany(PlayerSlot::class, 'end_status_id', 'id');
    }
}
