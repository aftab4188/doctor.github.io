<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;



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

  // Route::get('/', function () {
   // return view('welcome');
//  });



Route::get('/redirect',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::get('/',[HomeController::class,'index']);

 //Route::get('/redirect', 'App\Http\Controllers\HomeController@index');
 Route::get('/add_doctor_view',[AdminController::class,'addview']);

 //Route::get('/docdashview',[AdminController::class,'docdashview']);

 Route::post('/upload_doctor',[AdminController::class,'upload']);

 Route::post('/appoint',[HomeController::class,'storing']);
 
 Route::post('/regdoc',[HomeController::class,'regDoc']);


 Route::get('/myappointment',[HomeController::class,'myappointment']);

 Route::get('/showNewDoctor',[AdminController::class,'showNewDoctor']);
 
 Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

 Route::get('/showappointment',[AdminController::class,'showappointment']);

 Route::get('/showappdoc',[AdminController::class,'showappdocdas']);
 Route::get('/approved/{id}',[AdminController::class,'approved']);

 Route::get('/canceled/{id}',[AdminController::class,'canceled']);
 Route::get('/showdoctor',[AdminController::class,'showdoctor']);
 Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);

 Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);

 Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);
 Route::get('/emailview/{id}',[AdminController::class,'emailview']);

 Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);
 









































 Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
