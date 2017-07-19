<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('home');
Route::get('/foo', function () {
    return 'Hello World';
});*/
//Route::get('/show', 'HomeController@show');

//Index Page
Route::get('/', function () {
    return view('index');
});

//Login Page
Route::get('login', function () {
    return view('login');
});
//Route::get('/home', 'FrontEndController@index')->name('home');
Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\AuthController@login']);
Route::post('register', [ 'as' => 'register', 'uses' => 'Auth\AuthController@register']);

Route::post('checkEmail', [ 'as' => 'checkEmail', 'uses' => 'FrontEndController@checkEmail']);

//Registration Completed Page
Route::get('register_complete', function () {
    return view('registration_complete');
});

//Account Activation Page
Route::get('account_activation', function () {
    return view('account_activation');
});

Route::post('logout', [ 'as' => 'logout', 'uses' => 'Auth\AuthController@logout']);

//Testing Email
Route::get('testmail', 'EmailController@testmail');
Route::post('testmail', 'EmailController@send');

//Patient Page
Route::get('patient', function () {
	session()->flash('user_role',3);
    return view('patient');
});

//Doctor Page
Route::get('doctor', function () {
	session()->flash('user_role',2);
    return view('doctor');
});

Route::group(['middleware' => 'auth'], function() {
	Route::group(['prefix' => 'doctor', 'middleware' => ['role:doctor']], function() {
		
		//Doctor Personal & Contact Details Page
		Route::get('profile', function () {
			return view('doctor/profile');
		});
		
		//Doctor Education & Specialization Page
		Route::get('specialization', function () {
			return view('doctor/education_specailization');
		});

		//Doctor Registration & Documents Page
		Route::get('documents', function () {
			return view('doctor/registration_documents');
		});

		//Doctor Services & Experience Page
		Route::get('services', function () {
			return view('doctor/services_experience');
		});

		//Doctor Award & Memberships Page
		Route::get('awards', function () {
			return view('doctor/awards_membership');
		});
		
	});
});

Route::group(['middleware' => 'auth'], function() {
	Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
		Route::resource('roles','RoleController');
		Route::resource('users','UserController');
		Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
		Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
		Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
		Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
		Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
		Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
		Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);
	});	
});

Route::group(['middleware' => 'auth'], function() {
	Route::group(['prefix' => 'patient', 'middleware' => ['role:patient']], function() {
		
		//Patient Dashboard Page
		Route::get('dashboard', function () {
			return view('patient/dashboard');
		});


		//Patient Profile Page
		Route::get('profile', function () {
			return view('patient/profile');
		});

		//Patient Appointment Page
		Route::get('book_appointment', function () {
			return view('patient/appointment');
		});

		//Patient Medical Records Page
		Route::get('medical_records', function () {
			return view('patient/medical_records');
		});

		//Feedback Page
		Route::get('feedback', function () {
			return view('patient/feedback');
		});

		//Payments Page
		Route::get('payments', function () {
			return view('patient/payments');
		});
		
	});
});







Route::get('user/activation/{token}', 'Auth\AuthController@userActivation');




//Route::resource('doctor', 'DoctorController');
//Route::resource('patient', 'PatientController');
Route::resource('patientprescription','PatientprescriptionController');
Route::resource('patientbloodtest','PatientbloodtestController');
Route::resource('patientdoctorconversation','PatientdoctorconversationController');
Route::resource('patientmedicalrecord','PatientmedicalrecordController');
Route::resource('doctortimeslot','DoctortimeslotController');

