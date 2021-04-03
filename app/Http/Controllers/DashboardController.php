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

class DashboardController extends Controller
{
    public function dashboard(){
        $data['logo']=Logo::first();
        $data['about']=About::first();
        $data['contact']=Contact::first();
        $data['category']=Product::select('cat_id')->groupBy('cat_id')->get();
        $data['subcategory']=Product::select('subcat_id')->groupBy('subcat_id')->get();
        $data['subsubcategory']=Product::select('subsubcat_id')->groupBy('subsubcat_id')->get();
        $data['user']=Auth::user();
        return view('frontend.pages.dashboard',$data);
    }
    public function edit(){
        $data['logo']=Logo::first();
        $data['about']=About::first();
        $data['contact']=Contact::first();
        $data['category']=Product::select('cat_id')->groupBy('cat_id')->get();
        $data['subcategory']=Product::select('subcat_id')->groupBy('subcat_id')->get();
        $data['subsubcategory']=Product::select('subsubcat_id')->groupBy('subsubcat_id')->get();
        $data['user']=Auth::user();
        return view('frontend.pages.editProfile',$data);
    }
    public function store(Request $request,$id){
        $data=User::find($id);
        $data->name=$request->name;
        $data->address=$request->address;
        $data->gender=$request->gender;
        if($request->file('image')){
            $file= $request->file('image');
            if (file_exists('public/upload/user_images/' . $data->image) AND ! empty ($data->image)) {
                unlink('public/upload/user_images/'.$data->image);
            }
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        return redirect()->route('dashboard')->with('success','Profile Updated Successfully');
    }
    public function resetrequest(){
        $data['logo']=Logo::first();
        $data['about']=About::first();
        $data['contact']=Contact::first();
        $data['category']=Product::select('cat_id')->groupBy('cat_id')->get();
        $data['subcategory']=Product::select('subcat_id')->groupBy('subcat_id')->get();
        $data['subsubcategory']=Product::select('subsubcat_id')->groupBy('subsubcat_id')->get();
        $data['user']=Auth::user();
        return view('frontend.pages.reset',$data);
    }
    public function reset(Request $request){
        if(Auth::attempt(['id' => Auth::user()->id, 'password' => $request->password])){
            $user=User::find(Auth::user()->id);
            $user->password=bcrypt($request->password1);
            $user->save();
            return redirect()->route('dashboard')->with('success','Password Changed Successfully');
        }else{
            return redirect()->back()->with('error','Sorry!Current Password did not matched');
        }
    }
}
