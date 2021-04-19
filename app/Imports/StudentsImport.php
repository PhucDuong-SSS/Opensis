<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class StudentsImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return Student
     */
    public function model(array $row)
    {
        return new Student([
            'id' => $row[0],
            'name'     => $row[1],
            'gender'    => $row[2],
            'date'    => $row[3],
            'birthplace'    => $row[4],
            'address'    => $row[5],
            'father_name'    => $row[6],
            'father_phone'    => $row[7],
            'mother_name'    => $row[8],
            'mother_phone' => $row[9],
//            'image' => $row[10],
        ]);
    }

    public function startRow(): int
    {
        // TODO: Implement startRow() method.
        return 2;
    }
}
