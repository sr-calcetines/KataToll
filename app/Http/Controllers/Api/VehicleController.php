<?php

namespace App\Http\Controllers\Api;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehicleController extends Controller
{
    public function goThroughToll(string $id, string $toll_id)
    {
       $vehicle = Vehicle::find($id);
       $vehicle->tolls()->attach([(int)$toll_id]);
       $toll = $vehicle->tolls()->find($toll_id);

       $vehicle->update(["total_expense" => $vehicle->total_expense + $vehicle->vehicle_types->price]);
       $toll->update(["earnings" => $toll->earnings + $vehicle->vehicle_types->price]);

       return response()->json([
        "Toll name: " => $toll->name, 
        "Toll earned: " => $toll->earnings,
        "Vehicle license plate: " => $vehicle->license,
        "Total expensed: " => $vehicle->total_expense
       ], 200);
    }

    public function store(Request $request)
    {
        $vehicle = Vehicle::create([
            "type_id" => $request->vehicle_type_id,
            "license" => $request->license,
            "total_expense" => 0
        ]);
        
        return response()->json($vehicle, 200);
    }
}
