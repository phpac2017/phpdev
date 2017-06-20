<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
		    $table->enum('salutation',['Mr.', 'Ms.','Master','Mrs.','Baby','Proff.','Er.','Dr.']);
            $table->string('fname',64);
			$table->string('lname',64);
			$table->string('email',191)->unique();
			$table->string('phone',32);
			$table->enum('gender', ['Male', 'Female']);		
			$table->date('dob');
			$table->enum('martialstatus', ['Yes', 'No','Single','Divorced','widowed']);
			$table->string('address',64);			
			$table->string('city',64);	
			$table->string('state',64);	
			$table->string('zipcode',64);
			$table->string('username',64);
            $table->string('password',32);
			$table->enum('status', ['Available', 'Unavailable']);
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
        Schema::dropIfExists('patients');
    }
}
