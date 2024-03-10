<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //create page
    public function createPage(){
        return view('admin.doctor.createDoctorPage');
    }

    //create doctor
    public function create(Request $request){
        // dd($request);
       $data = Doctor::store($request);
        User::roleChange($request);
        return redirect()->route('admin#dashBoard');
    }

    //doctor list
   
}
