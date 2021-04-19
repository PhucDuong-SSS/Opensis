<?php

namespace App\Http\Controllers;

use App\Models\StatusConstant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('admin.layout.login');
    }

    public function login(Request $request)
    {
        $user = [
            'username' => $request->username,
            'password' => $request->password,
            'status' => StatusConstant::ACTIVATE,
        ];

        if (!Auth::attempt($user)) {
            return redirect()->route('login')->with('login-error', 'Tài khoản hoặc mật khẩu không đúng!');
        } else {
            return redirect()->route('admin.dashboard');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
