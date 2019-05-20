<?php

use Illuminate\Database\Seeder;

class employeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
           ['name_emp' => 'Huynh Thanh Duy','phone_number' => '0856 213 456','email' => 'duy.huynh@gmail.com','address' => 'Da Nang'],

           ['name_emp' => 'Ngo Thanh Thuy','phone_number' => '083 231 832','email' => 'thuy.ngo@gmail.com','address' => 'Quang Nam'],

           ['name_emp' => 'Mai Thanh Giang','phone_number' => '083 346 121','email' => 'giang.mai@gmail.com','address' => 'Ninh Thuan'],

           ['name_emp' => 'Hoang Thuy Duong','phone_number' => '085 573 323','email' => 'duong.hoang@gmail.com','address' => 'Quang Binh'],

           ['name_emp' => 'Nguyen Thanh Phuong','phone_number' => '094 452 234','email' => 'phuong.nguyen@gamil.com','address' => 'phuong.nguyen'],

           ['name_emp' => 'Ho My Linh','phone_number' => '085 434 232','email' => 'linh.ho','address' => 'Da Nang'],

           ['name_emp' => 'Dang Phuong Ngan','phone_number' => '095 121 341','email' => 'ngan.dang@gmail.com','address' => 'Quang Nam'],
           
       ]);
    }
}
