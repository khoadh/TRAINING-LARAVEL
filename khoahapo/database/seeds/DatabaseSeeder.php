<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(AdminTableSeeder::class);
    }

}
class AdminTableSeeder extends Seeder
{
	public function run ()
	{
		DB::table('admin')->insert([

			['username'=>'khoadh','email'=>'khoadh@haposoft.com','password'=>bcrypt(12345),'lever'=>1],
			['username'=>'khoa','email'=>'khoa@haposoft.com','password'=>bcrypt(12345),'lever'=>1],
			]);
			
	}
}