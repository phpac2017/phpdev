<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocTimeslotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_timeslot', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('did')->unsigned();
			$table->foreign('did')->references('id')->on('doctors');
			$table->timestamp('availabletime');			
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
        Schema::dropIfExists('doc_timeslot');
    }
}
