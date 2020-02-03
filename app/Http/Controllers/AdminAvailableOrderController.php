<?php

namespace App\Http\Controllers;

use App\AvailableOrder;
use App\CompleteOrder;
use App\FrontPagePicture;
use Cassandra\Session;
use Illuminate\Http\Request;

class AdminAvailableOrderController extends Controller
{
    public function index($id){
        $getUserIds = AvailableOrder::where('user_id',$id)->get();

        foreach ($getUserIds as $getUserId){
            $getUser = $getUserId->user_id;
        }
        $availableOrders = AvailableOrder::where('user_id',$getUser)->get();
        return view('admin.availableOrders',[
            'availableOrders'=>$availableOrders
        ]);
    }
    public function table(){
        $getOrders = AvailableOrder::all()->unique('user_id');
        return view('admin.availableOrderTable',[
            'getOrders'=>$getOrders
        ]);
    }
    public function deleteOrder(Request $request){
        $moveAvailableOrders = AvailableOrder::where('user_id',$request->userId)->get()->toArray();
        foreach ($moveAvailableOrders as $moveAvailableOrder){
            CompleteOrder::insert($moveAvailableOrder);
        }
        $deleteAvailableOrder = AvailableOrder::where('user_id',$request->userId)->delete();
        $deletePicture = FrontPagePicture::where('id',$request->pictureId)->delete();

        return redirect()->route('admin')->with('success','Order Successfully Delivered');
    }
}
