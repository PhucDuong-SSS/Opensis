<?php

namespace App\Http\Controllers;

use App\Http\Services\StudentService;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $studentService;

    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }

    public function index()
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $students = $this->studentService->getAll();
        return view('admin.student.list', compact('students'));
    }


    public function create()
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        return view('admin.student.add');
    }

    public function store(Request $request)
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $student = new Student();
        $student->fill($request->all());
        $this->uploadImage($student, $request);

        $student->save();
        return redirect()->route('students.index')->with('message_toastr', 'Thêm mới thành công!');
    }

    public function show($id)
    {
        $students = $this->studentService->getAll();
        $student = $this->studentService->findById($id);
        return view('admin.student.profile', compact('student', 'students'));
    }

    public function indexProfile()
    {
        $students = $this->studentService->getAll();
        return view('admin.layout.core.main_sider', compact('students'));
    }

    public function showProfile($id)
    {
        $students = $this->studentService->getAll();
        $student = $this->studentService->findById($id);
        return view('admin.layout.core.main_sider', compact('student', 'students'));
    }

    public function edit($id)
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $student = $this->studentService->findById($id);
        return view('admin.student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $student = $this->studentService->findById($id);
        $student->fill($request->all());
        $this->uploadImage($student, $request);
        $student->save();
        return redirect()->route('students.index')->with('message_toastr', 'Cập nhật thành công!');
    }

    public function destroy($id)
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $student = $this->studentService->findById($id);
        $this->studentService->delete($student);
        return redirect()->route('students.index')->with('message_toastr', 'Xoá thành công!');
    }
}
