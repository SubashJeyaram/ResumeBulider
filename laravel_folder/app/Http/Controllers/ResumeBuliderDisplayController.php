<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\randomId;
use App\preview;
use App\user_information;
use App\profile_summary;
use App\experience_details;
use App\photo_details;

class ResumeBuliderDisplayController extends Controller
{

    public function get_all_details_display($user_id){

    	$all_details=user_information::join('profile_summaries','profile_summaries.user_id','=','user_informations.user_id')->join('experience_details','experience_details.user_id','=','profile_summaries.user_id')->join('photo_details','photo_details.user_id','=','experience_details.user_id')->where('user_informations.user_id',$user_id)->where('profile_summaries.user_id',$user_id)->where('experience_details.user_id',$user_id)->where('photo_details.user_id',$user_id)->get();


    	return response()->json([
    		'message' => "SuccessFull!!!",
    		'data' => $all_details
    	]);



    }
}
