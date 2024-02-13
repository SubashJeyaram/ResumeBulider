<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/resume_buliderRandomIdpost','ResumeBuliderController@randomIdpost');

Route::post('/resume_buliderPreviewpost','ResumeBuliderController@previewpost');


Route::post('/resume_buliderUserInformation','ResumeBuliderController@user_information_insert');

Route::post('/resume_bulider_profile_summary','ResumeBuliderController@profile_summary_insert');

Route::post('/resume_bulider_experience_details','ResumeBuliderController@experience_details_insert'); 

Route::post('/resume_bulider_photo_details','ResumeBuliderController@photo_details_insert'); 


Route::get('/resume_bulider_get_all_details/{user_id}','ResumeBuliderDisplayController@get_all_details_display');


Route::get('/resume_bulider_download_pdf/{user_id}','PDFcontrollerController@download_pdf');
