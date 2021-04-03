<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\About;
use App\Model\Color;
use App\Model\Communicate;
use App\Model\Contact;
use Auth;
use App\Model\Logo;
use App\Model\Product;
use App\Model\ProductSize;
use App\Model\Size;
use App\Model\Slider;
use App\User;
use Cart;
use DB;
use Mail;
class CustomerController extends Controller
{
    public function login(){
        $data['logo']=Logo::first();
        $data['contact']=Contact::first();
        $data['category']=Product::select('cat_id')->groupBy('cat_id')->get();
        $data['subcategory']=Product::select('subcat_id')->groupBy('subcat_id')->get();
        $data['subsubcategory']=Product::select('subsubcat_id')->groupBy('subsubcat_id')->get();
        return view('frontend.pages.login',$data);
    }
    public function signup(Request $request){



        DB::transaction(function () use($request){
            $this->validate($request,[
                'email'=>'unique:users,email',
                'mobile'=>['unique:users,number',
                'regex:/(^(\+8801|8801|01|008801))[1|3-9]{1}(\d){8}$/']
            ]);
        $data=new User();
        $code=rand(000000,999999);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->number=$request->number;
        $data->password=bcrypt($request->password1);
        $data->code=$code;
        $data->status='0';
        $data->role='customer';
        $data->save();

        $emailss=array(
            'name'=> $request->name,
            'email'=> $request->email,
            'number'=> $request->mobile_no,
            'code'=> $code
        );
        Mail::send('frontend.emails.verifyuser', $emailss, function ($message) use($emailss) {
            $message->from('shopniktuition@gmail.com', 'Shopnik E-Shop');
            $message->to($emailss['email']);
            $message->replyTo('shopniktuition@gmail.com', 'Shopnik E-Shop');
            $message->subject('Verify Your Account');
        });
        });
        $email=$request->email;
        return redirect()->route('cstmr.verify',compact('email'))->with('success',"Account Created.Please varify Your Email");
    }
    public function verify(){
        $data['logo']=Logo::first();
        $data['contact']=Contact::first();
        $data['category']=Product::select('cat_id')->groupBy('cat_id')->get();
        $data['subcategory']=Product::select('subcat_id')->groupBy('subcat_id')->get();
        $data['subsubcategory']=Product::select('subsubcat_id')->groupBy('subsubcat_id')->get();
        return view('frontend.pages.verify',$data);
    }
    public function verifyuser(Request $request){
        $user=User::where('email',$request->email)->first();
        if ($user->role=='customer' && $user->status=='0') {
            if ($user->code==$request->code) {
                $user->status='1';
                $user->save();
            }
            $data['logo']=Logo::first();
            $data['sliders']=Slider::all();
            $data['contact']=Contact::first();
            $data['category']=Product::select('cat_id')->groupBy('cat_id')->get();
            $data['subcategory']=Product::select('subcat_id')->groupBy('subcat_id')->get();
            $data['subsubcategory']=Product::select('subsubcat_id')->groupBy('subsubcat_id')->get();
            $data['brand']=Product::select('brand_id')->groupBy('brand_id')->get();
            $data['product']=Product::orderBy('id','desc')->get();
            $data['products']=Product::orderBy('id','asc')->get();
            $data['user']=User::all();
            return view('frontend.pages.dashboard',$data);
        }else{
            $data['logo']=Logo::first();
            $data['sliders']=Slider::all();
            $data['contact']=Contact::first();
            $data['category']=Product::select('cat_id')->groupBy('cat_id')->get();
            $data['subcategory']=Product::select('subcat_id')->groupBy('subcat_id')->get();
            $data['subsubcategory']=Product::select('subsubcat_id')->groupBy('subsubcat_id')->get();
            $data['brand']=Product::select('brand_id')->groupBy('brand_id')->get();
            $data['product']=Product::orderBy('id','desc')->get();
            $data['products']=Product::orderBy('id','asc')->get();
            $data['user']=User::all();
            return view('frontend.layouts.index',$data)->with('error','Customer already Verified');
        }


    }
}
