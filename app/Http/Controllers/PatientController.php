<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Patient;

class PatientController extends Controller
{
    public function index(Request $request)
   {
     
		$patients = Patient::paginate(5);
        return response(array(
                'error' => true,
                'pa' =>$patients->toArray(),
               ),200);  
   }
   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {
      //
   }
   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store(Request $request)
   {
      Patient::create($request->all());
        return response(array(
                'error' => false,
                'message' =>'Patient Added Successfully',
               ),200);
   }
   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id)
   {
   		//echo "stage1";
   		$patients = Patient::find($id);
		
   		//$doctors = Doctor::paginate(5);
        return response(array(
                'error' => true,
                'doctor' =>$patients,
               ),200); 
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function edit($id)
   {
      //
   }
   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update(Request $request,$id)
   {
      Patient::find($id)->update($request->all());
        return response(array(
                'error' => false,
                'message' =>'Patient updated successfully',
               ),200);
   }
   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function destroy($id)
   {
      Patient::find($id)->delete();
        return response(array(
                'error' => false,
                'message' =>'Doctor Record deleted successfully',
               ),200);
   }
}
