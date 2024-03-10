<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function adminDashboard(){
        $data = Doctor::list();
        // dd($data);
        return view('admin.adminDashboard',compact('data'));
    }

    public function userList(){
        $data = User::userList();
        return view('admin.userList',compact('data'));
    }

}
