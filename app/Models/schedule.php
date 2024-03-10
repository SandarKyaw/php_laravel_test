<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'status',
        'start_time',
        'end_time'
    ];

    public static function store($input){
        $data = self::create([
            'doctor_id' => $input->doctorId,
            'start_time' => $input->startTime,
            'end_time' => $input->endTime,
        ]);

        return $data;
    }

    public static function index(){
        $data = self::select('users.name','doctors.specialization','schedules.start_time','schedules.id','schedules.end_time','schedules.status')
        ->leftJoin('doctors','doctors.id','schedules.doctor_id')
        ->leftJoin('users','users.id','doctors.user_id')
        ->get();

        return $data;
    }

    public static function updateStatus($input){
        $scheduleId = $input->section;
        $data = self::where('id',$scheduleId)
        ->update([
            'status' => 1,
        ]);

    }
}
