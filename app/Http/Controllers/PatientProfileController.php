<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Patient;
use App\PatientProfile;
use Session;
use File;
use Auth;

class PatientProfileController extends Controller
{

   public function patientProfile()
   {
       $id = Auth::user()->id;
       $query = PatientProfile::where('user_id', $id)->first();
       //print_r($query->blood_group);
       return view('patient/profile')->with("result",$query);
   }
   
   public function patientUpdate(Request $request)
   {
       $id = $request->get('user_id');
       $patient = PatientProfile::select('*')->where('user_id', $id)->first();   
       //print_r($patient);exit;
       if ($file = $request->file('document')) {
           $extension = $file->getClientOriginalExtension();
           $folderName = '/uploads/patients/files/';
           $destinationPath = public_path() . $folderName;
           $safeName_doc = $id . '_' . $request->get('verification_doc_type').'.' . $extension;
           $file->move($destinationPath, $safeName_doc);
            if (File::exists(public_path() . $folderName . $request->get("document"))) {
                File::delete(public_path() . $folderName . $request->get("document"));
            }
       } 
       if(!empty($patient->document)){ 
           $safeName_doc = $patient->document;
       }
      
       if ($file = $request->file('profile_pic')) {
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName = '/uploads/patients/profile/';
            $destinationPath = public_path() . $folderName;
            $safeName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);
            // Image::make($file)->resize(800, 600)->save($destinationPath);
            //delete old pic if exists
            if (File::exists(public_path() . $folderName . $request->get("profile_pic"))) {
                File::delete(public_path() . $folderName . $request->get("profile_pic"));
            }
            //save new file path into db
        }
        if(!empty($patient->profile_image)){             
            $safeName = $patient->profile_image;
        }
        
        if(empty($patient))
        { 
            if(!empty($safeName)){  $request->request->add(['profile_image' => $safeName]); }
            if(!empty($safeName_doc)){                  
                $data = $request->except('document');
                $data['document'] = $safeName_doc;
            }   
            PatientProfile::create($data);        
            Session::flash('alert-success', 'Patient was successful added!');
            return redirect()->back();
        }else{
            if(empty($safeName)){  $safeName=''; }
            if(empty($safeName_doc)){  $safeName_doc=''; } 
           
            $update = [
                'document' => $safeName_doc,
                'profile_image' => $safeName,'full_name' => $request->get("full_name"),
                'country' => $request->get("country"),'age' => $request->get("age"),'state' => $request->get("state"),'gender' => $request->get("gender"),'city'=>$request->get("city"),
                'dob'=>$request->get("dob"),'address'=>$request->get("address"),'blood_group'=>$request->get("blood_group"),'zip_code'=>$request->get("zip_code"),
                'lang'=>$request->get("lang"),'mobile'=>$request->get("mobile"),'alternate_no'=>$request->get("alternate_no"),
                'email_id'=>$request->get("email_id"),
                'updated_at'=>date("Y-m-d H:i:s")];
           
            PatientProfile::where('user_id', $id)->update($update);
            Session::flash('alert-success', 'Patient was successful updated!');
            return redirect()->back();
        }
   }
}
