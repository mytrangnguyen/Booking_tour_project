<?php

use Illuminate\Database\Seeder;

class typeTourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_tours')->insert([
            ['name_type' => 'Tour ghep doan','details' => 'Ghep Doan'],
            ['name_type' => 'Tour ca nhan','details' => 'Ca nhan']
            
        ]);
    }
}
