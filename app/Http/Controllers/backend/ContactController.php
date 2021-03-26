<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Model\Communicate;
use Illuminate\Http\Request;
use Auth;
use App\Model\Contact;

class ContactController extends Controller
{
    public function view(){
        $db_data['count_address']=Contact::count();
        $db_data['all_data']=Contact::get();
        return view('backend.contact.view',$db_data);
    }
    public function add(){
        return view('backend.contact.add');
    }
    public function edit($id){
        $editData=Contact::find($id);
        return view('backend.contact.edit',compact('editData'));
    }
    public function delete($id){
        $data=Contact::find($id);
        $data->delete();
        return redirect()->route('contact.view')->with('success','Contact Deleted Successfully');
    }
    public function commdelete($id){
        $data=Communicate::find($id);
        $data->delete();
        return redirect()->route('contact.communicate')->with('success','Message Deleted Successfully');
    }
    public function update(Request $request,$id){
        $data=Contact::find($id);
        $data->address=$request->address;
        $data->number=$request->number;
        $data->email=$request->email;
        $data->fb_link=$request->fb_link;
        $data->youtube_link=$request->youtube_link;
        $data->twitter_link=$request->twitter_link;
        $data->linked_in_link=$request->linked_in_link;
        $data->gplus_link=$request->gplus_link;
        $data->updated_by=Auth::user()->id;
        $data->save();
        return redirect()->route('contact.view')->with('success', 'Contact Updated Successfully ');
    }
    public function store(Request $request){
        $data=new Contact();
        $data->address=$request->address;
        $data->number=$request->number;
        $data->email=$request->email;
        $data->fb_link=$request->fb_link;
        $data->youtube_link=$request->youtube_link;
        $data->twitter_link=$request->twitter_link;
        $data->linked_in_link=$request->linked_in_link;
        $data->gplus_link=$request->gplus_link;
        $data->created_by=Auth::user()->id;
        $data->save();
        return redirect()->route('contact.view')->with('success', 'Contact Inserted Successfully');
    }
    public function communicate(){
        $data=Communicate::all();
        return view('backend.contact.communicate',compact('data'));
    }
}
