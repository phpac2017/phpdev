<?php

use Illuminate\Database\Seeder;

class Patient_PresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 50) as $index) {
         	DB::table('pat_pres')->insert([
		   'pid' =>"1",
           'ddob' =>date('Y-m-d'),
		   'dqualification' => "single",
		   'dgender' => "Male",
		   'dspecialist' => "Mr.",
		   'dusername' => str_random(10),
		   'dpassword' => str_random(10),
		   'dphoto' => str_random(10),
		   'dcreatedate' =>date('Y-m-d'),
		   'dstatus' => "Available",
		   'dcity' => str_random(10),
		   'dstate' => str_random(10),
		   'daddress' => str_random(10),
		   'dzipcode' => str_random(10),
		   'dphone' => str_random(10) 
		
       
           ]); 
    }
}
