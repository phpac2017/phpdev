<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientAssessmentController extends Controller
{
    //
    public function getSelfAssessmentMale(){
    	return view('patient/self_assessment_male');
    }

    public function postSelfAssessmentMale(){
    	//return view('patient/');
    }

    public function getSelfAssessmentFemale(){
    	return view('patient/self_assessment_female');
    }

    public function postSelfAssessmentFemale(){
    	//return view('patient/');
    }

    public function getSelfAssessmentMaleQA(){
    	return view('patient/self_assessment_male_qa');
    }

    public function postSelfAssessmentMaleQA(){
    	//return view('patient/');
    }

    public function getSelfAssessmentFemaleQA(){
    	return view('patient/self_assessment_female_qa');
    }

    public function postSelfAssessmentFemaleQA(){
    	//return view('patient/');
    }
}
