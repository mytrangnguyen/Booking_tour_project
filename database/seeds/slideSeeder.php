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
            ['image' => 'sl1.jpg','description' => 'Hay den voi chung toi de co nhung trai nghiem tuyet voi nhat'],
            ['image' => 'sl2.jpg','description' => 'Hay den voi chung toi de co nhung trai nghiem tuyet voi nhatHay den voi chung toi de co nhung trai nghiem tuyet voi nhat'],
            ['image' => 'sl3.jpg','description' => 'Hay den voi chung toi de co nhung trai nghiem tuyet voi nhat']
            
        ]);
    }
}
