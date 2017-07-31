<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientProfile extends Model
{    
	protected $primaryKey = 'id';
	protected $fillable = ['profile_image','full_name','country','age','state','gender','city','dob','address','blood_group','zip_code','lang','mobile','document','alternate_no'
            ,'email_id','user_id'];
}
