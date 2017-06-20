<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatMrecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_medical_record', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('pid')->unsigned();
			$table->foreign('pid')->references('id')->on('patients');
			$table->string('medical_type',64);
			$table->string('medical_record',64);
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
        Schema::dropIfExists('pat_mrecord');
    }
}
