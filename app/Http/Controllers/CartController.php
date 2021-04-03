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

class CartController extends Controller
{
    public function cart(){
        $data['logo']=Logo::first();
        $data['contact']=Contact::first();
        $data['category']=Product::select('cat_id')->groupBy('cat_id')->get();
        $data['subcategory']=Product::select('subcat_id')->groupBy('subcat_id')->get();
        $data['subsubcategory']=Product::select('subsubcat_id')->groupBy('subsubcat_id')->get();
        return view('frontend.pages.cart',$data);
    }
    public function addToCart(Request $request){
        $this->validate($request,[
            'color'=>'required',
            'size'=>'required'
        ]);
        $product=Product::where('id',$request->id)->first();
        $size=Size::where('id',$request->size)->first();
        $color=Color::where('id',$request->color)->first();
        cart::add([
            'id'=>$product->id,
            'qty'=>$request->qty,
            'name'=>$product->name,
            'weight'=>'550',
            'price'=>$request->price,

            'options'=>[
                'size_id'=> $request->size,
                'color_id'=>$request->color,
                'size_name'=>$size->name,
                'image'=>$product->image,
                'color_name'=>$color->name
            ],

        ]);
        return redirect()->route('shopping.cart')->with('success','Product Added to cart Successfully');
    }
    public function cartUpdate(Request $request){
        Cart::update($request->rowId,$request->qty);
        return redirect()->route('shopping.cart')->with('success','Product Updated to cart Successfully');
    }
    public function cartDelete($rowId){
        Cart::remove($rowId);
        return redirect()->route('shopping.cart')->with('success','Product Removed Successfully');
    }
}
