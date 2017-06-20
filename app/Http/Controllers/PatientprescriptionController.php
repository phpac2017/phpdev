<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patientprescription;

class PatientprescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $pat_prescription = Patientprescription::paginate(5);
        return response(array(
                'error' => true,
                'patient_presciption' =>$pat_prescription->toArray(),
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
         Patientprescription::create($request->all());
        return response(array(
                'error' => false,
                'message' =>'Patient Prescription Added Successfully',
               ),200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patientprescription  $patientprescription
     * @return \Illuminate\Http\Response
     */
    public function show(Patientprescription $patientprescription)
    {
       $pat_prescription = Patientprescription::find($patientprescription);
		
   		//$doctors = Doctor::paginate(5);
        return response(array(
                'error' => true,
                'doctor' =>$pat_prescription,
               ),200); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patientprescription  $patientprescription
     * @return \Illuminate\Http\Response
     */
    public function edit(Patientprescription $patientprescription)
    {
          
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patientprescription  $patientprescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$patientprescription)
    {
        Patientprescription::find($patientprescription)->update($request->all());
        return response(array(
                'error' => false,
                'message' =>'Patient Prescription updated successfully',
               ),200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patientprescription  $patientprescription
     * @return \Illuminate\Http\Response
     */
    public function destroy($patientprescription)
    {
         Patientprescription::find($patientprescription)->delete();
        return response(array(
                'error' => false,
                'message' =>'Patient Prescription Record deleted successfully',
               ),200);
    }
}
