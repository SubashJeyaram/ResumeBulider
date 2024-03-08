<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\randomId;
use App\preview;
use App\user_information;
use App\profile_summary;
use App\experience_details;
use App\photo_details;

class ResumeBuliderController extends Controller
{
    public function randomIdpost(Request $request){

    	$resume_id=new randomId;

    	$resume_id->randomId = $request->randomId;

    	$resume_id->save();

    	return response()->json([
    		'message'=>"Welcome",
    	]);
    }

    public function previewpost(Request $request){

    	$resume_id=new preview;

    	$resume_id->previewId = $request->randomId;

    	$resume_id->save();

    	return response()->json([
    		'message'=>"Welcome",
    	]);
    }

    public function user_information_insert(Request $request){

    	$resume_user_information=new user_information;

    	$resume_user_information->user_id = $request->user_id;
    	$resume_user_information->firstname = $request->firstname;
    	$resume_user_information->lastname = $request->lastname;
    	$resume_user_information->domain = $request->domain;
    	$resume_user_information->email = $request->email;
    	$resume_user_information->address = $request->address;

    	$resume_user_information->skill_1 = $request->skill_1;
    	$resume_user_information->skill_2 = $request->skill_2;
    	$resume_user_information->skill_3 = $request->skill_3;
    	$resume_user_information->skill_4 = $request->skill_4;
    	$resume_user_information->skill_5 = $request->skill_5;
    	$resume_user_information->skill_6 = $request->skill_6;
    	$resume_user_information->skill_7 = $request->skill_7;

    	$resume_user_information->language_1 = $request->language_1;
    	$resume_user_information->language_2 = $request->language_2;
    	$resume_user_information->language_3 = $request->language_3;

    	$resume_user_information->ug = $request->ug;
    	$resume_user_information->ug_college_name = $request->ug_college_name;
    	$resume_user_information->ug_year_passing = $request->ug_year_passing;

    	$resume_user_information->pg = $request->pg;
    	$resume_user_information->pg_college_name = $request->pg_college_name;
    	$resume_user_information->pg_year_passing = $request->pg_year_passing;

    	$resume_user_information->save();

    	return response()->json([
    		'message'=>"Welcome",
    	]);
    }


    public function profile_summary_insert(Request $request){

    	$resume_profile_summary=new profile_summary;

    	$resume_profile_summary->user_id = $request->user_id;

    	$resume_profile_summary->summary_1 = $request->summary_1;
    	$resume_profile_summary->summary_2 = $request->summary_2;
    	$resume_profile_summary->summary_3 = $request->summary_3;
    	$resume_profile_summary->summary_4 = $request->summary_4;


    	$resume_profile_summary->save();

    	return response()->json([
    		'message'=>"Welcome",
    	]);
    }

     public function experience_details_insert(Request $request){


        $user_id=$request->user_id;
        $company=$request->company;
        $fromyear=$request->fromyear;
        $toyear=$request->toyear;
        $exp1=$request->exp1;
        $exp2=$request->exp2;
        $exp3=$request->exp3;
        $exp4=$request->exp4;


        for($i=0; $i<count((array)$company); $i++){

           $experience_details=array(
            'user_id' => $user_id,
            'company_name' => $company[$i],
            'fromyear' => $fromyear[$i],
            'toyear' => $toyear[$i],
            'expdet1' => $exp1[$i],
            'expdet2' => $exp2[$i],
            'expdet3' => $exp3[$i],
            'expdet4' => $exp4[$i]
           );

           $experience_details_data[] = $experience_details;

        }  

        experience_details::insert($experience_details_data);


        return response()->json([
            'message'=>"Welcome",
        ]);
    }

        public function photo_details_insert(Request $request){

        $resume_photo_details=new photo_details;

        $request->validate([
            'photo'=>'mimes:JPEG,png,jpg,gif,svg|max:2048',
        ]);

        $photoname=time().".".$request->photo->extension();

        $request->photo->move(public_path('photo'),$photoname);

        $resume_photo_details->user_id = $request->user_id;

        $resume_photo_details->photo = $photoname;

        $resume_photo_details->save();

        return response()->json([
            'message'=>"Welcome",
        ]);
    }
    
}
