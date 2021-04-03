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
}
