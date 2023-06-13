<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Doctor_detail;
use App\Notifications\SendEmailNotification;
// use Illuminate\Notifications\Notification;
Use Notification;

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

    public function showappointment(){

        $appoint = Appointment::get();
        return view('admin.showappointment', compact('appoint'));

    }

    public function approved_appointment($id){

        $data = Appointment::find($id);

        if($data->status = "In Progress"){

            $data->status = "Approved";

        }

        $data->save();
        return redirect()->back();
    }

    public function calceled_appointment($id){
        $data = Appointment::find($id);

        if($data->status = "In Progress"){

            $data->status = "Canceled";

        }

        $data->save();
        return redirect()->back();

    }

    public function showdoctors(){

        $doctors = Doctor_detail::get();
        return view('admin.showdoctors', compact('doctors'));

    }

    public function delete_doctor($id){

        $doctor = Doctor_detail::find($id);
        $doctor->delete();
        return redirect()->back();

    }

    public function update_doctor($id){

        $doctor = Doctor_detail::find($id);
        return view('admin.updatedoctor', compact('doctor'));

    }

    public function edit_doctor(Request $request, $id){

        $doctor = Doctor_detail::find($id);
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('doctorimage', $imagename);
            $doctor->image = $imagename;
        }
        $doctor->save();
        return redirect()->back()->with('message', 'Doctor Details Updated Successfully');
    }

    public function appointment_email($id){

        $data = Appointment::find($id);
        return view('admin.appointment_email', compact('data'));

    }

    public function appointment_email_send(Request $request, $id){

        $data = Appointment::find($id);
        $details = [

            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart,

        ];
        Notification::send($data, new SendEmailNotification($details));
        return redirect()->back();
    }
}
