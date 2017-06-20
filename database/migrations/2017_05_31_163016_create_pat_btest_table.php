<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatBtestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_blood_test', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('pid')->unsigned();
			$table->foreign('pid')->references('id')->on('patients');
			$table->integer('did')->unsigned();
			$table->foreign('did')->references('id')->on('doctors');
			$table->string('blood_test_type');
			$table->string('blood_test_name');
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
        Schema::dropIfExists('pat_btest');
    }
}
