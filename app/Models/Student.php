<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded=[];
 
    public function Courses(){
        return $this->belongsTo(Course::class,'course_id');
    }
 
    public function Attendances(){
        return $this->hasMany(Attendance::class,'student_id');
    }
}
