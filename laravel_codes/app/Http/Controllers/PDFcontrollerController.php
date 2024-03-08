<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

use App\randomId;
use App\preview;
use App\user_information;
use App\profile_summary;
use App\experience_details;
use App\photo_details;

class PDFcontrollerController extends Controller
{

   public function index_page($user_id){

   	$details=randomId::where('randomId',$user_id)->first();


   	return view('resume.resume_index',compact('details'));   

   }

   public function download_pdf($user_id){

   	$user_information=user_information::where('user_id',$user_id)->get();

   	$profile_summary=profile_summary::where('user_id',$user_id)->get();
   	
   	$experience_details=experience_details::where('user_id',$user_id)->get();
   	
   	$photo_details=photo_details::where('user_id',$user_id)->get();

   	$pdf=Pdf::loadView('resume.resume_pdf',compact('user_information','profile_summary','experience_details','photo_details'));
   	return $pdf->download('Resume.pdf');
   }
}


