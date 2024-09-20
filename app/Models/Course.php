<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded=[];
 
    public function Teacher(){
        return $this->belongsTo(Teacher::class,'teacher_id');
    }
 
    public function Attendances(){
        return $this->hasMany(Attendance::class,'course_id');
    }

    public function Students(){
        return $this->hasMany(Student::class,'course_id');
    }
}
