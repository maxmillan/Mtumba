<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginOneController extends Controller
{
    public function index(){
        return view('auth.loginCustom');
    }
    public function login(Request $request)
    {

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            $user = User::where('email', $request->email)->first();

            if ($user->role == 1) {
                return redirect()->route('admin');

            } elseif ($user->role == 2) {
                return redirect()->route('millan');
            }

            else{
                return redirect(url('/'));
            }



        }
    }
}
