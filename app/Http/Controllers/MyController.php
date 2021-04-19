<?php

namespace App\Http\Controllers;

use App\Exports\StudentsDownload;
use App\Exports\StudentsExport;
use Illuminate\Http\Request;
use App\Imports\StudentsImport;
use Maatwebsite\Excel\Facades\Excel;

class MyController extends Controller
{
//    public function importExportView()
//    {
//        return view('import');
//    }

    public function export()
    {
        return Excel::download(new StudentsExport, 'users.xlsx');
    }

    public function import()
    {
        Excel::import(new StudentsImport,request()->file('file'));

        return back();
    }

    public function download()
    {
        return Excel::download(new StudentsDownload, 'users.xlsx');
    }
}
