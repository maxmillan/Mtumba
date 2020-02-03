<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorIndexController extends Controller
{
    public function index(Request $request){
        if (auth()->check() && $request->user()->role == 2){
            return view('vendor.vendorIndex');

        }
        else{
            return view('authError');
        }
    }
}
