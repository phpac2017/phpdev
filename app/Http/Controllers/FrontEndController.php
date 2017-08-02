<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Log;
use Illuminate\Support\Facades\Input;
use Entrust;
use Redirect;
use DB;
use Mail;

class FrontEndController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function checkEmail(Request $request)
    {
		if($request->ajax()) {
			//Get Form Values
			$email = $request->input('email');
			Log::info('Email is '.$email);
			
			$getExistingEmail = \App\User::select('email')->where('email',$email)->get()->toArray();
			if($getExistingEmail != array()){
				if($getExistingEmail[0]['email']==''){
					return 0;
				}else{
					return 1;
				}
			}else{
                return 0;
            }
		}else{			
			return Redirect::to('/');
		}
    }
}
