<?php

namespace App\Http\Controllers\Auth;

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

class AuthController extends Controller
{   

    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        //$this->middleware('guest')->except('logout');
		//$this->users = $users;
    	//parent::__construct();
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
		Log::info('Server Side Validation In Progress..');
        $result =  Validator::make($data, [
            'name' => 'required|max:255',
			'gender' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
			'country_code' => 'required',
			'mobile_number' => 'required|unique:users',
			'nationality' => 'required',
			'language' => 'required',
			'qualification' => 'required',
			'speciality' => 'required',
			'experience' => 'required',
			'mrc_no' => 'required|unique:users',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
		Log::info('Getting User Table Inputs..');
		//Insert into users table
        return User::create([
            'name' => $data['name'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
			'country_code' => $data['country_code'],
            'mobile_number' => $data['mobile_number'],
			'nationality' => $data['nationality'],
            'language' => $data['language'],
			'qualification' => $data['qualification'],
            'speciality' => $data['speciality'],
			'experience' => $data['experience'],
            'mrc_no' => $data['mrc_no'],
			'is_activated' => 1,
        ]);
    }


    /** 
     * Get Login
	 * Login Method
	 * @param  none
     * @return User
	 */

    public function getLogin(){
    	if(auth()->user()){
    		$getName = auth()->user()->name;
    		if(auth()->user()->hasRole('admin')){
				Log::info('Logged User is Admin - '.$getName);
				return Redirect::to('admin/users');
			}elseif(auth()->user()->hasRole('doctor')){
				Log::info('Logged User is Doctor - '.$getName);
				return Redirect::to('doctor/dashboard');
			}else{
				Log::info('Logged User is Patient - '.$getName);
				return Redirect::to('patient/dashboard');
			}
    	}else{
    		return view('login');
    	}
    }



    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function login(Request $request)
    {
		Log::info('AJAX Call - Login Process..');
		if($request->ajax()) {			
			//Get Form Values
			$email = $request->input('email');
			$password = $request->input('password');
			$remember = $request->get('remember');
			Log::info('Email is '.$email);
			
			//AJAX Implementation
			$validator = Validator::make($request->all(), [
				'email' => 'required|email|max:255',
				'password' => 'required'
			]);

			if ($validator->fails()) {
				// get the error messages from the validator
				Log::info('AJAX Call - Server Side Validation Failed..');
				return 2;
			}
			
			if(auth()->attempt(array('email' => $request->input('email'), 'password' => $request->input('password')), $remember)){	
				$getName = auth()->user()->name;
				if(auth()->user()->is_activated == '0'){
					Log::info('User Logged - Email not yet verified..');
					return -1;
				}else{
					if(auth()->user()->hasRole('admin')){
						Log::info('Logged User is Admin - '.$getName);
						return 'A';
					}elseif(auth()->user()->hasRole('doctor')){
						Log::info('Logged User is Doctor - '.$getName);
						return 'D';
					}else{
						Log::info('Logged User is Patient - '.$getName);
						return 'P';
					}
				}            
			}else{
				Log::info('User Details Not Found');
				return 0;
			}
			
		}else{			
			return Redirect::to('/');
		}
    }

    /**
     * Register new user
     *
     * @param  array  $data
     * @return User
     */
    public function register(Request $request)
    {
		Log::info('AJAX Call - Registration Process..');
		if($request->ajax()) {
			$input = $request->all();	
			//AJAX Implementation
			Log::info('AJAX Call - Registration Validation..');
			$messages = [	
				'name.required' => 'Please enter Name',
				'email.required'=>'Please enter email',
				'email.email' => 'Please enter Valid Email',
				'email.unique'=>'Email already exist',
				'password.required'=>'Please enter Password',
				'country_code.required' => 'Please enter Country Code',
				'mobile_number.required'=>'Please enter Mobile Number',
				'nationality.required_if' => 'Please select nationality',
				'language.required_if'=>'Please select language',
				'qualification.required_if' => 'Please select qualification',
				'speciality.required_if'=>'Please select speciality',
				'experience.required_if'=>'Please enter Experience',
				'mrc_no.required_if'=>'Please enter Medical Reference Number',
			];
			$validator = Validator::make($request->all(), [
				'name' => 'required',
				'gender' => 'required',
				'email' =>'required|email|max:255|unique:users',
				'password' => 'required',
				'country_code' => 'required',
				'mobile_number' => 'required|unique:users',
				'nationality' => 'required_if:user_role,2',
				'language' =>'required_if:user_role,2',
				'qualification' =>'required_if:user_role,2',
				'speciality' => 'required_if:user_role,2',
				'experience' => 'required_if:user_role,2',
				'mrc_no' => 'required_if:user_role,2',
			],$messages)->validate();

			/* if ($validator->fails()) {
				// get the error messages from the validator
				return 0;
			} */
			$user = $this->create($input)->toArray();
            $user['link'] = str_random(30);

			$ts_unique_id = ' Random No '.time();
			
			Log::info('Inserting values into User Activations Table..');
            DB::table('user_activations')->insert(['id_user'=>$user['id'],'token'=>$user['link']]);
			Log::info('Inserting values into Role User Table..');
            DB::table('role_user')->insert(['user_id'=>$user['id'],'role_id'=>$input['user_role']]);

			//Code to send E-mail
            /*Mail::send('emails.default', $user, function($message) use ($user) {
                $message->to($user['email']);
                $message->subject('Site - Activation Code');
            });
			
			if( count(Mail::failures()) > 0 ){
			   Log::info('There was one or more failures while sending email.');
			   foreach(Mail::failures as $email_address){
				   Log::info($ts_unique_id." - $email_address ");
			   }
			}else{
				Log::info($ts_unique_id." - Mail sent successfully.");
			} */
			Log::info('User Registered Successfully..');
            return 1;
		}else{	
			Log::info('Invalid Call.. Operation Aborted.');
			return 0;
		}        
    }

    /**
     * Check for user Activation Code
     *
     * @param  array  $data
     * @return User
     */
    public function userActivation($token)
    {
        Log::info('User Activation Process Started..');
		$check = DB::table('user_activations')->where('token',$token)->first();
		
        if(!is_null($check)){
			Log::info('User Activation Process Started..');
            $user = User::find($check->id_user);

            if($user->is_activated == 1){
                return redirect()->to('account_activation')
                    ->with('status',"AA");                
            }

            $user->update(['is_activated' => 1]);
			Log::info('User Activated Successfully');
            DB::table('user_activations')->where('token',$token)->delete();
			Log::info('Token Deleted from User Activations Table');
            return redirect()->to('account_activation')
                ->with('status',"AC");
        }else{
			Log::info('Token Not Found');
		}
		Log::info('Token Not Found');
        return redirect()->to('account_activation')
                ->with('status',"NA");
    }


    /**
     * Send Password Reset Link
     *
     * @param  string  $data
     * @return boolean
     */

    public function sendResetPasswordLink(Request $request)
    {
		Log::info('Send Reset Password Link - AJAX Call..');
		if($request->ajax()) {
			$email = $request->input('email');
			Log::info('Email is '.$email);
			$messages = [	
				'email.exists' => 'We dont have user associated with this Email',
				'email.required'=>'Please enter email',
				'email.email'=>'Please enter valid email'
			];
			$validator = Validator::make($request->all(), [
				'email' => 'required|email|exists:users',
			],$messages)->validate();
			try{
				Password::sendResetLink(['email' => $email]);
				return 1;
			}
			catch(\Exception $e){
				return 0;					
			}
		}else{
			return 0;
		}
	}

}
