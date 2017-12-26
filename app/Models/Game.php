<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'community_id',
        'title',
        'game_thread_url',
        'game_type_id',
        'turbo_format',
        'total_post_count',
        'description',
        'day_length_in_minutes',
        'night_length_in_minutes',
        'start_date',
        'end_date'
    ];

    public function community() {
        return $this->belongsTo(Community::class, 'community_id','id');
    }

    public function gameType() {
        return $this->belongsTo(GameType::class, 'game_type_id', 'id');
    }

    public function gameModifications() {
        return $this->hasMany(GameModification::class, 'game_id', 'id');
    }

    public function gameSubmitters() {
        return $this->hasMany(GameSubmitter::class, 'game_id', 'id');
    }

    public function gameUpdaters() {
        return $this->hasMany(GameUpdater::class, 'game_id', 'id');
    }

    public function hosts() {
        return $this->hasMany(Host::class, 'game_id', 'id');
    }

    public function actions() {
        return $this->hasMany(Action::class, 'game_id', 'id');
    }

    public function playerSlots() {
        return $this->hasMany(PlayerSlot::class, 'game_id', 'id');
    }

    public function teams()
    {
        return $this->hasMany(Team::class, 'game_id', 'id');
    }
}
