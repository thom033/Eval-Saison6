<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Admin;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('/admin/login');
    }

    public function showRegisterForm()
    {
        return view('/admin/register');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('login', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            $admin = Auth::guard('admin')->user();
            return view('admin.welcome', compact('admin'));
        }

        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'login' => 'required|string|max:255|unique:admin',
            'password' => 'required|string',
        ]);

        $admin = new Admin();
        $admin->login = $request->login;
        $admin->password = bcrypt($request->password);
        $admin->save();

        return redirect('/');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
