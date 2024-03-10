<?php

namespace App\Http\Controllers;

use App\Models\schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    //list
    public function list(){
        $data = schedule::index();
        return view('user.doctor.listSchedule', compact('data'));
    }

     //list
    public function viewSchedule(){
        $data = schedule::index();
        return view('user.patient.viewSchedule', compact('data'));
    }
}
