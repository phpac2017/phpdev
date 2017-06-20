<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
           $table->increments('id');
            $table->string('fname',64);
			$table->string('lname',64);
			$table->string('phone',32);
			$table->string('email',191)->unique();
			$table->string('qualification',64);
			$table->string('specialist',64);
			$table->date('dob');
			$table->enum('gender', ['Male', 'Female']);
			$table->string('address',64);			
			$table->string('city',64);	
			$table->string('state',64);	
			$table->string('zipcode',64);
			$table->string('username',64);
            $table->string('password',32);
			$table->enum('status', ['Available', 'Unavailable']);		
			$table->binary('photo');
			$table->date('createdate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
