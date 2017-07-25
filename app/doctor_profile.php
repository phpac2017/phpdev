<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor_profile extends Model
{
    //
    protected  $table = "doctor_profile";
	protected  $primaryKey = 'id';
	protected  $fillable = ['user_id','profile_pic','title','city','experience','description'];
}
