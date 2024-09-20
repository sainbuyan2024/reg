<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    use HasFactory;
    protected $guarded=[];
 
    public function Attendances(){
        return $this->hasMany(Attendance::class,'stat_id');
    }
}
