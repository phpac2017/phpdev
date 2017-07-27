<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblDoctor_Speciality extends Model
{
    //
    protected  $table = "tblDoctor_Speciality";
	protected  $primaryKey = 'id';
	protected  $fillable = ['user_id','speciality','created_at','updated_at'];
	//public $timestamps = false;
}
