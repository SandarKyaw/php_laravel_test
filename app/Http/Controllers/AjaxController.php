<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\schedule;
use App\Models\Appointments;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //doctor for specialization
    public function doctorForSpecial(Request $request){
        logger($request->all());
         $doctors = Doctor::select('users.name', 'doctors.id')->where('specialization', $request->specialization)
         ->leftJoin('users','users.id','doctors.user_id')
         ->get();
        return response()->json($doctors, 200);
    }

    //section for each doctor
    public function sectionByDoctor(Request $request){
        // logger($request->all());
        $sections = schedule::select('start_time','end_time','status','id')
                    ->where('doctor_id', $request->id)
                    ->where('status','0')
                    ->get();
                    logger($sections);
        return response()->json($sections, 200);
    }

    //status change by doctor

     public function changeStatus(Request $request){
        $scheduleId = $request->id;
        $status = $request->status;

        $data = Appointments::where('id', $scheduleId)
        ->update([
            'status' => $status,
        ]);
          return response()->json($status, 200);
     }
}
