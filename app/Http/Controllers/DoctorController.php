<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Doctor;
use App\doctor_profile;
use App\User;
use File;
use Hash;
use Lang;
use Mail;
use Redirect;
use URL;
use View;

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
     * User update form processing page.
     *
     * @param  User $user
     * @param UserRequest $request
     * @return Redirect
     */
    public function updateProfile(User $user, Request $request)
    {

        $this->validate($request, [
            'profile_pic' => 'required | mimes:jpeg,jpg,png',
            'title' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'city' => 'required',
            'experience' => 'required',
            'language' => 'required',
            'nationality' => 'required',
            'description' => 'required',
        ]);

        $id = $request->get('id');
        $doctor = doctor_profile::select('user_id')->where('user_id', $id)->get()->toArray();
        $update_user = [
          'name'     => $tblDF_LID,
          'gender'   => 4,
          'nationality'     => $form_user_id,
          'language'    => $today,
        ];
                
        if($doctor===array()){
           User::find($id)->update($update_user);
        }
        echo "<pre>";print_r($doctor);exit;
        echo "DP ".$doctor->profile_pic;
        exit;

        // is new image uploaded?
        if ($file = $request->file('profile_pic')) {
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName = '/uploads/doctors/profile/';
            $destinationPath = public_path() . $folderName;
            $safeName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);
            //delete old pic if exists
            if (File::exists(public_path() . $folderName . $doctor->profile_pic)) {
                File::delete(public_path() . $folderName . $doctor->profile_pic);
            }

            //save new file path into db
            $doctor->profile_pic = $safeName;

        }

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
