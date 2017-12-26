<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HostType extends Model
{
    protected $fillable = [
        'name'
    ];

    public function hosts() {
        return $this->hasMany(Host::class, 'host_type_id', 'id');
    }
}
