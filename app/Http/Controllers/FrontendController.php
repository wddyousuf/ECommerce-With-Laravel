<?php

namespace App\Http\Controllers;

use App\Model\About;
use App\Model\Communicate;
use App\Model\Contact;
use Illuminate\Http\Request;
use Auth;
use App\Model\Logo;
use App\Model\Slider;
//use Illuminate\Support\Facades\Mail;
use Mail;

class FrontendController extends Controller
{
    public function index(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['contact']=Contact::first();
        return view('frontend.layouts.index',$data);
    }
    public function about(){
        $data=About::first();
        return view('frontend.layouts.aboutus',compact('data'));
    }
    public function contact(){
        return view('frontend.layouts.contactus');
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
    public function cart(){
        return view('frontend.pages.cart');
    }
}
