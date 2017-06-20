<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
	     foreach (range(1,15) as $index) {
           	DB::table('users')->insert([
           'name' => "dhinesh",
           'email' => "Dhineshkar".$index.'@gmail.com',
		   'password' => '123456',
		   'remember_token' => str_random(10),
           
       
           ]);
       }
    }
}
