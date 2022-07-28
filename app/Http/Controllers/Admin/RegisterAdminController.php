<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use DB;

class RegisterAdminController extends Controller

{
    public function registerAdmin(Request $request)
    {
        $validated = $request->validate([
            'email'=>'required|unique:user|max:255',
            'name'=>'required',
            'password'=>'required',
            'confirm_password' => 'required'
        ]);
        $params = $request->all();
        if($params['password'] != $params['confirm_password']){
            return 'Khac nhau';
        }
        DB::table('user')->insert([
            'name' => $params['name'],
            'email' => $params['email'],
            'password' => Hash::make($params['password'])
        ]);
        return 'Dang ki thanh cong';
    }
}
