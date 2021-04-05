<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Model\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function viewpending(){
        $data=Order::where('status','0')->get();
        return view('backend.orders.pending',compact('data'));
    }
    public function approve($id){
        $data=Order::find($id);
        $data->status='1';
        $data->save();
        return redirect()->route('approved')->with('success','Order Approved Successfully');
    }
    public function viewapproved(){
        $data=Order::where('status','1')->get();
        return view('backend.orders.approved',compact('data'));
    }
}
