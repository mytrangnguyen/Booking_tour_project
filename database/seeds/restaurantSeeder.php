<?php

use Illuminate\Database\Seeder;

class restaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_tours')->insert([
            ['name_restaurant' => 'Arapang Buffet','details' => 'Perfect','city'=>'Da Nang'],
            ['name_restaurant' => ' Little Tokyo','details' => 'Perfect','city'=>'Da Nang'],
            ['name_restaurant' => 'India Ganesh','details' => 'Perfect','city'=>'Da Lat'],
            ['name_restaurant' => 'Marinelli Bistronomia
','details' => 'Perfect','city'=>'Nha Trang'],
            ['name_restaurant' => '1958 restaurant','details' => 'Perfect','city'=>'Da Nang'],
        ]);
    }
}
