<?php

namespace App\Models;

use App\Models\Exam_grades;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [];
    protected $hidden = [];

    // public function student()
    // {
    //     return $this->belongToMany('App\Models\Student');
    // }

}
