<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblDoctor_Experience extends Model
{
    //
    protected  $table = "tblDoctor_Experience";
	protected  $primaryKey = 'id';
	protected  $fillable = ['user_id','duration','role','city','clinic_name','created_at','updated_at'];
	//public $timestamps = false;
}
