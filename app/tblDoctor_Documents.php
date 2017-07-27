<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblDoctor_Documents extends Model
{
    //
    protected  $table = "tblDoctor_Documents";
	protected  $primaryKey = 'id';
	protected  $fillable = ['user_id','council_reg_no','council_name','year','documents','created_at','updated_at'];
	//public $timestamps = false;
}
