<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Doctor;

class DoctorController extends Controller
{
   public function index(Request $request)
   {
     
		$doctors = Doctor::paginate(5);
        return response(array(
                'error' => true,
                'doctors' =>$doctors->toArray(),
               ),200);  
   }
   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create(array $data)
   {
      
	 return Doctor::create([
      'dfname' => $data['dfname'],
      'dlname' => $data['dlname'],
      'dphone' => $data['dphone'],
	  'demail' => $data['demail'],
	  'dqualification' => $data['dqualification'],
      'dspecialist' => $data['dspecialist'],
      'ddob' => $data['ddob'],
	  'dgender' => $data['dgender'],
      'password' => bcrypt($data['password']),
   ]);
   }
   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store(Request $request)
   {
   			
   		
   	    $doctor = Doctor::create($request->all());
        return response(array(
                'error' => false,
                'message' =>'Doctor Added Successfully',
				
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
   		$doctors = Doctor::find($id);
		
   		//$doctors = Doctor::paginate(5);
        return response(array(
                'error' => true,
                'doctor' =>$doctors,
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
       Doctor::find($id)->update($request->all());
        return response(array(
                'error' => false,
                'message' =>'Doctor updated successfully',
               ),200);
   }
   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update(Request $request,$id)
   {
      Doctor::find($id)->update($request->all());
        return response(array(
                'error' => false,
                'message' =>'Doctor updated successfully',
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
      Doctor::find($id)->delete();
        return response(array(
                'error' => false,
                'message' =>'Doctor Record deleted successfully',
               ),200);
   }
}
