<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient_blood_test extends Model
{
   protected  $table = "patient_blood_test";
	protected $primaryKey = 'id';
	protected  $fillable = ['pid','did','blood_test_type','blood_test_name','status','createdate','created_at','updated_at'];
}
