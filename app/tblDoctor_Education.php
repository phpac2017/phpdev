<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblDoctor_Education extends Model
{
    //
    protected  $table = "tblDoctor_Education";
	protected  $primaryKey = 'id';
	protected  $fillable = ['user_id','degree','college_name','year_completed','created_at','updated_at'];
	//public $timestamps = false;
}
