<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Doctor_detail;

class AdminController extends Controller
{
    //add doctors form shows
    public function add_doctor_view(){
        return view('admin.add_doctor_view');
    }

    // doctors data upload in post method in db
    public function upload_doctor_data(Request $request){
        $doctor = new Doctor_detail;
        $image = $request->image;
        $imagename = time(). '.' .$image->getClientoriginalExtension();
        $request->image->move('doctorimage', $imagename);
        $doctor->image = $imagename;

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        $doctor->save();
        return redirect()->back()->with('message', 'Doctor Added Successfully');
    }
}
