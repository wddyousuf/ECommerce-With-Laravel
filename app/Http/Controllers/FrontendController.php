<?php

namespace App\Http\Controllers;

use App\Model\About;
use App\Model\Communicate;
use App\Model\Contact;
use Illuminate\Http\Request;
use Auth;
use App\Model\Logo;
use App\Model\Product;
use App\Model\ProductSize;
use App\Model\Size;
use App\Model\Slider;
use App\User;
//use Illuminate\Support\Facades\Mail;
use Mail;

class FrontendController extends Controller
{
    public function index(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['contact']=Contact::first();
        $data['category']=Product::select('cat_id')->groupBy('cat_id')->get();
        $data['subcategory']=Product::select('subcat_id')->groupBy('subcat_id')->get();
        $data['subsubcategory']=Product::select('subsubcat_id')->groupBy('subsubcat_id')->get();
        $data['brand']=Product::select('brand_id')->groupBy('brand_id')->get();
        $data['product']=Product::orderBy('id','desc')->get();
        $data['products']=Product::orderBy('id','asc')->get();
        $data['user']=User::where('role','admin')->get();
        return view('frontend.layouts.index',$data);
    }
    public function about(){
        $data['about']=About::first();
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['contact']=Contact::first();
        $data['category']=Product::select('cat_id')->groupBy('cat_id')->get();
        $data['subcategory']=Product::select('subcat_id')->groupBy('subcat_id')->get();
        $data['subsubcategory']=Product::select('subsubcat_id')->groupBy('subsubcat_id')->get();
        $data['brand']=Product::select('brand_id')->groupBy('brand_id')->get();
        $data['product']=Product::orderBy('id','desc')->get();
        $data['products']=Product::orderBy('id','asc')->get();
        $data['user']=User::where('role','admin')->all();
        return view('frontend.layouts.aboutus',$data);
    }
    public function contact(){
        $data['about']=About::first();
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['contact']=Contact::first();
        $data['category']=Product::select('cat_id')->groupBy('cat_id')->get();
        $data['subcategory']=Product::select('subcat_id')->groupBy('subcat_id')->get();
        $data['subsubcategory']=Product::select('subsubcat_id')->groupBy('subsubcat_id')->get();
        $data['brand']=Product::select('brand_id')->groupBy('brand_id')->get();
        $data['product']=Product::orderBy('id','desc')->get();
        $data['products']=Product::orderBy('id','asc')->get();
        $data['user']=User::where('role','admin')->all();
        return view('frontend.layouts.contactus',$data);
    }
    public function store(Request $request){
        $data=new Communicate();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->number=$request->mobile_no;
        $data->address=$request->address;
        $data->message=$request->message;
        $data->save();

        $emailss=array(
            'name'=> $request->name,
            'email'=> $request->email,
            'number'=> $request->mobile_no,
            'address'=> $request->address,
            'messages'=> $request->message
        );
        Mail::send('frontend.emails.contactss', $emailss, function ($message) use($emailss) {
            $message->from('shopniktuition@gmail.com', 'Just Chill');
            $message->to($emailss['email']);
            $message->replyTo('shopniktuition@gmail.com', 'Just Chill');
            $message->subject('Confirmation');
        });


        return redirect()->back()->with('success','Your Message has sent successfully.');
    }

    public function detail($slug){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['contact']=Contact::first();
        $data['category']=Product::select('cat_id')->groupBy('cat_id')->get();
        $data['subcategory']=Product::select('subcat_id')->groupBy('subcat_id')->get();
        $data['subsubcategory']=Product::select('subsubcat_id')->groupBy('subsubcat_id')->get();
        $data['brand']=Product::select('brand_id')->groupBy('brand_id')->get();
        $data['user']=User::where('role','admin')->get();
        $data['product']=Product::where('slug',$slug)->first();
        $data['products']=Product::orderBy('id','asc')->get();
        return view('frontend.pages.detail',$data);
    }
    public function catwise($id){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['contact']=Contact::first();
        $data['category']=Product::select('cat_id')->groupBy('cat_id')->get();
        $data['subcategory']=Product::select('subcat_id')->groupBy('subcat_id')->get();
        $data['subsubcategory']=Product::select('subsubcat_id')->groupBy('subsubcat_id')->get();
        $data['brand']=Product::select('brand_id')->groupBy('brand_id')->get();
        $data['user']=User::where('role','admin')->all();
        $data['products']=Product::orderBy('id','asc')->get();
        $data['catwise']=Product::where('subsubcat_id',$id)->get();
        return view('frontend.pages.catwise',$data);
    }
}
