<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected  $table = "patients";
	protected $primaryKey = 'id';
	protected  $fillable = ['salutation','fname','lname','email','phone','gender','dob','martialstatus','address','city','state','zipcode','username','password','status','createdate','updated_at'];
}
