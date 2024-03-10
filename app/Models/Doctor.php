<?php

namespace App\Models;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;

      protected $fillable = [
        'user_id',
        'specialization'
      ];

      public static function store($input){

        $data = self::create([
              'user_id' => $input->userId,
              'specialization' => $input->specialization
        ]);
         return $data;
      }

      public static function list(){
        $data = self::select('doctors.id','users.image','doctors.specialization','doctors.user_id','users.name as name')
        ->leftJoin('users','users.id','doctors.user_id')
        ->orderBy('doctors.user_id','asc')
        ->whereIn('doctors.id', function($query) {
            $query->select(Doctor::raw('MIN(doctors.id)'))
                ->from('doctors')
                ->groupBy('doctors.specialization');
        })
        ->get();
        return $data;
      }
}
