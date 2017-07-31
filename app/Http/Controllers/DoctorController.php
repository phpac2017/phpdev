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
use Log;

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
    * Get Doctor Profile
    *
    * @param  get ID Via Auth
    * @return Response
  */
  public function getProfile()
  {
    $user_id = \Auth::user()->id;
    $doctor = $doc = array();
    $doctor = doctor_profile::selectRaw('*')->where('user_id', $user_id)->get()->toArray();
    //echo "<pre>";print_r($doctor);exit;
    if($doctor !=array()){
        $doc = $doctor[0];
    }
    //echo "<pre>";print_r($doc);exit;
    return view('doctor/profile',compact('doc'));
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
      //'profile_pic' => 'required | mimes:jpeg,jpg,png,gif,ico,bmp',
      'title' => 'required',
      'name' => 'required',
      'gender' => 'required',
      'city' => 'required',
      'experience' => 'required',
      'language' => 'required',
      'nationality' => 'required',
      'description' => 'required',
    ]);

    //echo "<pre>";print_r($request->all());exit;
    $id = $request->get('id');
    $doctor = doctor_profile::select('user_id')->where('user_id', $id)->get()->toArray();
    $check_language = $request->get('language');
    if($check_language!=""){
      $language = implode(",",$check_language);
    }
    //echo $language;exit;
    $update_user = [
      'name'     => $request->get('name'),
      'gender'   => $request->get('gender'),
      'nationality'     => $request->get('nationality'),
      'language'    => $language,
    ];
            
    if($doctor===array()){
      $updateUser = User::find($id)->update($update_user);
      //Call the Doctor Profile model and insert the values        
      $dp = new \App\doctor_profile;
      $dp->title = $request->get('title');
      $dp->user_id = $id;
      $dp->city = $request->get('city');
      $dp->experience = $request->get('experience');
      $dp->description = $request->get('description');

       // is new image uploaded?
      if ($file = $request->file('profile_pic')) {
          $extension = $file->getClientOriginalExtension() ?: 'png';
          $folderName = '/uploads/doctors/profile/';
          $destinationPath = public_path() . $folderName;
          $safeName = str_random(10) . '.' . $extension;
          $file->move($destinationPath, $safeName);
          /*$file->move($destinationPath, $safeName);
          if (!$file->move($destinationPath, $safeName)) {
              return 'Error saving the file.';
          }*/
          //delete old pic if exists
          if (File::exists(public_path() . $folderName . $request->get('profile_pic'))) {
              File::delete(public_path() . $folderName . $request->get('profile_pic'));
          }

          //save new file path into db
          $dp->profile_pic = $safeName;

      }

      $dp->save();
      if($dp->save()){
      //$dp = $dp->id;
       Log::info("Doctor Profile Details Inserted");
      }else{
        Log::info("There were issues while inserting Doctor Profile");
      }

    }else{
      $updateUser = User::find($id)->update($update_user);
      // is new image uploaded?
      if ($file = $request->file('profile_pic')) {
        $extension = $file->getClientOriginalExtension() ?: 'png';
        $folderName = '/uploads/doctors/profile/';
        $destinationPath = public_path() . $folderName;
        $safeName = str_random(10) . '.' . $extension;
        $file->move($destinationPath, $safeName);
        /*if (!$file->move($destinationPath, $safeName)) {
            return 'Error saving the file.';
        }*/
        //delete old pic if exists
        if (File::exists(public_path() . $folderName . $request->get('profile_pic'))) {
            File::delete(public_path() . $folderName . $request->get('profile_pic'));
        }
      }

      $update_doctor = [
        'title'     => $request->get('title'),
        'city'   => $request->get('city'),
        'experience'     => $request->get('experience'),
        'description'    => $request->get('description'),
        'profile_pic'    => $safeName,
      ];
      $update = \App\doctor_profile::where('user_id','=',$id)->update($update_doctor);
    }
        
    // Redirect to the user page
    return Redirect::to('doctor/profile');
  }

  /**
   * Doctor Education update form processing page.
   *
   * @param  User $user
   * @param UserRequest $request
   * @return Redirect
  */
  public function getDocuments()
  {
    $user_id = \Auth::user()->id;
    $doctor_documents = $doc_docs = array();
    $doctor_documents = \App\tblDoctor_Documents::selectRaw('*')->where('user_id', $user_id)->get()->toArray();
    //echo "<pre>";print_r($doctor_education);print_r($doctor_specialization);exit;

    //echo "<pre>";print_r($doc);exit;
    return view('doctor/registration_documents',compact('doctor_documents'));
  }

  /**
   * Doctor Education update form processing page.
   *
   * @param  User $user
   * @param UserRequest $request
   * @return Redirect
  */
  public function getEducation()
  {
    $user_id = \Auth::user()->id;
    $doctor_education = $doc_edu = $doctor_specialization = $doc_spl = array();
    $doctor_education = \App\tblDoctor_Education::selectRaw('*')->where('user_id', $user_id)->get()->toArray();
    $doctor_specialization = \App\tblDoctor_Speciality::selectRaw('*')->where('user_id', $user_id)->get()->toArray();
    //echo "<pre>";print_r($doctor_education);print_r($doctor_specialization);exit;

    //echo "<pre>";print_r($doc);exit;
    return view('doctor/education_specialization',compact('doctor_education','doctor_specialization'));
  }


  /**
   * Doctor Education update form processing page.
   *
   * @param  User $user
   * @param UserRequest $request
   * @return Redirect
  */
  public function getServices()
  {
    $user_id = \Auth::user()->id;
    $doctor_service = $doc_ser = $doctor_experience = $doc_exp = array();
    $doctor_service = \App\tblDoctor_Services::selectRaw('*')->where('user_id', $user_id)->get()->toArray();
    $doctor_experience = \App\tblDoctor_Experience::selectRaw('*')->where('user_id', $user_id)->get()->toArray();
    //echo "<pre>";print_r($doctor_service);print_r($doctor_experience);exit;

    //echo "<pre>";print_r($doc);exit;
    return view('doctor/services_experience',compact('doctor_service','doctor_experience'));
  }


  /**
   * Doctor Education update form processing page.
   *
   * @param  User $user
   * @param UserRequest $request
   * @return Redirect
  */
  public function getAwards()
  {
    $user_id = \Auth::user()->id;
    $doctor_award = $doc_awd = $doctor_membership = $doc_mship = array();
    $doctor_award = \App\tblDoctor_Awards::selectRaw('*')->where('user_id', $user_id)->get()->toArray();
    $doctor_membership = \App\tblDoctor_Memberships::selectRaw('*')->where('user_id', $user_id)->get()->toArray();
    //echo "<pre>";print_r($doctor_service);print_r($doctor_experience);exit;

    //echo "<pre>";print_r($doc);exit;
    return view('doctor/awards_membership',compact('doctor_award','doctor_membership'));
  }


  /**
   * Doctor Education update form processing page.
   *
   * @param  User $user
   * @param UserRequest $request
   * @return Redirect
  */
  public function updateDocuments(User $user, Request $request)
  {
    //echo "<pre>";print_r($request->all());//exit;
    
    
    $cr_no = $request->get('cr_no');
    $council = $request->get('council');
    $year = $request->get('year');
   // echo "<pre>";print_r($request->all());
  // is new image uploaded?
    if ($file = $request->file('profile_pic')) {
      $extension = $file->getClientOriginalExtension() ?: 'png';
      $folderName = '/uploads/doctors/profile/';
      $destinationPath = public_path() . $folderName;
      $safeName = str_random(10) . '.' . $extension;
      $file->move($destinationPath, $safeName);
    }else{
      $safeName = 'def_img.png';
    }

    $cr_count = count($request->get('cr_no'));
    //echo $edu_count." - ".$spe_count;
    $user_id = \Auth::user()->id;

          
    $doctor_education = $doc_edu = $doctor_specialization = $doc_spl = array();
    $doctor_education = \App\tblDoctor_Documents::selectRaw('*')->where('user_id', $user_id)->get()->toArray();

    if($doctor_education==array()){
      for($c=0;$c<$cr_count;$c++){
          $docReg = new \App\tblDoctor_Documents;
          $docReg->user_id = $user_id;
          $docReg->council_reg_no   = $cr_no[$c];
          $docReg->council_name      = $council[$c];
          $docReg->year = $year[$c];
          $docReg->documents = $safeName;
          if($docReg->save()){
            $docReg_LID = $docReg->id;
            Log::info("tblDoctor_Documents Details Inserted");
            Log::info("tblDoctor_Documents Last Inserted ID - ".$docReg_LID);
          }else{
            Log::info("There were issues while inserting tblDoctor_Documents Details");
          }
        }
    }else{
      $delete_existing_documents = \App\tblDoctor_Documents::where('user_id', $user_id)->delete();
      if($delete_existing_documents){
        for($c=0;$c<$cr_count;$c++){
          $docReg = new \App\tblDoctor_Documents;
          $docReg->user_id = $user_id;
          $docReg->council_reg_no   = $cr_no[$c];
          $docReg->council_name      = $council[$c];
          $docReg->year = $year[$c];
          $docReg->documents = $safeName;
          if($docReg->save()){
            $docReg_LID = $docReg->id;
            Log::info("tblDoctor_Documents Details Inserted");
            Log::info("tblDoctor_Documents Last Inserted ID - ".$docReg_LID);
          }else{
            Log::info("There were issues while inserting tblDoctor_Documents Details");
          }
        }
      }else{
        Log::info("There were issues while inserting tblDoctor_Documents Details");
      }
        
    }
    
    // Redirect to the user page
    return Redirect::to('doctor/documents');
  }


  /**
   * Doctor Education update form processing page.
   *
   * @param  User $user
   * @param UserRequest $request
   * @return Redirect
  */
  public function updateEducation(User $user, Request $request)
  {
    //echo "<pre>";print_r($request->all());//exit;
    
    
    $qualification = $request->get('qualification');
    $year = $request->get('year');
    $college = $request->get('college');
    $speciality = $request->get('speciality');
    $edu_count = count($request->get('qualification'));
    $spe_count = count($request->get('speciality'));
    //echo $edu_count." - ".$spe_count;
    $user_id = \Auth::user()->id;

    $qual = implode(",",$qualification);
    $spl = implode(",",$speciality);
    $update = [
      'qualification'     => $qual,
      'speciality'  => $spl
      //'updated_at'    => $today,
      //'note_ids'         => $first_note_id,
    ];
    $update_user_qualification = \App\User::where('id','=',$user_id)->update($update);
          
    $doctor_education = $doc_edu = $doctor_specialization = $doc_spl = array();
    $doctor_education = \App\tblDoctor_Education::selectRaw('*')->where('user_id', $user_id)->get()->toArray();
    $doctor_specialization = \App\tblDoctor_Speciality::selectRaw('*')->where('user_id', $user_id)->get()->toArray();

    if($doctor_education==array()){
      for($c=0;$c<$edu_count;$c++){
        $docEdu = new \App\tblDoctor_Education;
        $docEdu->user_id = $user_id;
        $docEdu->degree   = $qualification[$c];
        $docEdu->college_name      = $college[$c];
        $docEdu->year_completed = $year[$c];
        if($docEdu->save()){
          $docEdu_LID = $docEdu->id;
          Log::info("tblDoctor_Education Details Inserted");
          Log::info("tblDoctor_Education Last Inserted ID - ".$docEdu_LID);
        }else{
          Log::info("There were issues while inserting tblDoctor_Education Details");
        }
      }
    }else{
      $delete_existing_education = \App\tblDoctor_Education::where('user_id', $user_id)->delete();
      if($delete_existing_education){
        for($c=0;$c<$edu_count;$c++){
          $docEdu = new \App\tblDoctor_Education;
          $docEdu->user_id = $user_id;
          $docEdu->degree   = $qualification[$c];
          $docEdu->college_name      = $college[$c];
          $docEdu->year_completed = $year[$c];
          if($docEdu->save()){
            $docEdu_LID = $docEdu->id;
            Log::info("tblDoctor_Education Details Inserted");
            Log::info("tblDoctor_Education Last Inserted ID - ".$docEdu_LID);
          }else{
            Log::info("There were issues while inserting tblDoctor_Education Details");
          }
        }
      }else{
        Log::info("There were issues while inserting tblDoctor_Education Details");
      }
        
    }
    

    if($doctor_education==array()){
      for($d=0;$d<$spe_count;$d++){
        $docSpe = new \App\tblDoctor_Speciality;
        $docSpe->user_id = $user_id;
        $docSpe->speciality   = $speciality[$d];
        if($docSpe->save()){
          $docSpe_LID = $docSpe->id;
          Log::info("tblDoctor_Speciality Details Inserted");
          Log::info("tblDoctor_Speciality Last Inserted ID - ".$docSpe_LID);
        }else{
          Log::info("There were issues while inserting tblDoctor_Speciality Details");
        }
      }
    }else{
      $delete_existing_speciality = \App\tblDoctor_Speciality::where('user_id', $user_id)->delete();
      if($delete_existing_speciality){
        for($d=0;$d<$spe_count;$d++){
          $docSpe = new \App\tblDoctor_Speciality;
          $docSpe->user_id = $user_id;
          $docSpe->speciality   = $speciality[$d];
          if($docSpe->save()){
            $docSpe_LID = $docSpe->id;
            Log::info("tblDoctor_Speciality Details Inserted");
            Log::info("tblDoctor_Speciality Last Inserted ID - ".$docSpe_LID);
          }else{
            Log::info("There were issues while inserting tblDoctor_Speciality Details");
          }
        }
      }else{
        Log::info("There were issues while inserting tblDoctor_Speciality Details");
      }
        
    }

    // Redirect to the user page
    return Redirect::to('doctor/specialization');
  }


  /**
   * Doctor Education update form processing page.
   *
   * @param  User $user
   * @param UserRequest $request
   * @return Redirect
  */
  public function updateServices(User $user, Request $request)
  {
    //echo "<pre>";print_r($request->all());//exit;
    
    $today = date("Y-m-d H:i:s");
    $service = $request->get('service');
    $duration = $request->get('duration');
    $role = $request->get('role');
    $city = $request->get('city');
    $stid = $request->get('stid');
    $etid = $request->get('etid');
    $hosp_name = $request->get('hosp_name');
    $ser_count = count($request->get('service'));
    $exp_count = count($request->get('role'));
    //echo $edu_count." - ".$spe_count;
    $user_id = \Auth::user()->id;
    $doctor_service = $doc_ser = $doctor_experience = $doc_exp = array();
    $doctor_service = \App\tblDoctor_Services::selectRaw('*')->where('user_id', $user_id)->get()->toArray();
    $doctor_experience = \App\tblDoctor_Experience::selectRaw('*')->where('user_id', $user_id)->get()->toArray();
             
    if($doctor_service==array()){
        for($c=0;$c<$ser_count;$c++){
          $docSer = new \App\tblDoctor_Services;
          $docSer->user_id = $user_id;
          $docSer->service   = $service[$c];
          if($docSer->save()){
            $docSer_LID = $docSer->id;
            Log::info("tblDoctor_Services Details Inserted");
            Log::info("tblDoctor_Services Last Inserted ID - ".$docSer_LID);
          }else{
            Log::info("There were issues while inserting tblDoctor_Services Details");
          }
        }    
      }else{
        $delete_existing_services = \App\tblDoctor_Services::where('user_id', $user_id)->delete();
        if($delete_existing_services){
          for($c=0;$c<$ser_count;$c++){
            $docSer = new \App\tblDoctor_Services;
            $docSer->user_id = $user_id;
            $docSer->service   = $service[$c];
            if($docSer->save()){
              $docSer_LID = $docSer->id;
              Log::info("tblDoctor_Services Details Inserted");
              Log::info("tblDoctor_Services Last Inserted ID - ".$docSer_LID);
            }else{
              Log::info("There were issues while inserting tblDoctor_Services Details");
            }
          }
        }else{
          Log::info("There were issues while inserting tblDoctor_Services Details");
        }

        
      }
    
      if($doctor_experience==array()){
        for($d=0;$d<$exp_count;$d++){
          $docExp = new \App\tblDoctor_Experience;
          $docExp->user_id = $user_id;
          $docExp->duration   = $duration[$d];
          $docExp->role = $role[$d];
          $docExp->city   = $city[$d];
          $docExp->clinic_name = $hosp_name[$d];
          if($docExp->save()){
            $docExp_LID = $docExp->id;
            Log::info("tblDoctor_Experience Details Inserted");
            Log::info("tblDoctor_Experience Last Inserted ID - ".$docExp_LID);
          }else{
            Log::info("There were issues while inserting tblDoctor_Experience Details");
          }
        }    
      }else{
        $delete_existing_experience = \App\tblDoctor_Experience::where('user_id', $user_id)->delete();
        if($delete_existing_experience){
          for($d=0;$d<$exp_count;$d++){
            $docExp = new \App\tblDoctor_Experience;
            $docExp->user_id = $user_id;
            $docExp->duration   = $duration[$d];
            $docExp->role = $role[$d];
            $docExp->city   = $city[$d];
            $docExp->clinic_name = $hosp_name[$d];
            if($docExp->save()){
              $docExp_LID = $docExp->id;
              Log::info("tblDoctor_Experience Details Inserted");
              Log::info("tblDoctor_Experience Last Inserted ID - ".$docExp_LID);
            }else{
              Log::info("There were issues while inserting tblDoctor_Experience Details");
            }
          }
        }else{
            Log::info("There were issues while inserting tblDoctor_Experience Details");
        }
      }

    // Redirect to the user page
    return Redirect::to('doctor/services');
  }


  /**
   * Doctor Education update form processing page.
   *
   * @param  User $user
   * @param UserRequest $request
   * @return Redirect
  */
  public function updateAwards(User $user, Request $request)
  {
    //echo "<pre>";print_r($request->all());//exit;
    
    $today = date("Y-m-d H:i:s");
    $award = $request->get('award');
    $year = $request->get('year');
    $membership = $request->get('membership');
    $awd_count = count($request->get('award'));
    $msp_count = count($request->get('membership'));
    //echo $edu_count." - ".$spe_count;
    $user_id = \Auth::user()->id;
    $doctor_award = $doc_awd = $doctor_membership = $doc_msp = array();
    $doctor_award = \App\tblDoctor_Awards::selectRaw('*')->where('user_id', $user_id)->get()->toArray();
    $doctor_membership = \App\tblDoctor_Memberships::selectRaw('*')->where('user_id', $user_id)->get()->toArray();
             
    if($doctor_award==array()){
        for($c=0;$c<$awd_count;$c++){
          $docAwd = new \App\tblDoctor_Awards;
          $docAwd->user_id = $user_id;
            $docAwd->award_name   = $award[$c];
            $docAwd->year   = $year[$c];
          if($docAwd->save()){
            $docAwd_LID = $docAwd->id;
            Log::info("tblDoctor_Awards Details Inserted");
            Log::info("tblDoctor_Awards Last Inserted ID - ".$docAwd_LID);
          }else{
            Log::info("There were issues while inserting tblDoctor_Awards Details");
          }
        }    
      }else{
        $delete_existing_awards = \App\tblDoctor_Awards::where('user_id', $user_id)->delete();
        if($delete_existing_awards){
          for($c=0;$c<$awd_count;$c++){
            $docAwd = new \App\tblDoctor_Awards;
            $docAwd->user_id = $user_id;
            $docAwd->award_name   = $award[$c];
            $docAwd->year   = $year[$c];
            if($docAwd->save()){
              $docAwd_LID = $docAwd->id;
              Log::info("tblDoctor_Awards Details Inserted");
              Log::info("tblDoctor_Awards Last Inserted ID - ".$docAwd_LID);
            }else{
              Log::info("There were issues while inserting tblDoctor_Awards Details");
            }
          }
        }else{
          Log::info("There were issues while inserting tblDoctor_Awards Details");
        }

        
      }
    
      if($doctor_membership==array()){
        for($d=0;$d<$msp_count;$d++){
          $docMsp = new \App\tblDoctor_Memberships;
          $docMsp->user_id = $user_id;
          $docMsp->membership   = $membership[$d];
          if($docMsp->save()){
            $docMsp_LID = $docMsp->id;
            Log::info("tblDoctor_Memberships Details Inserted");
            Log::info("tblDoctor_Memberships Last Inserted ID - ".$docMsp_LID);
          }else{
            Log::info("There were issues while inserting tblDoctor_Memberships Details");
          }
        }    
      }else{
        $delete_existing_experience = \App\tblDoctor_Memberships::where('user_id', $user_id)->delete();
        if($delete_existing_experience){
          for($d=0;$d<$msp_count;$d++){
            $docMsp = new \App\tblDoctor_Memberships;
            $docMsp->user_id = $user_id;
            $docMsp->membership   = $membership[$d];
            if($docMsp->save()){
              $docMsp_LID = $docMsp->id;
              Log::info("tblDoctor_Memberships Details Inserted");
              Log::info("tblDoctor_Memberships Last Inserted ID - ".$docMsp_LID);
            }else{
              Log::info("There were issues while inserting tblDoctor_Memberships Details");
            }
          }
        }else{
            Log::info("There were issues while inserting tblDoctor_Memberships Details");
        }
      }

    // Redirect to the user page
    return Redirect::to('doctor/awards');
  }


  /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
  */
  public function show($id)
  {
 		$doctors = Doctor::find($id);
	  return response(array('error' => true,'doctor' =>$doctors,),200); 		   
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
    return response(array('error' => false,'message' =>'Doctor updated successfully',),200);
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
    return response(array('error' => false,'message' =>'Doctor updated successfully',),200);
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
    return response(array('error' => false,'message' =>'Doctor Record deleted successfully',),200);
  }


  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return User
   */
  public function updateQualification(Request $request)
  {
    Log::info('AJAX Call - Update Qualification..');
    if($request->ajax()) {      
      //Get Form Values
      $id = $request->input('id');
      $type = $request->input('type');
      $value = $request->input('val');
      $tid = $request->input('tid');
      $user_id = \Auth::user()->id;
      $getQualification = array();
      Log::info('ID '.$id);
      Log::info('Type '.$type);
      Log::info('User ID '.$user_id);
      
      if($type=='u'){
        $getQualification = \App\User::select('qualification')->where('id',$user_id)->get()->toArray();
        if($getQualification!=array()){
          $qualification = $getQualification[0]['qualification'];
          $qual = explode(',', $qualification);

          while(($i = array_search($value, $qual)) !== false) {
            unset($qual[$i]);
          }

          $qual = implode(',', $qual);
          $update = [
            'qualification'     => $qual,
            //'updated_at'    => $today,
            //'note_ids'         => $first_note_id,
          ];
          $update_qualification = \App\User::where('id','=',$user_id)->update($update);
          if($update_qualification){
            return 1;
          }else{
            return 0;
          }
          Log::info("User Details Updated");
        }else{
          return 0;
        }

      }else{
        $getQualification = \App\tblDoctor_Education::where('id',$tid)->delete();
        if($getQualification){
          Log::info("tblDoctor_Education Details Updated");
          return 1;
        }else{
          return 0;
        }
      }      
      
      
    }else{      
      return Redirect::to('/');
    }
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return User
   */
  public function updateSpecialization(Request $request)
  {
    Log::info('AJAX Call - Update Speciality..');
    if($request->ajax()) {      
      //Get Form Values
      $id = $request->input('id');
      $type = $request->input('type');
      $value = $request->input('val');
      $tid = $request->input('tid');
      $user_id = \Auth::user()->id;
      $getSpecialization = array();
      Log::info('ID '.$id);
      Log::info('Type '.$type);
      Log::info('User ID '.$user_id);
      
      if($type=='u'){
        $getSpecialization = \App\User::select('speciality')->where('id',$user_id)->get()->toArray();
        if($getSpecialization!=array()){
          $specialization = $getSpecialization[0]['speciality'];
          $spl = explode(',', $specialization);

          while(($i = array_search($value, $spl)) !== false) {
            unset($spl[$i]);
          }

          $spl = implode(',', $spl);
          $update = [
            'speciality'     => $spl,
            //'updated_at'    => $today,
            //'note_ids'         => $first_note_id,
          ];
          $update_spl = \App\User::where('id','=',$user_id)->update($update);
          if($update_spl){
            return 1;
          }else{
            return 0;
          }
          Log::info("User Details Updated");
        }else{
          return 0;
        }

      }else{
        $getSpecialization = \App\tblDoctor_Speciality::where('id',$tid)->delete();
        if($getSpecialization){
          Log::info("tblDoctor_Speciality Details Updated");
          return 1;
        }else{
          return 0;
        }
      }      
      
      
    }else{      
      return Redirect::to('/');
    }
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return User
   */
  public function updateService(Request $request)
  {
    Log::info('AJAX Call - Update Service..');
    if($request->ajax()) {      
      //Get Form Values
      $id = $request->input('id');
      $type = $request->input('type');
      $value = $request->input('val');
      $tid = $request->input('tid');
      $user_id = \Auth::user()->id;
      Log::info('ID '.$id);
      Log::info('Type '.$type);
      Log::info('User ID '.$user_id);      
      
      $delService = \App\tblDoctor_Services::where('id',$tid)->delete();
      if($delService){
        Log::info("tblDoctor_Service Details Deleted");
        return 1;
      }else{
        return 0;
      }        
      
      
    }else{      
      return Redirect::to('/');
    }
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return User
   */
  public function updateExperience(Request $request)
  {
    Log::info('AJAX Call - Update Experience..');
    if($request->ajax()) {      
      //Get Form Values
      $id = $request->input('id');
      $type = $request->input('type');
      $value = $request->input('val');
      $tid = $request->input('tid');
      $user_id = \Auth::user()->id;
      $getSpecialization = array();
      Log::info('ID '.$id);
      Log::info('Type '.$type);
      Log::info('User ID '.$user_id);
     
      $delExperience = \App\tblDoctor_Experience::where('id',$tid)->delete();
      if($delExperience){
        Log::info("tblDoctor_Experience Details Deleted");
        return 1;
      }else{
        return 0;
      }
      
      
    }else{      
      return Redirect::to('/');
    }
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return User
   */
  public function updateAward(Request $request)
  {
    Log::info('AJAX Call - Update Service..');
    if($request->ajax()) {      
      //Get Form Values
      $id = $request->input('id');
      $type = $request->input('type');
      $value = $request->input('val');
      $tid = $request->input('tid');
      $user_id = \Auth::user()->id;
      Log::info('ID '.$id);
      Log::info('Type '.$type);
      Log::info('User ID '.$user_id);      
      
      $delAward = \App\tblDoctor_Awards::where('id',$tid)->delete();
      if($delAward){
        Log::info("tblDoctor_Awards Details Deleted");
        return 1;
      }else{
        return 0;
      }        
      
      
    }else{      
      return Redirect::to('/');
    }
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return User
   */
  public function updateMembership(Request $request)
  {
    Log::info('AJAX Call - Update Membership..');
    if($request->ajax()) {      
      //Get Form Values
      $id = $request->input('id');
      $type = $request->input('type');
      $value = $request->input('val');
      $tid = $request->input('tid');
      $user_id = \Auth::user()->id;
      $getSpecialization = array();
      Log::info('ID '.$id);
      Log::info('Type '.$type);
      Log::info('User ID '.$user_id);
     
      $delMembership = \App\tblDoctor_Memberships::where('id',$tid)->delete();
      if($delMembership){
        Log::info("tblDoctor_Memberships Details Deleted");
        return 1;
      }else{
        return 0;
      }
      
      
    }else{      
      return Redirect::to('/');
    }
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return User
   */
  public function updateDocument(Request $request)
  {
    Log::info('AJAX Call - Update Document..');
    if($request->ajax()) {      
      //Get Form Values
      $id = $request->input('id');
      $type = $request->input('type');
      $value = $request->input('val');
      $tid = $request->input('tid');
      $user_id = \Auth::user()->id;
      $getSpecialization = array();
      Log::info('ID '.$id);
      Log::info('Type '.$type);
      Log::info('User ID '.$user_id);
     
      $delMembership = \App\tblDoctor_Documents::where('id',$tid)->delete();
      if($delMembership){
        Log::info("tblDoctor_Documents Details Deleted");
        return 1;
      }else{
        return 0;
      }
      
      
    }else{      
      return Redirect::to('/');
    }
  }

}
