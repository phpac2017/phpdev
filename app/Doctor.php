<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
	protected  $table = "Doctors";
	protected $primaryKey = 'id';
	protected  $fillable = ['fname','lname','phone','email','qualification','specialist','dob','gender','address','city','state','zipcode','username','password','status','photo','createdate','created_at','updated_at'];

	
}
