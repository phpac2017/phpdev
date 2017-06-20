<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatDocConvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_doctor_conversation', function (Blueprint $table) {
           $table->increments('id');
			$table->integer('pid')->unsigned();
			$table->foreign('pid')->references('id')->on('patients');
			$table->integer('did')->unsigned();
			$table->foreign('did')->references('id')->on('doctors');
			$table->timestamp('visittime');
			$table->decimal('amount',5,2);
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
        Schema::dropIfExists('pat_doc_conv');
    }
}
