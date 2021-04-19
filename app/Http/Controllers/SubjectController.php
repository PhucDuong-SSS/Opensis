<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubjectRequest;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Services\SubjectService;

class SubjectController extends Controller
{
    protected $subjectService;
    public function __construct(SubjectService $subjectService)
    {
        $this->subjectService = $subjectService;
    }

    public function index()
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $subjects =$this->subjectService->getAll();
        return view('admin.subject.list', compact('subjects'));
    }

    public function store(SubjectRequest $request)
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $subject = new Subject();
        $subject->name = $request->name;
        $subject->period = $request->period;
        $subject->coefficient = $request->coefficient;
        $subject->save();
        return redirect()->route('subject.index')->with('message_toastr', 'Thêm mới thành công!');

    }
    public function destroy($id)
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $student = $this->subjectService->findById($id);
        $this->subjectService->delete($student);
        return redirect()->route('subject.index')->with('message_toastr', 'Xoá thành công!');
    }

    public function edit($id)
    {
        $subject = $this->subjectService->findById($id);
        return view('admin.subject.edit', compact('subject'));
    }

    public function update(SubjectRequest $request, $id)
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $subject = $this->subjectService->findById($id);
        $this->subjectService->update($request, $subject);
        return redirect()->route('subject.index')->with('message_toastr','Cập nhật thành công!');
    }


}
