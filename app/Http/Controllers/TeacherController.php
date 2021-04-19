<?php

namespace App\Http\Controllers;

use App\Http\Services\TeacherService;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    protected $teacherService;

    public function __construct(TeacherService $teacherService)
    {
        $this->teacherService = $teacherService;
    }

    public function index()
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $teachers = $this->teacherService->getAll();
        return view('admin.teacher.list', compact('teachers'));
    }


    public function create()
    {
        if (!$this->userCan('admin')) {
            abort(403);
        }
        return view('admin.teacher.add');
    }

    public function store(Request $request)
    {
        if (!$this->userCan('admin')) {
            abort(403);
        }
        $teacher = new Teacher();
        $teacher->fill($request->all());
        $this->uploadImage($teacher, $request);
        $teacher->save();
        return redirect()->route('teachers.index')->with('message_toastr','Thêm mới thành công!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        if (!$this->userCan('admin')) {
            abort(403);
        }
        $teacher = $this->teacherService->findById($id);
        return view('admin.teacher.edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        if (!$this->userCan('admin')) {
            abort(403);
        }
        $teacher = $this->teacherService->findById($id);
        $teacher->fill($request->all());
        $this->uploadImage($teacher, $request);
        $teacher->save();
        return redirect()->route('teachers.index')->with('message_toastr','Cập nhật thành công!');
    }

    public function destroy($id)
    {
        if (!$this->userCan('admin')) {
            abort(403);
        }
        $teacher = $this->teacherService->findById($id);
        $this->teacherService->delete($teacher);
        return redirect()->route('teachers.index')->with('message_toastr','Xoá thành công!');
    }
}
