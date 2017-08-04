<?php
// My common functions
if(! function_exists('getCitiesList')){
	function getCitiesList()
	{
		$cities = DB::table("cities")->where('state_id',35)->pluck("name","id");
		return $cities;
	}
}

if(! function_exists('getNationalities')){
	function getNationalities()
	{
		$nationalities = DB::table("nationality")->pluck("nationality","id");
		return $nationalities;
	}
}

if(! function_exists('getLanguages')){
	function getLanguages()
	{
		$languages = DB::table("languages")->pluck("name","id");
		return $languages;
	}
}

if(! function_exists('getLang')){
	function getLang($id)
	{
		$ids = explode(",", $id);
		$lang = DB::table("languages")->whereIn('id',$ids)->pluck("id");
		return $lang;
	}
}

if(! function_exists('getYear')){
	function getYear()
	{
		$year = range(1980,date("Y"));
		return $year;
	}
}

if(! function_exists('getCollegeId')){
	function getCollegeId($id,$uid)
	{
		$collegeID = array();
		$collegeID = \App\tblDoctor_Education::selectRaw('college_name')->where('degree',$id)->where('user_id', $uid)->get()->toArray();
		if($collegeID!=array()){
			$college_id = $collegeID[0]['college_name'];
		}else{
			$college_id = 0;
		}
		return $college_id;
	}
}

if(! function_exists('getCompletedYear')){
	function getCompletedYear($id,$uid)
	{
		$completedYear = array();
		$completedYear = \App\tblDoctor_Education::selectRaw('year_completed')->where('degree',$id)->where('user_id', $uid)->get()->toArray();
		if($completedYear!=array()){
			$completed_year = $completedYear[0]['year_completed'];
		}else{
			$completed_year = 0;
		}
		return $completed_year;
	}
}

if(! function_exists('getProfilePic')){
	function getProfilePic($userid)
	{
		$doctor = $doc = array();
		$doctor = \App\doctor_profile::selectRaw('*')->where('user_id', $userid)->get()->toArray();
		//echo "<pre>";print_r($doctor);exit;
		if($doctor !=array()){
			$doc = $doctor[0];
		}
		if($doc!=array()){
		    $doc_id = $doc['id'];
			$doc_uid = $doc['user_id'];
			$doc_title = $doc['title'];
			$doc_city = $doc['city'];
			$doc_exp = $doc['experience'];
			$doc_des = $doc['description'];
			$imgsrc = $doc['profile_pic'];

		}else{
			$doc_id = "";
			$doc_uid = "";
			$doc_title = "";
			$doc_city = "";
			$doc_exp = "";
			$doc_des = "";
			$imgsrc = "random-avatar7.jpg";

		}
		return $imgsrc;
	}
}

?>