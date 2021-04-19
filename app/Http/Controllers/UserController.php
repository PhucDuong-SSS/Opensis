<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUser;
use App\Http\Services\UserService;
use App\Models\Role;
use App\Models\StatusConstant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $users = User::all();
        return view('admin.users.list', compact('users'));
    }

    public function create()
    {
        if (!$this->userCan('admin')) {
            abort(403);
        }
        $users = User::all();
        $roles = Role::all();
        return view('admin.users.add', compact('roles', 'users'));
    }

    public function store(CreateUser $request)
    {
        if (!$this->userCan('admin')) {
            abort(403);
        }
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role_id = $request->role_id;
        $user->status = StatusConstant::ACTIVATE;
        $this->uploadImage($user, $request);
        $user->save();
        return redirect()->route('user.index');
    }

    public function show($id)
    {
        $users = $this->userService->getAll();
        $user = $this->userService->findById($id);
        return view('admin.users.profile', compact('user', 'users'));
    }

    public function indexProfile()
    {
        $users = $this->userService->getAll();
        return view('admin.layout.core.main_sider', compact( 'users'));
    }

    public function showUser($id)
    {
        $users = $this->userService->getAll();
        $user = $this->userService->findById($id);
        return view('admin.users.userProfile', compact('user', 'users'));
    }

    public function indexUserProfile()
    {
        $users = $this->userService->getAll();
        return view('admin.layout.core.main_sider', compact( 'users'));
    }
    public function edit($id)
    {
        if (!$this->userCan('admin')) {
            abort(403);
        }
        $roles = Role::all();
        $user = $this->userService->findById($id);
        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        if (!$this->userCan('admin')) {
            abort(403);
        }
        $roles = Role::all();
        $user = $this->userService->findById($id);
        $user->fill($request->all());
        $this->uploadImage($user, $request);
        $user->save();
        return redirect()->route('user.index', compact('roles'));
    }

    public function destroy($id)
    {
        if (!$this->userCan('admin')) {
            abort(403);
        }
        $user = $this->userService->findById($id);
        $user->delete();
        return redirect()->route('user.index');
    }

    public function changeStatus(Request $request, $id) {
        if (!$this->userCan('admin-caa')) {
            abort(403);
        }
        $user = $this->userService->findById($id);
        $this->userService->update($request, $user);
    }

}
