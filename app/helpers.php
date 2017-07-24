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

?>