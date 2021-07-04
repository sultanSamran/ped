<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getStudentGrades()
    {
        // $student = Student::find(3);
        // $student -> grades;

        // return $student -> exams;

        $student = Student::with('exams')->find(3);

        return $student -> firstname;
    }
}
