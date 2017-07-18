<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Log;
use Illuminate\Support\Facades\Input;
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
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
		//echo "<pre>";print_r($data);//exit;
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
		//$result = Validator::make($input, $rules)->passes(); // true
		/* if($result->fails()){
			echo 'failed';
		}else{
			echo 'passed';
		}
		exit; */
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
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
			'is_activated' => 0,
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function login(Request $request)
    {
		if($request->ajax()) {
			//Get Form Values
			$email = $request->input('email');
			$password = $request->input('password');
			Log::info('Email is '.$email);
			
			//AJAX Implementation
			$validator = Validator::make($request->all(), [
				'email' => 'required|email|max:255',
				'password' => 'required'
			]);

			if ($validator->fails()) {
				// get the error messages from the validator
				return 2;
			}
			
			if(auth()->attempt(array('email' => $request->input('email'), 'password' => $request->input('password'))))	{	
				if(auth()->user()->is_activated == '0'){
					return -1;
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

    /**
     * Register new user
     *
     * @param  array  $data
     * @return User
     */
    public function register(Request $request)
    {
		if($request->ajax()) {
			$input = $request->all();	
			//AJAX Implementation
			$validator = Validator::make($request->all(), [
				'name' => 'required',
				'gender' => 'required',
				'email' => 'required|email|max:255',
				'password' => 'required',
				'country_code' => 'required',
				'mobile_number' => 'required',
				'nationality' => 'required',
				'language' => 'required',
				'qualification' => 'required',
				'speciality' => 'required',
				'experience' => 'required',
				'mrc_no' => 'required',
			]);

			/* if ($validator->fails()) {
				// get the error messages from the validator
				return 0;
			} */
			$user = $this->create($input)->toArray();
            $user['link'] = str_random(30);

            DB::table('user_activations')->insert(['id_user'=>$user['id'],'token'=>$user['link']]);
            DB::table('role_user')->insert(['user_id'=>$user['id'],'role_id'=>$input['user_role']]);

            Mail::send('emails.default', $user, function($message) use ($user) {
                $message->to($user['email']);
                $message->subject('Site - Activation Code');
            });

            return 1;
		}else{			
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
        $check = DB::table('user_activations')->where('token',$token)->first();

        if(!is_null($check)){
            $user = User::find($check->id_user);

            if($user->is_activated == 1){
                return redirect()->to('account_activation')
                    ->with('status',"AA");                
            }

            $user->update(['is_activated' => 1]);
            DB::table('user_activations')->where('token',$token)->delete();

            return redirect()->to('account_activation')
                ->with('status',"AC");
        }

        return redirect()->to('account_activation')
                ->with('status',"NA");
    }

}
