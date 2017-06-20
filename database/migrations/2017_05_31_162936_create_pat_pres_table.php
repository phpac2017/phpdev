<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatPresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_prescription', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('pid')->unsigned();
			$table->foreign('pid')->references('id')->on('patients');
			$table->integer('did')->unsigned();
			$table->foreign('did')->references('id')->on('doctors');
			$table->string('content');
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
        Schema::dropIfExists('patient_prescription');
    }
}
