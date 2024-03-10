<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\schedule;
use App\Models\Appointments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //doctor
    public function dhome(){
        $doctorId = auth()->user()->id;
        $data = Appointments::index($doctorId);
        // dd($data);
        return view('user.doctor.dhome',compact('data'));
    }

    //schedule create page
    public function createSchedulePage(){
        $data = Doctor::select('id')->where('user_id',Auth::user()->id)->first();
        return view('user.doctor.createSchedulePage', compact('data'));
    }

    //schedule create
    public function createSchedule(Request $request){
        $data = schedule::store($request);
        return redirect()->route('doctor#scheduleList');
    }

    //patient
    public function phome(){
        $data = Doctor::list();
        // dd($data);
        return view('user.patient.phome', compact('data'));
    }


}
