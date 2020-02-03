<?php

namespace App\Http\Controllers;

use App\FrontPagePicture;
use Illuminate\Http\Request;

class MyProductController extends Controller
{
    public function index(){
        $sellerProducts = FrontPagePicture::where('user_id',auth()->user()->id)->get();
        return view('vendor.myProducts',[
            'sellerProducts'=>$sellerProducts
        ]);
    }
}
