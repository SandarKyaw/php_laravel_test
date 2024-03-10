<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\schedule;
use App\Models\Appointments;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    //
    public function createAppointPage(){
        $data = Doctor::list();
        return view('user.patient.createAppointPage', compact('data'));
    }

    public function createAppointment(Request $request){
        // dd($request);
        $data = Appointments::store($request);
        $data = schedule::updateStatus($request);
        return redirect()->route('patient#home');
    }

    public function bookingList(){
       $data = Appointments::list();
        return view('user.patient.bookingList', compact('data'));
    }
}
