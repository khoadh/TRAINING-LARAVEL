<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('students')->insert([
            'name'=>'Khoa',
            'email'=>'hungkhoa@gmail',
            'phone'=>'093234994',
            'address'=>'Ha nôi',
            'password'=>bcrypt('123456')
        	]);
    }
}
