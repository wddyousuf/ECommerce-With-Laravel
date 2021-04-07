<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Model\Order;
use App\Model\OrderDetail;
use App\Model\Product;
use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
    public function viewpending(){
        $data=Order::where('status','0')->get();
        return view('backend.orders.pending',compact('data'));
    }
    public function approve($id){

        DB::transaction(function () use($id){
            $data=Order::find($id);
            $data->status='1';
            $data->save();
            $trig=OrderDetail::where('order_no', $data->id)->get();
            foreach ($trig as  $value) {
                $item=Product::where('id', $value->product_id)->first();
                $item->stock=$item->stock-$value->qty;
                $item->save();
            }

        });
        return redirect()->route('approved')->with('success', 'Order Approved Successfully');
    }
    public function cancel($id){
        $data=Order::find($id);
        $data->status='-1';
        $data->save();
        return redirect()->back()->with('success','Order Cancelled Successfully');
    }
    public function picked($id){
        $data=Order::find($id);
        $data->status='2';
        $data->save();
        return redirect()->back()->with('success','Order Status Changed to Picked Successfully');
    }
    public function shipped($id){
        $data=Order::find($id);
        $data->status='3';
        $data->save();
        return redirect()->back()->with('success','Order Status Changed to Shipped Successfully');
    }
    public function delivered($id){
        $data=Order::find($id);
        $data->status='4';
        $data->save();
        return redirect()->back()->with('success','Order Status Changed to Delivered Successfully');
    }
    public function viewapproved(){
        $data=Order::where('status','1')->get();
        return view('backend.orders.approved',compact('data'));
    }
    public function invoice($id){
        $data=Order::find($id);
        return view('backend.orders.invoice',compact('data'));
    }
}
