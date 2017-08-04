<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveColumnTblDoctorDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::table('tblDoctor_Documents', function (Blueprint $table) {
            $table->dropColumn('documents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
		Schema::table('tblDoctor_Documents', function (Blueprint $table) {
            $table->dropColumn('documents');
        });
    }
}
