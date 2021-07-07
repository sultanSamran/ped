<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class ExcelImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach($collection as $key => $value)
        {
            // dd($key.$value);
            if($key > 0 )
            {
                 //dd($key,$value);
                DB::table('exam_grades')->insert(
                    [
                        'exam_id' => $value[0] , 
                        'student_id' => $value[1] ,
                        'grade' => $value[2] ,
                    
                    ]);
            }
        }
    }
}
