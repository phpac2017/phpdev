<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Patient_blood_test;
class PatientbloodtestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pat_blood_test = Patient_blood_test::paginate(5);
        return response(array(
                'error' => true,
                'doctors' =>$pat_blood_test->toArray(),
               ),200);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $pat_blood_test = Patient_blood_test::create($request->all());
        return response(array(
                'error' => false,
                'message' =>'Patient Blood test  Added Successfully',
               ),200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient_blood_test  $patient_blood_test
     * @return \Illuminate\Http\Response
     */
    public function show($patient_blood_test)
    {
      $pat_blood_test = Patient_blood_test::find($patient_blood_test);
		
   		//$doctors = Doctor::paginate(5);
        return response(array(
                'error show' => true,
                'doctor' =>$pat_blood_test,
               ),200); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient_blood_test  $patient_blood_test
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient_blood_test $patient_blood_test)
    {
        Patient_blood_test::find($patient_blood_test)->update($request->all());
        return response(array(
                'error' => false,
                'message' =>'Pateint blood test updated successfully',
               ),200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient_blood_test  $patient_blood_test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$patient_blood_test)
    {
         Patient_blood_test::find($patient_blood_test)->update($request->all());
        return response(array(
                'error' => false,
                'message' =>'Pateint blood test updated successfully',
               ),200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient_blood_test  $patient_blood_test
     * @return \Illuminate\Http\Response
     */
    public function destroy($patient_blood_test)
    {
        Patient_blood_test::find($patient_blood_test)->delete();
        return response(array(
                'error' => false,
                'message' =>'Pateint blood test Record deleted successfully',
               ),200);
    }
}
