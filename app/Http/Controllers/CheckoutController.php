<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\About;
use App\Model\Color;
use App\Model\Communicate;
use App\Model\Contact;
use Auth;
use App\Model\Logo;
use App\Model\Order;
use App\Model\OrderDetail;
use App\Model\Payment;
use App\Model\Product;
use App\Model\ProductSize;
use App\Model\Shipping;
use App\Model\Size;
use App\Model\Slider;
use App\User;
use Cart;
use DB;
use Illuminate\Support\Facades\Redirect;
use Mail;
use Session;


class CheckoutController extends Controller
{
    public function checkout(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['contact']=Contact::first();
        $data['category']=Product::select('cat_id')->groupBy('cat_id')->get();
        $data['subcategory']=Product::select('subcat_id')->groupBy('subcat_id')->get();
        $data['subsubcategory']=Product::select('subsubcat_id')->groupBy('subsubcat_id')->get();
        return view('frontend.pages.checkout',$data);
    }
    public function checkoutbill(Request $request){

            $this->validate($request,[
                'email'=>'unique:users,email',
                'mobile'=>['unique:users,number',
                'regex:/(^(\+8801|8801|01|008801))[1|3-9]{1}(\d){8}$/']
            ]);
        $data=new Shipping();
        $data->user_id=Auth::user()->id;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->number=$request->number;
        $data->address=$request->address;
        $data->save();
        Session::put('shipping_id', $data->id);
        return redirect()->route('payment')->with('success','Billing Information Saved Successfully.');
    }
    public function payment(Request $request){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['contact']=Contact::first();
        $data['category']=Product::select('cat_id')->groupBy('cat_id')->get();
        $data['subcategory']=Product::select('subcat_id')->groupBy('subcat_id')->get();
        $data['subsubcategory']=Product::select('subsubcat_id')->groupBy('subsubcat_id')->get();
        return view('frontend.pages.payment',$data);
}
public function paymentstore(Request $request){
    if($request->product_id==NULL){
        return redirect()->back()->with('message','Please Add minimum One product to checkout');
    }else{
        $this->validate($request,[
            'method'=>'required'
        ]);
        if($request->method!=cod && $request->tran== NULL){
            return redirect()->back()->with('message','Please include Transaction Number');
        }

        DB::transaction(function() use($request){
            $pay=new Payment();
            $pay->method=$request->method;
            $pay->transaction_no=$request->tran;
            $pay->save();
            $order=new Order();
            $order->user_id=Auth::user()->id;
            $order->shipping_id=Session::get('shipping_id');
            $order->payment_id=$pay->id;
            $order->amount=$request->amount;
            $order->status='0';
            $order_data=Order::orderBy('id','desc')->first();
            if($order_data == NULL){
                $first_reg='0';
                $order_no=$first_reg+1;
            }else{
                $order_data=Order::orderBy('id','desc')->first()->order_no;
                $order_no=$order_data+1;
            }
            $order->order_no=$order_no;
            $order->save();
            $contents=Cart::content();
            foreach ($contents as  $value) {
                $con=new OrderDetail();
                $con->order_no=$order->id;
                $con->product_id=$value->id;
                $con->color_id=$value->options->color_id;
                $con->size_id=$value->options->size_id;
                $con->qty=$value->qty;
                $con->save();
            }
        });
        Cart::destroy();
            $data['logo']=Logo::first();
            $data['sliders']=Slider::all();
            $data['contact']=Contact::first();
            $data['category']=Product::select('cat_id')->groupBy('cat_id')->get();
            $data['subcategory']=Product::select('subcat_id')->groupBy('subcat_id')->get();
            $data['subsubcategory']=Product::select('subsubcat_id')->groupBy('subsubcat_id')->get();
        return view('frontend.pages.success',$data)->with('success','Order Placed Successfully');
    }


}
}
