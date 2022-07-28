<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use DB;
use App\Models\User;
use Hash;

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

    public function register(Request $request)
    {
        $data = $request->except('_token');
        $isExitsUser = DB::table('users')->where('email', $data['email'])->get()->isNotEmpty();

        if($isExitsUser) {
            return back()->with('error', 'Email registed!');
        }
        $data['password'] = Hash::make($data['password']);
        $data['role_id'] = User::ROLE_ADMIN;
        User::create($data);

        return redirect(route('admin.auth.login'));
    }
}
