<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\RegDoctor;







class HomeController extends Controller
{

    public function redirect(){
     
        $usertype=Auth::user()->usertype;
        if($usertype =='1')
        {
            $appoints = Appointment::count();
            $doc = Doctor::count();
            $userr = User::where('usertype','0')->count();
            $admino = User::where('usertype','1')->count();


            return view('admin.homee',compact('appoints', 'doc','userr','admino'));
         
        } 
        if($usertype=='2')
        {
            $appoints = Appointment::count();
            $doc = Doctor::count();
            $userr = User::where('usertype','0')->count();
            $admino = User::where('usertype','1')->count();

           return view('admin.doctordashboard',compact('appoints', 'doc','userr','admino'));
   
        }
        else
        {
            $doctor = Doctor::all();
            return view('aftab.mainhome',compact('doctor'));
        
        }

    }
   


    public function index(){

        $doctor = Doctor::all();
        
        return view('aftab.mainhome',compact('doctor'));

      
    }

    public function storing(Request $request){

      $data =  new Appointment;
      $image=$request->file;
      $imagename=time().'.'.$image->getClientOriginalExtension();
      $request->file->move('doctorimage',$imagename);
      $data->image=$imagename;


      $data->name =$request->name;
      $data->email =$request->email;
      $data->date =$request->date;
      $data->doctor =$request->doctor;
      $data->phone =$request->phone;
      $data->message =$request->message;
      $data->status ='In progress';
      if(Auth::id())
      {

        $data->user_id=Auth::user()->id;

      }
      

      $data->save();
      return redirect()->back()->with('message',' request successful .. 
      will contact you soon');


        
    }
    public function regDoc(Request $request){

        $data =  new RegDoctor;
      
        $data->name =$request->name;
        $data->email =$request->email;
        $data->specility =$request->specility;
        $data->message =$request->message;
        // if(Auth::id())
        // {
  
        //   $data->user_id=Auth::user()->id;
  
        // }
        
        $data->save();
        return redirect()->back()->with('message',' request successful .. 
        will contact you soon');

          
      }

    public function myappointment(){
        if(Auth::id())
        {
         if(Auth::user()->usertype=='0')
         {
            
        $userid =Auth::user()->id;
        $appoint =Appointment::where('user_id',$userid)->get();
        return view('aftab.my_appointment',compact('appoint'));
         }
         else{
            return redirect()->back();

         }

        }
        else{
            return redirect()->back();
        }
    }
          
    public function cancel_appoint($id){
        $data= Appointment::find($id);
        $data->delete();
        return redirect()->back();


    }
}
