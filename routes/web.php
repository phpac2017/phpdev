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


Route::get('login', [ 'as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
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

// Routes for forgot and reset password 
Route::post('forgot-password', array('as'=>'forgot-password','uses'=>'Auth\AuthController@sendResetPasswordLink'));
Route::group(['prefix' => 'password'], function ()
{
	$this->get('reset/{token}', 'ResetPasswordController@showResetForm');
	$this->post('reset', 'ResetPasswordController@reset')->name('password.reset');
});

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
		Route::get('profile', [ 'as' => 'profile', 'uses' => 'DoctorController@getProfile']);
		Route::post('profile', [ 'as' => 'profile', 'uses' => 'DoctorController@updateProfile']);
		
		//Doctor Education & Specialization Page
		Route::get('specialization', [ 'as' => 'specialization', 'uses' => 'DoctorController@getEducation']);
		Route::post('specialization', [ 'as' => 'specialization', 'uses' => 'DoctorController@updateEducation']);

		//AJAX Call
		Route::post('updateQualification', [ 'as' => 'updateQualification', 'uses' => 'DoctorController@updateQualification']);
		Route::post('updateSpecialization', [ 'as' => 'updateSpecialization', 'uses' => 'DoctorController@updateSpecialization']);

		//Doctor Registration & Documents Page
		Route::get('documents', [ 'as' => 'documents', 'uses' => 'DoctorController@getDocuments']);
		Route::post('documents', [ 'as' => 'documents', 'uses' => 'DoctorController@updateDocuments']);

		//AJAX Call
		Route::post('updateDocument', [ 'as' => 'updateDocument', 'uses' => 'DoctorController@updateDocument']);

		//Doctor Services & Experience Page
		Route::get('services', [ 'as' => 'services', 'uses' => 'DoctorController@getServices']);
		Route::post('services', [ 'as' => 'services', 'uses' => 'DoctorController@updateServices']);

		//AJAX Call
		Route::post('updateService', [ 'as' => 'updateService', 'uses' => 'DoctorController@updateService']);
		Route::post('updateExperience', [ 'as' => 'updateExperience', 'uses' => 'DoctorController@updateExperience']);

		//Doctor Award & Memberships Page
		Route::get('awards', [ 'as' => 'awards', 'uses' => 'DoctorController@getAwards']);
		Route::post('awards', [ 'as' => 'awards', 'uses' => 'DoctorController@updateAwards']);

		//AJAX Call
		Route::post('updateAward', [ 'as' => 'updateAward', 'uses' => 'DoctorController@updateAward']);
		Route::post('updateMembership', [ 'as' => 'updateMembership', 'uses' => 'DoctorController@updateMembership']);
		
	});
});

Route::group(['middleware' => 'auth'], function() {
	Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
		Route::resource('roles','RoleController');
		Route::resource('users','UserController');
		Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index']);
		Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:can_add_users']]);
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

