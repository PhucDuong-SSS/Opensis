<?php

namespace App\Http\Controllers;

use App\Http\Services\SchoolYearService;
use App\Models\SchoolYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SchoolYearController extends Controller
{
    protected $schoolYearService;

    public function __construct(SchoolYearService  $schoolYearService)
    {
        $this->schoolYearService = $schoolYearService;
    }

    public function index()
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $schoolYears = $this->schoolYearService->getAll();
        return view('admin.year.list', compact('schoolYears'));
    }

    public function create()
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        return view('admin.year.add');
    }

    public function store(Request $request)
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $year = new SchoolYear();
        $year->fill($request->all());
        $year->save();
        return redirect()->route('year.index')->with('message_toastr','Thêm mới thành công!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $year = SchoolYear::findOrFail($id);
        return view('admin.year.edit', compact('year'));
    }

    public function update(Request $request, $id)
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $year = SchoolYear::findOrFail($id);
        $year->fill($request->all());
        $year->save();
        return redirect()->route('year.index')->with('message_toastr','Cập nhật thành công!');
    }

    public function destroy($id)
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $year = SchoolYear::findOrFail($id);
        $year->groups()->update(['school_year_id' => null]);
        $year->delete();
        return redirect()->route('year.index')->with('message_toastr','Xoá thành công!');
    }
}
