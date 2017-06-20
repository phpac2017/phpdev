<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patientprescription extends Model
{
    protected  $table = "patient_prescription";
	protected  $primaryKey = 'id';
	protected  $fillable = ['pid','did','content','status','createdate','created_at','updated_at'];
}
