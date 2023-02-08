<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\RegDoctor;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;


use App\Models\Appointment;
//use Notification;
use App\Notifications\MyFirstNotification;




class AdminController extends Controller
{
    // public function addview(){

    //  $usertype=Auth::user()->usertype;

    //  if($usertype=='1')
    //  {
    //      return view('admin.add_doctor');

    //  }
    
    //  if($usertype=='2')
    //  {
    //     return view('admin.doctordashboard');

    //  }

    //   else{

    //  return redirect()->back();
    //        }
    //     }


    public function addview(){
            //    $usertype=Auth::user()->usertype;
        if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {
                return view('admin.add_doctor');

            }
           
            else
            {
                return redirect()->back();

            }

        }
        else{
            return redirect('login');
        }

    }
  
    public function upload(Request $request){

        $doctor = new Doctor;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;


        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->specility=$request->specility;
        $doctor->room=$request->room;
        $doctor->save();
        return redirect()->back()->with('message', 'data added successfuly');

    }

    public function showappointment(){

        if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {
         
               $data = Appointment::all();
                return view('admin.showappointment',compact('data'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
    }
    public function showappdocdas(){

        if(Auth::id())
        {
            if(Auth::user()->usertype=='2')
            {
         
               $data = Appointment::all();
                return view('admin.showappdocdash',compact('data'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
    }
    public function showNewDoctor(){

        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
         
               $data = RegDoctor::all();
                return view('admin.newDoctor',compact('data'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
    }

    public function approved($id){

        $data = Appointment::find($id);
        $data->status= 'approved';
        $data->save();
        return redirect()->back();


    }
    public function canceled($id){

        $data = Appointment::find($id);
        $data->status= 'canceled';
        $data->save();
        return redirect()->back();


    }
    public function showdoctor(){

        $data = Doctor::all();
        return view('admin.showdoctor',compact('data'));
    }
    public function deletedoctor($id){

        $data = Doctor::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function updatedoctor($id)
    {
          $data = Doctor::find($id);
        return view('admin.update_doctor',compact('data'));
    }
     
    public function editdoctor(Request $request , $id){
        $doctor = Doctor::find($id);
        
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->specility=$request->specility;
        $doctor->room=$request->room;

        $image =$request->file;


        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        }
        $doctor->save();
        return redirect()->back()->with('message', 'doctor updated successfuly');


    }

        public function emailview($id){

            $data = Appointment::find($id);
            return view('admin.email_view',compact('data'));
        }

        public function sendemail(Request $request ,$id){

            $data = Appointment::find($id);

            $details= [

                'greeting' => $request->greeting,
                'body' => $request->body,
                'actiontext' => $request->actiontext,
                'actionurl' => $request->actionurl,
                'endpart' => $request->endpart


            ];
            Notification::send($data,new MyFirstNotification($details));

            return redirect()->back()->with('message','email sent successful');


        }
}
