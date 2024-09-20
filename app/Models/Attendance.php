<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $guarded=[];
 
    public function Student(){
        return $this->belongsTo(Student::class,'student_id');
    }

    public function Course(){
        return $this->belongsTo(Course::class,'course_id');
    }

    public function Stat(){
        return $this->belongsTo(Stat::class,'stat_id');
    }
 

}
