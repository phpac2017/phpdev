<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient_doctor_conversation extends Model
{
   protected  $table = "patient_doctor_conversation";
	protected $primaryKey = 'id';
	protected  $fillable = ['pid','did','visittime','amount','status','createdate','created_at','updated_at'];
}
