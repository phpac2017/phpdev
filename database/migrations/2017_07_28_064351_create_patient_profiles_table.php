<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string("profile_image",255)->nullable();
            $table->string("full_name",255)->nullable();
            $table->string("country",255)->nullable();
            $table->integer('age')->unsigned()->default(0);
            $table->string("state",255)->nullable();
            $table->string("gender",10)->nullable();
            $table->string("city",255)->nullable();
            $table->date('dob')->nullable();
            $table->text('address')->nullable();
            $table->string("blood_group",10)->nullable();
            $table->integer('zip_code')->unsigned()->default(0);
            $table->string("lang",25)->nullable();
            $table->string('mobile',50)->nullable();
            $table->string("document",255)->nullable();
            $table->string('alternate_no',50)->nullable();
            $table->string("email_id",255)->nullable();
            $table->integer('user_id')->unsigned()->default(0);
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
        Schema::dropIfExists('patient_profiles');
    }
}
