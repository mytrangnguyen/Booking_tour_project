<?php

use Illuminate\Database\Seeder;

class journeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('type_tours')->insert([
            ['days' => 'Tour ghep doan','id_place' => 'Ghep Doan','id_tour' => 'Ghep Doan'],
            ['days' => 'Tour ghep doan','id_place' => 'Ghep Doan','id_tour' => 'Ghep Doan'],
            ['days' => 'Tour ghep doan','id_place' => 'Ghep Doan','id_tour' => 'Ghep Doan'],
            ['days' => 'Tour ghep doan','id_place' => 'Ghep Doan','id_tour' => 'Ghep Doan'],
            ['days' => 'Tour ghep doan','id_place' => 'Ghep Doan','id_tour' => 'Ghep Doan'],
            ['days' => 'Tour ghep doan','id_place' => 'Ghep Doan','id_tour' => 'Ghep Doan'],
            
        ]);
    }
}
