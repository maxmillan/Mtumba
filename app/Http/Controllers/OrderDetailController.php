<?php

namespace App\Http\Controllers;

use App\CompleteOrder;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index(){
        $orderDetails = CompleteOrder::where('user_id',auth()->user()->id)->get();
        return view('orderDetails',[
            'orderDetails'=>$orderDetails
        ]);
    }
}
