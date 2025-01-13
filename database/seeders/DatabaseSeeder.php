<?php

namespace Database\Seeders;

use App\Models\Toll;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\VehicleType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Toll::create([
            "name" => "Pto. de las Pedrizas",
            "city" => "Málaga",
            "earned" => 0
        ]);

        Toll::create([
            "name" => "Estepona-Guadiaro",
            "city" => "Málaga",
            "earned" => 0
        ]);

        VehicleType::create([
            "type" => "car",
            "price" => 100
        ]);

        VehicleType::create([
            "type" => "motorbike",
            "price" => 50
        ]);

        VehicleType::create([
            "type" => "2 axle truck",
            "price" => 100
        ]);

        VehicleType::create([
            "type" => "3 axle truck",
            "price" => 150
        ]);

        VehicleType::create([
            "type" => "4 axle truck",
            "price" => 200
        ]);

        VehicleType::create([
            "type" => "5 axle truck",
            "price" => 250
        ]);

        $car = Vehicle::create([
            "vehicle_type_id" => 1,
            "registration" => "7996HID",
            "spent" => 0
        ]);

        $bike = Vehicle::create([
            "vehicle_type_id" => 2,
            "registration" => "6483UGG",
            "spent" => 0
        ]);

        $truck1 = Vehicle::create([
            "vehicle_type_id" => 3,
            "registration" => "8882KOS",
            "spent" => 0
        ]);

        $truck2 = Vehicle::create([
            "vehicle_type_id" => 4,
            "registration" => "6372MND",
            "spent" => 0
        ]);

        $truck3 = Vehicle::create([
            "vehicle_type_id" => 5,
            "registration" => "1998PGS",
            "spent" => 0
        ]);

        $truck4 = Vehicle::create([
            "vehicle_type_id" => 6,
            "registration" => "1083HJA",
            "spent" => 0
        ]);
    }
}
