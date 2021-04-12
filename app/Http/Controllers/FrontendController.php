<?php

namespace App\Http\Controllers;

use App\Model\About;
use App\Model\Category;
use App\Model\Communicate;
use App\Model\Contact;
use Illuminate\Http\Request;
use Auth;
use App\Model\Logo;
use App\Model\Order;
use App\Model\Product;
use App\Model\ProductReview;
use App\Model\ProductSize;
use App\Model\Shipping;
use App\Model\Size;
use App\Model\Slider;
use App\User;
//use Illuminate\Support\Facades\Mail;
use Mail;
use DB;

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
        $data['user']=User::where('role','admin')->get();
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
        $data['user']=User::where('role','admin')->get();
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
        $id=Product::where('slug',$slug)->first();
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
        $data['review']=ProductReview::where('product_id',$id->id)->get();
        $data['reviewuser']=ProductReview::where('user_id',Auth::user()->id)->where('product_id',$id->id)->first();
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
        $data['user']=User::where('role','admin')->get();
        $data['products']=Product::orderBy('id','asc')->get();
        $data['catwise']=Product::where('subsubcat_id',$id)->get();
        return view('frontend.pages.catwise',$data);
    }
    public function findproduct(Request $request){
        $name=$request->name;
        $data['product']=Product::where('name',$name)->first();
        if($data['product']){
            $data['logo']=Logo::first();
            $data['sliders']=Slider::all();
            $data['contact']=Contact::first();
            $data['category']=Product::select('cat_id')->groupBy('cat_id')->get();
            $data['subcategory']=Product::select('subcat_id')->groupBy('subcat_id')->get();
            $data['subsubcategory']=Product::select('subsubcat_id')->groupBy('subsubcat_id')->get();
            $data['brand']=Product::select('brand_id')->groupBy('brand_id')->get();
            $data['user']=User::where('role','admin')->get();
            $data['product']=Product::where('name',$name)->first();
            $data['products']=Product::orderBy('id','asc')->get();
            return view('frontend.pages.detail',$data);
        }else{
            return redirect()->back()->with('error','Sorry!!!No product matched');
        }
    }
    public function getproduct(Request $request){
        $name= $request->name;
        $productData=DB::table('products')
                        ->where('name' , 'LIKE' , '%' .$name. '%')
                        ->get();
        $html='';
        $html .= '<div><ul class="list-group">';
        if($productData){
            foreach($productData as $v){
                $html .= '<li class="list-group-item">'.$v->name.'</li>';
            }
        }
        $html .= '</ul></div>';
        return response()->json($html);
    }
    public function allproduct(){
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
        return view('frontend.pages.all',$data);
    }
    public function categoryproduct($name){
        $cats=Category::where('name',$name)->first();
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
        $data['cproduct']=Product::where('cat_id',$cats->id)->get();
        return view('frontend.pages.category',$data);
    }
    public function track(){
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

        return view('frontend.pages.track',$data);
    }
    public function trackorder(Request $request){
        $data=Order::where('id',$request->order_no)->first();
        $ship=Shipping::where('id',$data->shipping_id)->first();
        if($ship->number==$request->number){
            $data['status']=Order::where('id',$request->order_no)->first();
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
            return view('frontend.pages.orderres',$data);
        }else{
            return redirect()->back()->with('error','Sorry!!!Data Not Matched');
        }
    }
    public function submit(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'rated'=>'required',
            'user_id'=>'required',
            'p_id'=>'required',
            'reviewmsg'=>'required',
        ]);
        $review=new ProductReview();
        $review->user_id=$request->user_id;
        $review->user_name=$request->name;
        $review->product_id=$request->p_id;
        $review->review=$request->rated;
        $review->description=$request->reviewmsg;
        $review->save();
        return redirect()->back()->with('success','Thank you for Review.');
    }

}
