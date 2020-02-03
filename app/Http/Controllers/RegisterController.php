<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request){


        $register = new User();
        $register->first = $request->input('first');
        $register->last = $request->input('last');
        $register->phone = $request->input('phone');
        $register->email = $request->input('email');
        $register->role = $request->input('role');
        $register->password = Hash::make($request->input('password'));
        $register->save();

        return view('auth.login')->with('success','Registered Successfully, Please Login');


    }


}
