<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateProductController extends Controller
{
    public function index(){
        return view('vendor.createProduct');
    }
}
