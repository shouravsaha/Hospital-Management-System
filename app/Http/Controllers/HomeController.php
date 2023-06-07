<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Doctor_detail;
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
}
