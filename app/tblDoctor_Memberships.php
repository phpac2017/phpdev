<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblDoctor_Memberships extends Model
{
    //
    protected  $table = "tblDoctor_Memberships";
	protected  $primaryKey = 'id';
	protected  $fillable = ['user_id','membership','created_at','updated_at'];
	//public $timestamps = false;
}
