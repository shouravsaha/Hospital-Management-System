<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Doctor_detail;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function redirect(){

        if (Auth::id()) {

            if(Auth::user()->usertype == '0'){

                $doctor = Doctor_detail::get();
                return view('user.home', compact('doctor'));

            }else{

                return view('admin.home');

            }

        }

    }

    public function index () {

        if(auth::id()){

            return redirect('home');

        }

        $doctor = Doctor_detail::get();

        return view('user.home', compact('doctor'));

    }

    public function appointment(Request $request){

        $appoinment = new Appointment;
        $appoinment->name = $request->name;
        $appoinment->email = $request->email;
        $appoinment->date = $request->date;
        $appoinment->phone = $request->phone;
        $appoinment->message = $request->message;
        $appoinment->doctor = $request->doctor;
        $appoinment->status = 'In Progress';

        if(Auth::id()){

            $appoinment->user_id = Auth::user()->id;

        }
        $appoinment->save();

        return redirect()->back()->with('message', 'Appointment Request Successful. We will contract with you soon');

    }

    public function myappointment(){

        if(Auth::id()){
            $userid = Auth::user()->id;
            $appointment = Appointment::where('user_id', $userid)->get();
            return view('user.my_appointment', compact('appointment'));
        }
        return redirect()->back();
    }
}
