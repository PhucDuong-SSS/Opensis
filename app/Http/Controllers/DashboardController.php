<?php

namespace App\Http\Controllers;

use App\Http\Services\StudentService;
use App\Http\Services\UserService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    protected $studentService;
    protected $userService;

//    public function __construct(StudentService $studentService)
//    {
//        $this->studentService = $studentService;
//    }

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function showDashboard()
    {
        $users = $this->userService->getAll();
//        $students = $this->studentService->getAll();
        return view('admin.layout.dashboard', compact('users'));
    }
}
