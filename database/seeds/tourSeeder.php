<?php

use Illuminate\Database\Seeder;

class tourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('tours')->insert([
            ['price_tour' => '1200000','price_promotion' => '5','start_place' => '29/5/2019','end_date' => '3/6/2019','negotiated_price' => '0','start_place' => 'Da Nang','id_vehicles'=>'2','quantity_people'=>'30'],
            
            
        ]);
    }
}
