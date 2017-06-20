<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient_medical_record extends Model
{
   protected  $table = "patient_medical_record";
	protected $primaryKey = 'id';
	protected  $fillable = ['pid','medical_type','medical_record','status','createdate','created_at','updated_at'];
}
