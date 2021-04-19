<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGrade;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{

    public function index()
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $grades = Grade::all();
        return view('admin.grade.list', compact('grades'));
    }


    public function create()
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        return view('admin.grade.add');
    }


    public function store(CreateGrade $request)
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $grade = new Grade();
        $grade->fill($request->all());
        $grade->save();
        return redirect()->route('grade.index')->with('message_toastr','Thêm mới thành công!');
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
        $grade = Grade::findOrFail($id);
        return view('admin.grade.edit', compact('grade'));
    }


    public function update(Request $request, $id)
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $grade = Grade::findOrFail($id);
        $grade->fill($request->all());
        $grade->save();
        return redirect()->route('grade.index')->with('message_toastr','Cập nhật thành công!');
    }

    public function destroy($id)
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $grade = Grade::findOrFail($id);
        $grade->groups()->update(['grade_id' => null]);
        $grade->delete();
        return redirect()->route('grade.index')->with('message_toastr','Xoá thành công!');
    }
}
