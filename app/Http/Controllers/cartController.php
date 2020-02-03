<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Checkout;
use Hamcrest\Core\IsNull;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function index(){
        $carts = Cart::all();
        $getTotals = Cart::where('user_id',auth()->user()->id)->get();
        $sum =0;
        foreach ($getTotals as $getTotal){
            $total = $getTotal->picture->price;
            $sum += $total;

        }
        return view('cart',[
            'carts'=>$carts,
            'sum'=>$sum
        ]);
    }
    public function cartDelete($id){


        $cartDelete = Cart::find($id);
        $findCartID = Checkout::where('cart_id',$id)->delete();
        $cartDelete->delete();

        $maxs = Cart::all();
        if ($maxs->count()==0){
            return redirect()->route('category');
        }
        else{
            return redirect()->back();
        }

    }
    public function cartCount(){
        $maxs = Cart::all();
        foreach ($maxs as $max){
            $userId = ($max->picture->user_id);

            $cartCount = Cart::where($userId,auth()->user()->id)->count();
        }
        dd($cartCount);
    }
}
