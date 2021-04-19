<?php

namespace App\Http\Controllers;

use App\Http\Services\GroupService;
use App\Http\Services\TeacherService;
use App\Models\GroupAssigning;
use App\Models\Group;
use App\Models\Teacher;
use Illuminate\Http\Request;

class GroupAssigningController extends Controller
{
    protected $teacherService;
    protected $groupService;

    public function __construct(TeacherService $teacherService,
                                GroupService $groupService)
    {
        $this->teacherService = $teacherService;
        $this->groupService = $groupService;
    }

    public function index()
    {
        $groupAssignings = GroupAssigning::all();
        $teachers = $this->teacherService->getAll();
        $groups = $this->groupService->getAll();
        return view('admin.classificationTeacherGroup.list', compact('teachers', 'groups', 'groupAssignings'));
    }
}
