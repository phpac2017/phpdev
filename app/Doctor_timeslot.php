<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor_timeslot extends Model
{
     protected  $table = "doctor_timeslot";
	protected $primaryKey = 'id';
	protected  $fillable = ['did','availabletime','status','createdate','created_at','updated_at'];
}
