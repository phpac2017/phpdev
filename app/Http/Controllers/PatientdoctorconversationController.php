<?php

namespace App\Http\Controllers;

use App\Patient_doctor_conversation;
use Illuminate\Http\Request;

class PatientdoctorconversationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pat_doc_conversation = Patient_doctor_conversation::paginate(5);
        return response(array(
                'error' => true,
                'patient_presciption' =>$pat_doc_conversation->toArray(),
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
        Patient_doctor_conversation::create($request->all());
        return response(array(
                'error' => false,
                'message' =>'Patient Doctor conversation Added Successfully',
               ),200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient_doctor_conversation  $patient_doctor_conversation
     * @return \Illuminate\Http\Response
     */
    public function show($patient_doctor_conversation)
    {
        $pat_doc_conversation = Patient_doctor_conversation::find($patient_doctor_conversation);
		
   		//$doctors = Doctor::paginate(5);
        return response(array(
                'error' => true,
                'doctor' =>$pat_doc_conversation,
               ),200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient_doctor_conversation  $patient_doctor_conversation
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient_doctor_conversation $patient_doctor_conversation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient_doctor_conversation  $patient_doctor_conversation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$patient_doctor_conversation)
    {
       Patient_doctor_conversation::find($patient_doctor_conversation)->update($request->all());
        return response(array(
                'error' => false,
                'message' =>'Patient Doctor Converstaion updated successfully',
               ),200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient_doctor_conversation  $patient_doctor_conversation
     * @return \Illuminate\Http\Response
     */
    public function destroy($patient_doctor_conversation)
    {
         Patient_doctor_conversation::find($patient_doctor_conversation)->delete();
        return response(array(
                'error' => false,
                'message' =>'Patient Doctor Converstaion Record deleted successfully',
               ),200);
    }
}
