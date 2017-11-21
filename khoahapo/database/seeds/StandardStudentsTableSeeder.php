<?php

use Illuminate\Database\Seeder;

class StandardStudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('standard_students')->insert([
            'subjects_id'=>'1',
            'teacher_id'=>'2',
            'score'=>'7',
        ]);
    }
}
