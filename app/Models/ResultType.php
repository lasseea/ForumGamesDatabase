<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResultType extends Model
{
    protected $fillable = [
        'name'
    ];

    public function teams() {
        return $this->hasMany(Team::class, 'result_type_id', 'id');
    }
}
