<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblDoctor_Services extends Model
{
    //
    protected  $table = "tblDoctor_Services";
	protected  $primaryKey = 'id';
	protected  $fillable = ['user_id','service','created_at','updated_at'];
	//public $timestamps = false;
}
