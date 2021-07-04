<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [];
    protected $hidden = [];

    public function students()
    {
        return $this->belongsToMany('App\Models\Student' , 'Exam_grades');
    }

}
