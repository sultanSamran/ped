<?php

namespace App\Http\Controllers;

use DB;
use Excel;
use App\Models\Exam;
use App\Models\Student;
use App\Models\Exam_grades;
use App\Imports\ExcelImport;
use App\Models\exam_student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function index()
    {
        // $data = DB::table('exam_grades')->orderBy('student_id', 'DESC')->get();
        $exams = exam_student::all();
        $exam = Exam::all();
        return view('grades.index' , compact('exams','exam'));  
    }
    public function upload()
    {
        return view('grades.upload');   
    }

    public function import(Request $request)
    {
        // return 'ok';
        // $validation = Validator::make($request->all(),[
        //     'attachment' => 'required|mimes:xlsx,xls'
        // ]);

        // if($validation->fails())
        // {
        //     return 'ok';
        // }
        // return $request->all();  
        
        
        // $this->validate($request,[
        //     'attachment' => 'required|mimes:xls,xlsx'
        // ]);
        
        $file = $request->file;
        // dd($file);
        Excel::import(new ExcelImport, $file);

        return back();

        // $path = $request->file('attachment')->getRealPath();

        // $data= Excel::import($path)->get();

        // if($data->count() > 0)
        // {
        //     foreach($data->toArray() as $key => $value)
        //     {
        //         foreach($value as $row)
        //         {
        //             $insert_data[] = array(
        //                 'exam_id'   =>  $row['exam_id'],
        //                 'student_id' => $row['student_id'],
        //                 'grade' => $row['grade'],

        //             );
        //         }
        //     }

        //     if(!empty($insert_data))
        //         {
        //             DB::table('exam_grades')->insert('$insert_data');

        //         }

        // }
        // return back()->with('success', 'Excel Data Imported');

    }


    
}
