<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblDoctor_Awards extends Model
{
    //
    protected  $table = "tblDoctor_Awards";
	protected  $primaryKey = 'id';
	protected  $fillable = ['user_id','award_name','year','created_at','updated_at'];
	//public $timestamps = false;
}
