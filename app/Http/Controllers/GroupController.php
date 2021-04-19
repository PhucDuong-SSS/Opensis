<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGroup;
use App\Http\Services\GradeService;
use App\Http\Services\GroupService;
use App\Http\Services\SchoolYearService;
use App\Models\Grade;
use App\Models\Group;
use App\Models\SchoolYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GroupController extends Controller
{
    protected $groupService;
    protected $schoolYearService;
    protected $gradeService;

    public function __construct(GroupService $groupService,
                                SchoolYearService $schoolYearService,
                                GradeService $gradeService)
    {
        $this->groupService = $groupService;
        $this->schoolYearService = $schoolYearService;
        $this->gradeService = $gradeService;
    }

    public function index()
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $groups = $this->groupService->getAll();
        return view('admin.group.list', compact('groups'));
    }


    public function create()
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $schoolYears = $this->schoolYearService->getAll();
        $grades = $this->gradeService->getAll();
        return view('admin.group.add', compact('schoolYears','grades'));
    }

    public function store(CreateGroup $request)
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $group = new Group();
        $group->fill($request->all());
        $group->save();
        return redirect()->route('group.index')->with('message_toastr','Thêm mới thành công!');
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
        $schoolYears = SchoolYear::all();
        $grades = Grade::all();
        $group = $this->groupService->findById($id);
        return view('admin.group.edit', compact('group', 'grades', 'schoolYears'));
    }

    public function update(Request $request, $id)
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $group = $this->groupService->findById($id);
        $this->groupService->add($request, $group);
        return redirect()->route('group.index')->with('message_toastr','Cập nhật thành công!');
    }

    public function destroy($id)
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $group = $this->groupService->findById($id);
        $this->groupService->delete($group);
        return redirect()->route('group.index')->with('message_toastr','Xoá thành công!');
    }
}
