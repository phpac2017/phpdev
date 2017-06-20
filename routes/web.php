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



Route::resource('doctor', 'DoctorController');
Route::resource('patient', 'PatientController');
Route::resource('patientprescription','PatientprescriptionController');
Route::resource('patientbloodtest','PatientbloodtestController');
Route::resource('patientdoctorconversation','PatientdoctorconversationController');
Route::resource('patientmedicalrecord','PatientmedicalrecordController');
Route::resource('doctortimeslot','DoctortimeslotController');

