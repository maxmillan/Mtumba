<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminIndexController extends Controller
{
    public function index(Request $request){
        if (auth()->check() && $request->user()->role == 1){
            return view('admin.index');

        }
        else{
            return view('authError');
        }
    }
}
