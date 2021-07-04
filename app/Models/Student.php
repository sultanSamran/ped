<?php

namespace App\Models;

use App\Models\Exam;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [];

    public function exams()
    {
        return $this->belongsToMany('App\Models\Exam' , 'Exam_grades');
    }
}
