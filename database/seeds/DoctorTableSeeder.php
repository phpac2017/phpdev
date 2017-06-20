<?php

use Illuminate\Database\Seeder;

class DoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 15) as $index) {
         	DB::table('doctors')->insert([
		   'fname' => "Dhinesh".$index, 
           'lname' => "Kumar".$index,	 
           'email' => "dhinesh".$index.'@gmail.com',
           'dob' =>date('Y-m-d'),
		   'qualification' => "single",
		   'gender' => "Male",
		   'specialist' => "Mr.",
		   'username' => "Dhinesh".$index,
		   'password' => $index,
		   'photo' => str_random(10),
		   'createdate' =>date('Y-m-d'),
		   'status' => "Available",
		   'city' => "Kumbakonam",
		   'state' => "Tamilnadu",
		   'address' => "12 Big streeet",
		   'zipcode' => "612001",
		   'phone' => 1234567890 
		
       
           ]); 
    }
	}
}
