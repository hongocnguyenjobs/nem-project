<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class AdminController extends Controller
{
    public function loginPost(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        } else {
            echo "Lỗi"; exit;
        }
    }

    public function dashboard() {
        $adminUser = Auth::guard('admin')->user();
        return view('admin.dashboard',['user'=>$adminUser]);
    }

    public function statistics() {
        $adminUser = Auth::guard('admin')->user();
        return view('admin.statistics',['user'=>$adminUser]);
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
