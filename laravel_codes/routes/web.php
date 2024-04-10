<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('resume/{user_id}','PDFcontrollerController@index_page');

Route::get('resume_download_pdf/{user_id}','PDFcontrollerController@download_pdf')->name('resume_download_pdf');