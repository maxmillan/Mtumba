<?php

namespace App\Http\Controllers;

use App\Checkout;
use Illuminate\Http\Request;

class checkoutController extends Controller
{
    public function index(){
        if (auth()->check()){
            $checkouts = Checkout::all();
            $getTotals = Checkout::where('user_id',auth()->user()->id)->get();
            $sum = 0;
            foreach ($getTotals as $getTotal){
                $total = $getTotal->cart->picture->price;
                $sum +=$total;
            }
            return view('checkout',[
                'checkouts'=>$checkouts,
                'sum'=>$sum
            ]);
        }
        else{
            return redirect(url('login@Custom'));
        }

    }

}
