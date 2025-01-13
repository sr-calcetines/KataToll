<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Toll extends Model
{
    protected $fillable = [
        "name",
        "city",
        "earnings"
    ];

    public function vehicles()
    {
        return $this->belongsToMany(Vehicle::class, "vehicle_toll");
    }
}
