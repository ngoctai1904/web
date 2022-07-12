<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function loginUser(Request $request)
   {
      $check = $request->only(['email', 'password']);
      $remember = false;
      if (Auth::attempt($check, $remember)) {
         $user = Auth::user();
         // dd($user);
         return back();
   }
}
}
