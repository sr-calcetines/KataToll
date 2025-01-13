<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        "type_id",
        "license",
        "total_expense"
    ];

    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class);
    }

    public function tolls()
    {
        return $this->belongsToMany(Toll::class, "vehicle_toll");
    }
}
