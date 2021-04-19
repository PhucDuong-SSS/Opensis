<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StudentsExport implements FromCollection,WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Student::all();
    }

    public function headings(): array {
        return [
            'ID',
            'Name',
            'Gender',
            "Date",
            "Birthplace",
            "Address",
            "Father Name",
            "Father Phone",
            "Mother Name",
            "Mother Phone",
            "Image",
        ];
    }

    public function map($student): array {
        return [
            $student->id,
            $student->name,
            $student->gender,
            $student->date,
            $student->birthplace,
            $student->address,
            $student->father_name,
            $student->father_phone,
            $student->mother_name,
            $student->mother_phone,
            $student->image,
        ];
    }
}
