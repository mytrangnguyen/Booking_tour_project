<?php

use Illuminate\Database\Seeder;


class slideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slides')->insert([
            ['images' => 'sl1.jpg','details' => 'Hay den voi chung toi de co nhung trai nghiem tuyet voi nhat'],
            ['images' => 'sl2.jpg','details' => 'Hay den voi chung toi de co nhung trai nghiem tuyet voi nhatHay den voi chung toi de co nhung trai nghiem tuyet voi nhat'],
            ['images' => 'sl3.jpg','details' => 'Hay den voi chung toi de co nhung trai nghiem tuyet voi nhat']
            
        ]);
    }
}
