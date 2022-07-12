<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginAdminController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.auth.login');
    }

    public function sendLogin(Request $request)
    {
        $check = $request->only(['email', 'password']);
        $remember = false;
        if (Auth::attempt($check, $remember)) {
            $user = Auth::user();
        }
        if(isset($user) && $user->role_id == 2){
            return view('admin.home');
        }
        return back();
    
    }
}
