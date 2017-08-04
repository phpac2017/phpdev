<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblDoctor_Files extends Model
{
    //
	protected  $table = "tblDoctor_Files";
	protected  $primaryKey = 'id';
	protected  $fillable = ['user_id','documents','created_at','updated_at'];
	//public $timestamps = false;
}
