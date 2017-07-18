<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewFieldsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Add New Fields to the users table
		Schema::table('users', function (Blueprint $table) {
            $table->enum('gender', ['M', 'F'])->after('name');
			$table->mediumInteger('country_code')->after('gender');
			$table->string('mobile_number')->after('country_code');
			$table->mediumInteger('nationality')->nullable()->after('mobile_number');
			$table->string('language',100)->nullable()->after('nationality');
			$table->string('qualification',100)->nullable()->after('password');
			$table->string('speciality',100)->nullable()->after('qualification');
			$table->mediumInteger('experience')->nullable()->after('speciality');
			$table->string('mrc_no')->nullable()->after('experience');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop the fields
		Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(array('gender','country_code','mobile_number','nationality','language','qualification','speciality','experience','mrc_no'));
        });
    }
}
