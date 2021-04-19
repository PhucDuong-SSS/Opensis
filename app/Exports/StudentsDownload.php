<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StudentsDownload implements WithHeadings {

    public function headings(): array
    {
        // TODO: Implement headings() method.
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
}

