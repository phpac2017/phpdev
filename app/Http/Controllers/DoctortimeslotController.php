<?php

namespace App\Http\Controllers;

use App\Doctor_timeslot;
use Illuminate\Http\Request;

class DoctortimeslotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $doc_timeslot = Doctor_timeslot::paginate(5);
        return response(array(
                'error' => true,
                'patient_presciption' =>$doc_timeslot->toArray(),
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
        Doctor_timeslot::create($request->all());
        return response(array(
                'error' => false,
                'message' =>'Doctor Time slot Added Successfully',
               ),200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor_timeslot  $doctor_timeslot
     * @return \Illuminate\Http\Response
     */
    public function show($doctor_timeslot)
    {
      $doc_timeslot = Doctor_timeslot::find($doctor_timeslot);
		
   		//$doctors = Doctor::paginate(5);
        return response(array(
                'error' => true,
                'doctor' =>$doc_timeslot,
               ),200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor_timeslot  $doctor_timeslot
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor_timeslot $doctor_timeslot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor_timeslot  $doctor_timeslot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$doctor_timeslot)
    {
        Doctor_timeslot::find($doctor_timeslot)->update($request->all());
        return response(array(
                'error' => false,
                'message' =>'Doctor time slot Record updated successfully',
               ),200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor_timeslot  $doctor_timeslot
     * @return \Illuminate\Http\Response
     */
    public function destroy($doctor_timeslot)
    {
         Doctor_timeslot::find($doctor_timeslot)->delete();
        return response(array(
                'error' => false,
                'message' =>'Doctor time slot Record deleted successfully',
               ),200);
    }
}
