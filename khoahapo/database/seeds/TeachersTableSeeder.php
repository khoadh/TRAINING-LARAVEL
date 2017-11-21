<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([

            ['name'=>'khoadh','email'=>'khoadh@haposoft.com','password'=>bcrypt(12345),'phone'=>'0974336715','address'=>'hàn nội','level'=>'2'],

        ]);
    }
}


