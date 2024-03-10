<?php

namespace App\Models;

use App\Models\Appointments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointments extends Model
{
    use HasFactory;

     protected $fillable = [
        'doctor_id',
        'patient_id',
        'appointment_Date',
        'schedule_id',
        'status'
     ];

     public static function store($input){
        $data = self::create([
            'doctor_id' => $input->doctorId,
            'patient_id' => auth()->user()->id,
            'schedule_id' => $input->section*1,
            'appointment_Date' => $input->date,
        ]);
        return $data;
     }

     //for doctor site
     public static function index($input){
        $data = self::select('appointments.patient_id as userId','users.name as userName','appointments.doctor_id as doctorId','appointments.id as Id','appointments.status as status',
        'schedules.end_time as endTime','schedules.start_time as startTime','appointments.appointment_Date as date')
        ->leftJoin('doctors','doctors.id','appointments.doctor_id')
        ->leftJoin('schedules','schedules.id','appointments.schedule_id')
        ->leftJoin('users','users.id','appointments.patient_id')
        ->where('doctors.user_id', $input)
        ->get();
        return $data;
     }

     //for patient
      public static function list(){
        $data = self::select('appointments.patient_id as userId','users.name as userName','appointments.doctor_id as doctorId','appointments.id as Id','appointments.status as status',
        'schedules.end_time as endTime','schedules.start_time as startTime','appointments.appointment_Date as date')
        ->leftJoin('doctors','doctors.id','appointments.doctor_id')
        ->leftJoin('schedules','schedules.id','appointments.schedule_id')
        ->leftJoin('users','users.id','appointments.patient_id')
        ->get();
        return $data;
     }

}
