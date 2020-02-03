<?php

namespace App\Http\Controllers;

use App\Available;
use App\AvailableOrder;
use App\Cart;
use App\Checkout;
use App\confirmationReceipt;
use App\ConfirmationReciept;
use Illuminate\Http\Request;

class confirmationRecieptController extends Controller
{
    public function index($id){
        $confirmOrders = ConfirmationReciept::where('id',$id)->first();
        return view('confirmation',[
            'confirmOrders'=>$confirmOrders
        ]);
    }


    public function placeOrder(Request $request){

        $getCheckout = Checkout::where('user_id',auth()->user()->id)->get()->toArray();
        foreach ($getCheckout as $moveItem){
            AvailableOrder::insert($moveItem);
            ConfirmationReciept::insert($moveItem);
        }
        $deleteCheckout = Checkout::where('user_id',auth()->user()->id)->delete();
        $deleteCart = Cart::where('user_id',auth()->user()->id)->delete();

        return redirect()->route('homepage')->with('success','Order Recieved, Will contact you as soon as possible');

    }
}
