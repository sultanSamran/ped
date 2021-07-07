<?php

namespace App\Models;

use App\Models\Exam;
use Illuminate\Database\Eloquent\Model;

class Exam_grades extends Model
{
   
    protected $fillable = ['exam_id', 'student_id' , 'grade'];

    
}


