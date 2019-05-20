<?php

use Illuminate\Database\Seeder;

class vehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
			['name_vehicles' => 'Hang khong','details' => 'Hang khong Vietnam Airline'],
			['name_vehicles' => 'Hang khong','details' => 'Hang khong VietJet Air'],
			['name_vehicles' => 'Hang khong','details' => 'Hang khong Jetstar Pacific Airlines'],
			['name_vehicles' => 'Xe','details' => 'Di ve bang xe'],
			['name_vehicles' => 'Tau','details' => 'Di ve bang tau'],
		]);
    }
}
