<?php

use Illuminate\Database\Seeder;

class PatientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
	  
     */
    public function run()
    {
	
		 	
        //
		 foreach (range(1, 50) as $index) {
         	DB::table('patients')->insert([
			'salutation' => "Mr.",
		    'fname' => "Dhinesh".$index, 
           'lname' =>"Kumar".$index,	
           'email' => "Dhinesh".$index.'@gmail.com',
		   'phone' => 1234567890,
		    'gender' => "Male",
           'dob' =>date('Y-m-d'),
		   'martialstatus' => "single",
		    'address' => "12 Big streeet",
		  	'city' => "Kumbakonam",
		   'state' => "Tamilnadu",
		   'zipcode' => "612001",
		   'username' =>"Dhinesh".$index,
		   'password' => "Dhinesh".$index,
		    'status' => "Available",
		   'createdate' =>date('Y-m-d')
           ]); 
       }


    }
}
