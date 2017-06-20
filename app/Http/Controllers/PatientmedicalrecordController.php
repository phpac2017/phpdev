<?php

namespace App\Http\Controllers;

use App\Patient_medical_record;
use Illuminate\Http\Request;

class PatientmedicalrecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $pat_medical_record = Patient_medical_record::paginate(5);
        return response(array(
                'error' => true,
                'patient_presciption' =>$pat_medical_record->toArray(),
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
       Patient_medical_record::create($request->all());
        return response(array(
                'error' => false,
                'message' =>'Patient Medical record Added Successfully',
               ),200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient_medical_record  $patient_medical_record
     * @return \Illuminate\Http\Response
     */
    public function show($patient_medical_record)
    {
         $pat_medical_record = Patient_medical_record::find($patient_medical_record);
		
   		//$doctors = Doctor::paginate(5);
        return response(array(
                'error' => true,
                'doctor' =>$pat_medical_record,
               ),200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient_medical_record  $patient_medical_record
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient_medical_record $patient_medical_record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient_medical_record  $patient_medical_record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$patient_medical_record)
    {
       Patient_medical_record::find($patient_medical_record)->update($request->all());
        return response(array(
                'error' => false,
                'message' =>'Patient medical Record updated successfully',
               ),200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient_medical_record  $patient_medical_record
     * @return \Illuminate\Http\Response
     */
    public function destroy($patient_medical_record)
    {
         Patient_medical_record::find($patient_medical_record)->delete();
        return response(array(
                'error' => false,
                'message' =>'Patient medical Record deleted successfully',
               ),200);
    }
}
