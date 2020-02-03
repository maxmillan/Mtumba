<?php

namespace App\Http\Controllers;

use App\FrontPagePicture;
use Illuminate\Http\Request;

class indexpageController extends Controller
{
    public function index(){

        $pics = FrontPagePicture::all();

        return view('homePage',[
            'pics'=>$pics
        ]);
    }
}
