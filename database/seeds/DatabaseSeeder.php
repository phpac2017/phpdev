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
        // $this->call(UsersTableSeeder::class);
		$this->call(CitiesTableSeeder::class);
		$this->call(CountriesTableSeeder::class);
		$this->call(LanguagesTableSeeder::class);
		$this->call(NationalitySeeder::class);
		$this->call(RolesAndPermissionsSeeder::class);
		$this->call(StatesTableSeeder::class);
    }
}
